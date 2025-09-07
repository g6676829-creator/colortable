// Function to generate a random shade of a given color
function generateShade(redRange, greenRange, blueRange) {
    const r = redRange.min + Math.floor(Math.random() * (redRange.max - redRange.min + 1));
    const g = greenRange.min + Math.floor(Math.random() * (greenRange.max - greenRange.min + 1));
    const b = blueRange.min + Math.floor(Math.random() * (blueRange.max - blueRange.min + 1));

    // Convert RGB to Hex
    const toHex = (value) => {
        const hex = value.toString(16); // Convert to hexadecimal
        return hex.length === 1 ? '0' + hex : hex; // Ensure two digits
    };

    return `#${toHex(r)}${toHex(g)}${toHex(b)}`;
}

// Function to create color boxes
function createColorBoxes(containerId, colorGenerator) {
    const container = document.getElementById(containerId);
    container.innerHTML = ""; // Clear previous content

    for (let i = 0; i < 100; i += 9) { // Each row will have 9 small boxes (3 per col-md-4)
        const row = document.createElement("div");
        row.className = "row";

        for (let j = 0; j < 3; j++) { // Each Bootstrap col-md-4 contains 3 small boxes
            if (i + j * 3 >= 100) break; // Stop if we reach 100

            const col = document.createElement("div");
            col.className = "col-md-4";

            const innerRow = document.createElement("div");
            innerRow.className = "row";

            for (let k = 0; k < 3; k++) { // Each inner row contains 3 color boxes
                if (i + j * 3 + k >= 100) break;

                const color = colorGenerator();
                console.log(color);

                const boxCol = document.createElement("div");
                boxCol.className = "col-4 p-2";

                const box = document.createElement("div");
                box.className = "rounded colorBox";
                box.style.backgroundColor = color;
                box.style.height = "80px";
                box.title = color; // Show RGB color on hover

                boxCol.appendChild(box);
                innerRow.appendChild(boxCol);
            }

            col.appendChild(innerRow);
            row.appendChild(col);
        }

        container.appendChild(row);
    }
}

// Color Generators for Popular Shades
function generateBlueShade() {
    return generateShade(
        { min: 0, max: 80 }, // Low Red
        { min: 0, max: 180 }, // Medium Green
        { min: 200, max: 255 } // High Blue
    );
}

function generateRedShade() {
    return generateShade(
        { min: 200, max: 255 }, // High Red
        { min: 0, max: 80 }, // Low Green
        { min: 0, max: 80 } // Low Blue
    );
}

function generateGreenShade() {
    return generateShade(
        { min: 0, max: 80 }, // Low Red
        { min: 100, max: 255 }, // High Green
        { min: 0, max: 80 } // Low Blue
    );
}

function generatePurpleShade() {
    return generateShade(
        { min: 100, max: 200 }, // Medium Red
        { min: 0, max: 80 }, // Low Green
        { min: 100, max: 200 } // Medium Blue
    );
}

function generateOrangeShade() {
    return generateShade(
        { min: 200, max: 255 }, // High Red
        { min: 100, max: 180 }, // Medium Green
        { min: 0, max: 80 } // Low Blue
    );
}

function generateYellowShade() {
    return generateShade(
        { min: 200, max: 255 }, // High Red
        { min: 200, max: 255 }, // High Green
        { min: 0, max: 80 } // Low Blue
    );
}

function generatePinkShade() {
    return generateShade(
        { min: 200, max: 255 }, // High Red
        { min: 100, max: 180 }, // Medium Green
        { min: 150, max: 220 } // Medium Blue
    );
}

function generateTealShade() {
    return generateShade(
        { min: 0, max: 80 }, // Low Red
        { min: 150, max: 220 }, // Medium Green
        { min: 150, max: 220 } // Medium Blue
    );
}

function generateBlackShade() {
    return generateShade(
        { min: 0, max: 30 }, // Very low Red
        { min: 0, max: 30 }, // Very low Green
        { min: 0, max: 30 }  // Very low Blue
    );
}

function generateGreyShade() {
    // Generate a random value between 0 and 255 for the grey shade
    const greyValue = Math.floor(Math.random() * 256);
    
    // Return the shade with equal RGB values
    return generateShade(
        { min: greyValue, max: greyValue }, // Red
        { min: greyValue, max: greyValue }, // Green
        { min: greyValue, max: greyValue }  // Blue
    );
}

// Create color boxes for all popular shades
createColorBoxes("blue-color-grid", generateBlueShade);
createColorBoxes("red-color-grid", generateRedShade);
createColorBoxes("green-color-grid", generateGreenShade);
createColorBoxes("black-color-grid", generateBlackShade);
createColorBoxes("grey-color-grid", generateGreyShade);
createColorBoxes("purple-color-grid", generatePurpleShade);
createColorBoxes("orange-color-grid", generateOrangeShade);
createColorBoxes("yellow-color-grid", generateYellowShade);
createColorBoxes("pink-color-grid", generatePinkShade);
createColorBoxes("teal-color-grid", generateTealShade);

// Add click event listeners to color boxes
const colorBoxes = document.getElementsByClassName('colorBox');
for (let box of colorBoxes) {
    box.addEventListener('click', function () {
        const hexcode = this.title;
        navigator.clipboard.writeText(hexcode)
        .then(() => {
            const sound = new Audio("sounds/copy.wav");
            sound.play();
            let msg = "Copied: " + hexcode;
            let span = document.createElement("SPAN");
            span.classList = "alert alert-success msg";
            span.innerHTML = msg;
            this.appendChild(span);
            setTimeout(function(){
                span.classList = "alert alert-success msg d-none";
                span.innerHTML = "";
            },1000);
        })
        .catch((err) => {
            console.error("Failed to copy text: ", err);
            alert("Failed to copy text. Please try again.");
        });
    });
}