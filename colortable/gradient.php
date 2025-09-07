<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Linear-Gradient Colors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, sans-serif;
        }
        
        .colorBoxes{
            border: 1px solid #ccc;
            box-shadow: 5px 5px 5px black;
            cursor: pointer;
        }
        .msg{
            padding: 10px;
            font-size: 20px;
            position: fixed;
            top: 100px;
            right: 100px;
        }         
    </style>
</head>
<body>

<?php include("components/nav.php");?>


<section id="colors" class="container text-center py-4">
    <h2 style="background: linear-gradient(to right, #D952F5, #3C38B8); padding: 10px; color: #FFFF; border-radius: 10px;">Unique Linear-Gradient Colors</h2>
    <div id="color-grid"></div>
</section>

    <?php include("components/footer.php");?>
    <script type="text/javascript" src="js/gscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
