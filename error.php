<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Error - MyVoice</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="./styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="./styles/footer.css"/>
        <style>
            p.c{
                font-family: 'Press Start 2P', cursive;
                color:black;
                font-size:220%;
            }
            div.item{
                text-align:center;
                background-color: transparent;
                border: 1px solid transparent;
                margin-top: 90px;
                margin-bottom: 1px;
            }
            div#center{
                margin-right:auto;
                margin-left:auto;
            }
            div#center>ul{
	            list-style-type:none;
	            padding-left:0;
	            text-align:center;
                font-size:150%;
	            font-style:italic;
            }
        </style>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>
        
        <!--Error Message-->
        <div id="center" class="container item">
            <img src="https://image.flaticon.com/icons/svg/202/202381.svg" width="150px" height="150px">
            <p class="c">Nothing to display</p>
            <ul>
                <li>We have got nothing to show you on this web page.</li>
                <li>Press the back button or try visiting another page.</li>
            </ul>
        </div>

        <!--Footer-->
        <?php include "includes/footer.php";?>
        
        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>
