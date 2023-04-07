<html>
<head><title>Clean India</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!--Footer CSS-->
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/index.css" type="text/css">

    <!-- Special Font & Symbol -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!--Custom JavaScript Alert Box-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(function(){
            $("#footer").load("footer.html");
        });
    </script>
</head>
<body>
<?php
if(isset($_GET['sent'])) {
    if(($_GET['sent'] == "true")) {
        echo '<script> swal({
			title: "Thank you, '.$_GET['username'].'",
			text: "You successfully uploaded image.",
			icon: "success",
			button: "Okay",
		}); </script>';
    }
}
?>
<div class="wrapper">
    <header><br>
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>

            <div class="logo">
                Clean India
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="#">About</a></li> -->
                    <li><a href="contactUs.php">Contact</a></li>
                    <?php
                    if(isset($_GET['username'])) {
                        echo '<li><a href="login/logout.php"><button class="btn btn-warning btn-md">Logout</button></a></li>';
                        echo '<li><p>Welcome, '.$_GET['username'].'</p></li>';
                    }
                    else {
                        echo '<li><a href="login/login.php"><button class="btn btn-warning btn-md">Login</button></a></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <div class="one">
        <br><br><br><br><br><br><br><pre><p align="center"style= "color:blue; font-size:20px; font:Algerian; background-color:white">Address : Vadodara Municipal Corporation,
         Khanderao Market Building,
        Vadodara-390209.
        Chandigarh </p> 
        <p align="center"style= "color:blue; font-size:20px; font:Algerian">Toll Free No : 1800-233-0265</p>
        <p align="center"style= "color:blue; font-size:20px; font:Algerian">Email: municipal@gmail.com</p> 
                </div>  
                </div>
            </pre>
        <!-- align="center"style= "color:black; font-size:20px; font:Algerian"-->
     </header>
     <style>
          div.one{
               opacity:0.3;
               }
    </style>


<div id="footer"></div>*/
<script type="text/javascript">

    // Menu-toggle button

    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });

    // Scrolling Effect

    $(w indow).on("scroll", function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
        }

        else {
            $('nav').removeClass('black');
        }
    })
-->

</script>
<script src="js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>            