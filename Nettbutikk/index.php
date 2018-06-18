<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mettes Hobby</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="CSS/custombootstrap.css">
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/home.css">

    </head>
    <body>
        <div id="header">
            <div class="container" >
                <div class="row">
                    <div class="col-12 col-m-12">
                        <div><?php include('Templates/header.php'); ?></div>
                        <div><?php include('Templates/navigation.php'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsCarousel">
            <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#newsCarousel" data-slide-to="1"></li>
                    <li data-target="#newsCarousel" data-slide-to="2"></li>
                    <li data-target="#newsCarousel" data-slide-to="4"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img  src="images/slide1.jpg" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/slide2.jpg" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/slide3.jpg" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/slide4.jpg" width="1100" height="500">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#newsCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#newsCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        
        <div class="container" id="newProducts">
            <h4 id="newProductHeadline" >Nye Produkter:</h4>
            <div class="row" id="newProductsTopRow">
                <div class="col" id="newProduct1" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p1.jpg" class="img-fluid">
                    <h6>Frida's høst feiring - Stempel</h6>
                    <p>80 NOK</p>
                </div>
                <div class="col" id="newProduct2" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p2.jpg" class="img-fluid">
                    <h6>Skalpell sett</h6>
                    <p>200 NOK</p>
                </div>
                <div class="col" id="newProduct3" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p3.jpg" class="img-fluid">
                    <h6>Gregorovitch's flower dies 15</h6>
                    <p>50 NOK</p></div>
            </div>
            <div class="row" id="newProductsBottomRow">
                <div class="col" id="newProduct4" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p4.jpg" class="img-fluid">
                    <h6>Maja Design - Vintage Summer Basics</h6>
                    <p>80 NOK</p>
                </div>
                <div class="col" id="newProduct5" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p5.jpg" class="img-fluid">
                    <h6>Scotch Scrapbooking lim</h6>
                    <p>200 NOK</p>
                </div>

                <div class="col" id="newProduct6" style="padding-left: 1vw;  padding-right: 1vw;">
                    <img src="images/p6.jpg" class="img-fluid">
                    <h6>Tim Holtz Ink Starter Set</h6>
                    <p>70 NOK</p></div>
            </div>
        </div>








        <div class="footer"><?php include_once('Templates/footer.php'); ?></div>
    </body>
</html>
