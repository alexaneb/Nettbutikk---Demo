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
    </head>
    <body>
        <div id="header">
            <div class="container" >
                <div class="row">
                    <div class="col">
                        <div><?php include('Templates/header.php'); ?></div>
                        <div><?php include('Templates/navigation.php'); ?></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer"><?php include_once('Templates/footer.php'); ?></div>
    </body>
</html>
