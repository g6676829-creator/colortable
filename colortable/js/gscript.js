// Function to generate random hex colors
function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Function to create gradient colors
function createGradientColors(count) {
    const gradientColors = [];
    for (let i = 0; i < count; i++) {
        const color1 = getRandomColor();
        const color2 = getRandomColor();
        gradientColors.push(`linear-gradient(to right, ${color1}, ${color2})`);
    }
    return gradientColors;
}

// Generate 500 gradient colors (aap count badal sakte hain)
const gradientColors = createGradientColors(500);

    function createColorBoxes() {
        const container = document.getElementById("color-grid");
        container.innerHTML = ""; // Clear previous content

        const totalColors = gradientColors.length; // Number of colors available
        const colorsPerRow = 9; // Each row will have 9 small boxes (3 per col-md-4)

        for (let i = 0; i < totalColors; i += colorsPerRow) {
            let row = document.createElement("div");
            row.className = "row";

            for (let j = 0; j < 3; j++) { // Each Bootstrap col-md-4 contains 3 small boxes
                if (i + j * 3 >= totalColors) break; // Stop if we reach the end of colors

                let col = document.createElement("div");
                col.className = "col-md-4";

                let innerRow = document.createElement("div");
                innerRow.className = "row";

                for (let k = 0; k < 3; k++) { // Each inner row contains 3 color boxes
                    if (i + j * 3 + k >= totalColors) break;

                    const color = gradientColors[i + j * 3 + k]; // Get the color from the array

                    let boxCol = document.createElement("div");
                    boxCol.className = "col-4 p-2";

                    let box = document.createElement("div");
                    box.className = "rounded colorBoxes";
                    box.style.background = color;
                    box.style.height = "80px";
                    box.title = color; // Show hex color on hover

                    boxCol.appendChild(box);
                    innerRow.appendChild(boxCol);
                }

                col.appendChild(innerRow);
                row.appendChild(col);
            }

            container.appendChild(row);
        }
    }

    createColorBoxes();

    const colorBoxes = document.getElementsByClassName('colorBoxes');
    for (let l = 0; l < colorBoxes.length; l++) {
        colorBoxes[l].addEventListener('click', function () {
            const hexCode = this.title;
            if (navigator.clipboard.writeText(hexCode)) {
                const sound = new Audio("sounds/copy.wav");
                sound.play();
                let msg = "Copied: " + hexCode;
                let span = document.createElement("SPAN");
                span.classList = "alert alert-success msg";
                span.innerHTML = msg;
                this.append(span);
                setTimeout(function(){
                    span.classList = "alert alert-success msg d-none";
                    span.innerHTML = "";
                },1000);
            } else {
                alert('Failed to copy.');
            }
        });
    }