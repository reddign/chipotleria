<!-- Vinaya's Code -->
<html>

    <head>
        
        <link rel="stylesheet"  href="finish.css">
        <title>Mama's Chipotleria</title>

        <style>
           ul{
            list-style-type: none;
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
            body {
                background-size: 1600px 800px; /* width height */
                background-position: 90% -120%; /* 90% from the left, 50% from the top */
            }
            main {
                    margin-right: 100px;
                     margin-top: 10px;
                  }

        </style>
         <?php
        require "globalJS.php";
        ?>
</head>

<body>
    <header>
        <h1>Mama's Chipotleria</h1>
    </header>
    
    <main>
        <canvas id="canvas" width="1500" height="600"></canvas>
        <!-- size of screen (keep these measurements constant)/|\ -->
        <button onclick="start()">Done!</button>
        <script>
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            const background = new Image();

            background.onload = function() {
                ctx.drawImage(background, 0, 0, canvas.width, canvas.height);
            };
            background.src = 'checkout.png'; // background image

            function start() {
                let x = Math.floor(Math.random() * 10) + 1;
                alert(`You got $${x}.`);
            }
        </script>
    </main>

    <footer>
        <nav>
            <ul>
                <li><a href="order.htm">ORDER</a></li>
                <li><a href="base.html">BASE</a></li>
                <li><a href="toppings.html">TOPPINGS</a></li>
                <li><a href="finish.php">FINISH</a></li>
                <!-- add the score link here <li><a href="">SCORE</a></li> -->
            </ul>
        </nav>
    </footer>
</body>

</html>