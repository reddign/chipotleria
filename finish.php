<!-- Vinaya's Code -->


<link rel="stylesheet"  href="finish.css">
<title>Mama's Chipotleria</title>

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
            body {
                background-image: url('checkout.png');
                background-size: 1600px 800px; /* width height */
                background-position: 90% -120%; /* 90% from the left, 50% from the top */
            }

        </style>
         <?php
        require "globalJS.php";
        ?>
    </header>

    <body>
        <header>
            <nav>
                <ul>
                    <li>
                            <li><a href="order.htm">ORDER</a></li>
                            <li><a href="base.php">BASE</a></li>
                            <li><a href="toppings.php">TOPPINGS</a></li>
                            <li><a href="finish.php">FINISH</a></li>
                            <!-- add the score link here<li><a href="">SCORE</a></li> -->
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
<button onclick="start()">Done!</button>
        <script>
            function start(){
                
    let x= Math.random()*10;
    x= Math.round(x);
    if(x==1){
    alert('Ypu got $1.');
}else if(x==2){
    alert("You got $2.");
}else if(x==3){
    alert("You got $3.");
}else if(x==4){
    alert("You got $4.");
}else if(x==5){
alert("You got $5.");
}else if(x==6){
    alert("You got $6!");
}else if(x==7){
    alert("You got $7!");
}else if(x==8){
    alert("You got $8!");
}else if(x==9){
    alert("You got $9!");
}else{
    alert("You got $10!");
}
            }
        </script>

