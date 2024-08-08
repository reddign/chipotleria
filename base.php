<!-- Name: Sudiksha -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <title>Mama's Chipotleria</title>

  <style>
    .myImage {
      display: none;
    }
  </style>
  <script>
    let imageName = "";

    function showImage(imageId) {
      if(imageName!="" && imageName!=imageId){
        console.log("Turn off ",imageName);
        document.getElementById(imageName).style.display = "none";
      }
      imageName = imageId;
      document.getElementById(imageId).style.display = "block";
    }
  </script>
</head>
<header>
  <h1>BASE!</h1>
</header>
<body>

  <img id="image1" class="myImage" src="tortilla.png" alt="Image 1" >
  <img id="image2" class="myImage" src="bowl.png" alt="Image 2" >

  <!-- <img id="image3" class="myImage" src="whiteRice.png" alt="Image 3">
  <img id="image4" class="myImage" src="brownRice.png" alt="Image 4"> -->


  <button onclick="showImage('image1')">Tortilla</button>
  <button onclick="showImage('image2')">Bowl</button>

  <!-- <button onclick="showImage('image3')">White Rice</button>
  <button onclick="showImage('image4')">Brown Rice</button> -->
  <!-- <button onclick="showImage('image3')">Show Image 3</button> -->
  <!-- <img id="image3" class="myImage" src="your-image-url3.jpg" alt="Image 3"> -->

</body>
</html>

<!DOCTYPE html>

<html>
    <header>
        <title>NAVBAR</title>

        <style>
           ul{
            list-style-type: none;
            padding: 50;
            margin: 0;
            overflow: hidden;
            background-color: maroon;
           }

           li{
            float: left;
           }

           li a{
                display: block;
                color: bisque;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 20px;
                margin-top: 15px;
            }

            header{
                padding:5px;
                text-align: left;
                background-color: maroon;
                color: bisque;
            }

            .navbar a{
                bottom: 0;
                left: 0;
                right: 0; 
                z-index: 5;
                position: fixed;
            }

            .right{
                margin-left: 300px;
                margin-top: 200px;
            }

            .left{
                margin-right: 300px;
                margin-top: 1000px;
            }

            body {
                background-image: url('woodBackground.jpg');
                background-size: cover;
            }

        </style>
            <nav>
                <ul>
                    <li>
                            <li><a href="order.htm">ORDER</a></li>
                            <li><a href="base.php">BASE</a></li>
                            <li><a href="toppings.php">TOPPINGS</a></li>
                            <li><a href="finish.php">FINISH</a></li>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>