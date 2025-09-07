<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hex Color Picker & Explorer</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    
    <style type="text/css">
    	.colorBox{
            border: 1px solid #ccc;
            box-shadow: 5px 5px 5px black;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .color-menu{
        	width: 50%;
        	padding: 10px;
        	border-radius: 10px;
        	background: rgba(0, 0, 0, 0.7);
        	position: fixed;
        	top: 70px;
        	right: 15px;
        	display: flex;
        	justify-content: space-between;
        }
        .color-menu button:hover{
        	box-shadow: 0px 0px 5px #FFFF;
        }
        .msg{
        	padding: 1px;
        	font-size: 14px;
        }
        @media (max-width:768px) {
        	.color-menu{
        		display: none;
        	}
        }
    </style>
</head>
<body>
	<?php include("components/nav.php");?>
	<div class="color-menu">
		<a href="#blue">
			<button style="background-color: blue;" class="btn btn-sm text-light">Blue</button>
		</a>
		<a href="#purple">
			<button style="background-color: purple;" class="btn btn-sm text-light">Purple</button>
		</a>
		<a href="#red">
			<button style="background-color: red;" class="btn btn-sm text-light">Red</button>
		</a>
		<a href="#green">
			<button style="background-color: green;" class="btn btn-sm text-light">Green</button>
		</a>
		<a href="#black">
			<button style="background-color: #1d181e;" class="btn btn-sm text-light">Black</button>
		</a>
		<a href="#grey">
			<button style="background-color: #ccc;" class="btn btn-sm text-light">Grey</button>
		</a>
		<a href="#orange">
			<button style="background-color: orange;" class="btn btn-sm text-dark">Orange</button>
		</a>
		<a href="#yellow">
			<button style="background-color: yellow;" class="btn btn-sm text-dark">Yellow</button>
		</a>
		<a href="#pink">
			<button style="background-color: pink;" class="btn btn-sm text-dark">Pink</button>
		</a>
		<a href="#teal">
			<button style="background-color: teal;" class="btn btn-sm text-light">Teal</button>
		</a>
	</div>
	
	<section id="colors" class="container py-4">
		<h1 class="fs-2" id="blue">Blue Shades</h1>
    	<div id="blue-color-grid" class="color-grid"></div>

    	<h1 class="fs-2" id="purple" style="background-color: #8e05c1; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Purple Shades</h1>
		<div id="purple-color-grid" class="color-grid"></div>

    	<h1 class="fs-2" id="red" style="background-color: #FF0000; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Red Shades</h1>
		<div id="red-color-grid" class="color-grid"></div>

		<h1 class="fs-2" id="black" style="background-color: #1d181e; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Black Shades</h1>
		<div id="black-color-grid" class="color-grid"></div>

		<h1 class="fs-2" id="grey" style="background-color: #585858; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Grey Shades</h1>
		<div id="grey-color-grid" class="color-grid"></div>

		<h1 class="fs-2" id="green" style="background-color: #00753e; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Green Shades</h1>
		<div id="green-color-grid" class="color-grid"></div>
		
		<h1 class="fs-2" id="orange" style="background-color: #f46b00; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Orange Shades</h1>
		<div id="orange-color-grid" class="color-grid"></div>

		<h1 class="fs-2" id="yellow" style="background-color: #ffe046; padding: 10px; color: #170416; border-radius: 10px; margin-top: 30px;">Yellow Shades</h1>
		<div id="yellow-color-grid" class="color-grid"></div>
		<h1 class="fs-2" id="pink" style="background-color: #e46dd6; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Pink Shades</h1>
		<div id="pink-color-grid" class="color-grid"></div>
		
		<h1 class="fs-2" id="teal" style="background-color: #49a0db; padding: 10px; color: #FFFF; border-radius: 10px; margin-top: 30px;">Teal Shades</h1>
		<div id="teal-color-grid" class="color-grid"></div>
	</section>

	<?php include("components/footer.php");?>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>