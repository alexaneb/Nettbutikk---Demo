<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
            <label for="show-menu" class="show-menu"><img src="icons/hamburgerMenu32.png"/></label>

            <input type="checkbox" id="show-menu" role="button">
            <ul class="headnav" id="menu">
                <li><a href="#">Papir</a></li>
                <li><a href="pynt.php">Pynt</a></li>
                <li><a href="stempler.php">Stempler</a></li>
                <li><a href="dies.php">Dies</a></li>
                <li><a href="verktøy.php">Verktøy</a></li>
                <li>  <a href="#" id="shoppingCart">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                    </a></li>
                <li>    
                    <form class="form-vertical" id="headerSearch">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Søk" aria-label="Search">
                    </form>
                </li>
            </ul>
        </div>
    </body>
</html>
