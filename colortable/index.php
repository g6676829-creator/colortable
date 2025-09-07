<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer’s Color Table: Get Hex Codes Instantly</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, sans-serif;
        }
        .hero {
            background: linear-gradient(to right, #f7b8fc, #6ef49f);
            text-align: center;
            padding: 50px 20px;
        }
        .colorBoxes{
            border: 1px solid #ccc;
            box-shadow: 5px 5px 5px black;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .msg{
            padding: 1px;
            font-size: 12px;
        }         
    </style>
</head>
<body>

<?php include("components/nav.php");?>

<section class="hero">
    <div class="container">
        <h1>Find the Perfect Colors for Your Projects</h1>
        <p>Get fast and easy access to hex codes of colors and gradients for website development.</p>
        <a href="http://localhost:8080/colortable/colors.php" class="btn btn-info mt-3">Explore Colors</a>
    </div>
</section>

<section id="colors" class="container text-center py-4">
    <h2>Comman Colors</h2>
    <div id="color-grid"></div>
</section>

<script>
    const commonColors = [
        "#FF0000", "#00FF00", "#0000FF", "#FFFF00", "#00FFFF", "#FF00FF", "#C0C0C0", "#808080", "#800000", "#808000",
        "#008000", "#800080", "#008080", "#000080", "#FFA500", "#A52A2A", "#8B4513", "#D2691E", "#B22222", "#FF4500",
        "#FF8C00", "#FFD700", "#DAA520", "#F0E68C", "#BDB76B", "#9ACD32", "#6B8E23", "#7CFC00", "#ADFF2F", "#32CD32",
        "#228B22", "#008000", "#006400", "#66CDAA", "#8FBC8B", "#20B2AA", "#00CED1", "#40E0D0", "#48D1CC", "#00FFFF",
        "#00BFFF", "#1E90FF", "#4169E1", "#0000FF", "#00008B", "#000080", "#191970", "#8A2BE2", "#4B0082", "#483D8B",
        "#6A5ACD", "#7B68EE", "#9370DB", "#8B008B", "#800080", "#FF1493", "#FF69B4", "#FFB6C1", "#FFC0CB", "#DB7093",
        "#FF7F50", "#FF6347", "#FF4500", "#FF8C00", "#FFA07A", "#FA8072", "#E9967A", "#F08080", "#CD5C5C", "#DC143C",
        "#B22222", "#8B0000", "#FFFFFF", "#F5F5F5", "#DCDCDC", "#D3D3D3", "#C0C0C0", "#A9A9A9", "#808080", "#696969",
        "#000000"
    ];

    function createColorBoxes() {
        const container = document.getElementById("color-grid");
        container.innerHTML = ""; // Clear previous content

        const totalColors = commonColors.length; // Number of colors available
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

                    const color = commonColors[i + j * 3 + k]; // Get the color from the array

                    let boxCol = document.createElement("div");
                    boxCol.className = "col-4 p-2";

                    let box = document.createElement("div");
                    box.className = "rounded colorBoxes";
                    box.style.backgroundColor = color;
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
</script>
    
    <?php include("components/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
