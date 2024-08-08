<head>
    <!-- <link rel="Stylesheet" href="style.css"> -->
    <title>Toppings Station Mama's Chipotleria</title>
</head>
<body>
   
        
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
          <h1>TOPPINGS PAGE</h1>
        </header>
        <body>
        
          <img id="image1" class="myImage" src="beef.png" alt="Image 1" style="height:200;" >
          <img id="image2" class="myImage" src="nonspecifiedmeet.png" alt="Image 2" style="height:200;">
          <img id="image3" class="myImage" src="Chicken.png" alt="Image 3" style="height:200;">
           <!--<img id="image4" class="myImage" src="brownRice.png" alt="Image 4"> -->
          <img id="image4" class="myImage" src="vegtop1.png" alt="Image 4" style="height:200;" >
          <img id="image5" class="myImage" src="vegtop2.png" alt="Image 5" style="height:200;">
          <img id="image6" class="myImage" src="vegtop3.png" alt="Image 6" style="height:200;">
          <img id="image7" class="myImage" src="vegtop4.png" alt="Image 7" style="height:200;" >
          <img id="image8" class="myImage" src="vegtop5.png" alt="Image 8" style="height:200;">
          <img id="image9" class="myImage" src="vegtop6.png" alt="Image 9" style="height:200;">
          
          <BR>
                
          <h2>Choose your protein</h2>
          <button onclick="showImage('image1')">Beef</button>
          <button onclick="showImage('image2')">Tofu</button>
          <button onclick="showImage('image3')">Chicken</button>
          <BR>
          <BR>
            <h2>Choose your Vegetables</h2>
            <button onclick="showImage('image9')">Green Beans</button>
            <button onclick="showImage('image5')">Lettuce</button>
            <button onclick="showImage('image8')">Black beans</button>
            <button onclick="showImage('image4')">Corn</button>
          <button onclick="showImage('image6')">Fajita veggies</button>
          <button onclick="showImage('image7')">Kidney beans</button>
          <!-- <button onclick="showImage('image4')">Brown Rice</button> -->
          <!-- <button onclick="showImage('image3')">Show Image 3</button> -->
          <!-- <img id="image3" class="myImage" src="your-image-url3.jpg" alt="Image 3"> -->
        
        </body>
    <!-- topping station -->
    
        <!-- <header>
            <h1>Toppings Station</h1>
        </header> -->
            <script src="toppings.js"></script>
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
                     bottom: 1000;
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
                     padding:5px;
                     text-align: left;
                     color: bisque;
                     background-image: url('woodBackground.jpg');
                     background-size: cover;
                 }

                  main {
                    margin-right: 100px;
                     margin-top: 10px;
                  }
                    
                  
     
             </style>
        <main>
        
            <img src="burrito.png" height="100" alt="Burrito">

            <!-- <img src="beef.png" alt="logo" style="height:200; bottom: 30; right: 0; position: fixed">
            <img src="nonspecifiedmeet.png" alt="logo" style="height:200; bottom: 20; right: 200; position: fixed"> -->
            <img src="tortilla.png" alt="tortilla" style="height:450" coords="150,20,350,200"; >
            <thread>

            </table>
        </main>

        <footer>
            <p> </p>
        </footer>
    
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
                text-align: center;
            }

            .navbar a{
                bottom: 0;
                left: 0;
                right: 0; 
                z-index: 5;
                position: fixed;
            }

        </style>
    </header>

    <body>
        <header>
            <nav>
                <ul>
                    <li>
                            <li><a href="order.htm">ORDER</a></li>
                            <li><a href="base,php">BASE</a></li>
                            <li><a href="toppings.php">TOPPINGS</a></li>
                            <li><a href="finish.php">FINISH</a></li>
                            
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>