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
        <link rel="stylesheet" type="text/css" href="CSS/productCategory.css"
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

        <div class="container">
            <div class="row">

                <div class="col-sm-2" id="productCategoryFilter">
                    <h5 class="filterTitle">Material</h5>
                    <div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Option 01</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Option 02</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Option 03</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" disabled> <span class="label-text">Option 04</span>
					</label>
				</div>
			

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">100% Resirkulert</label>    </div>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">60% Resirkulert</label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">30% Resirkulert</label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">Glans</label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">Laminert</label>
                        
                        

                    <h5 class="filterTitle">Type</h5>
                    <ul id='filterType'>


                    </ul>

                    <h5 class="filterTitle">Produsent</h5>
                    <ul id='filterBrand'>


                    </ul>



                </div>

                <div class="col-sm-10" id="productCategoryDisplay">
                    <div class="row" id="productCategoryHeader">
                        <div class="col" id="productCategoryTitle">
                        </div>
                        <div class="col" id="productCategorySotring">  
                        </div>    
                    </div>

                    <div class="row" id="productCategoryList1">

                        <div class="col-sm-4" id="productCategoryItem1_1">
                            <div class="productCategoryItemDescription">Test 1</div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem1_2">
                            <div class="productCategoryItemDescription">Test1</div>

                        </div>

                        <div class="col-sm-4" id="productCategoryItem1_3">
                            <div class="productCategoryItemDescription">Test1</div>
                        </div>
                    </div>


                    <div class="row" id="productCategoryList2">
                        <div class="col-sm-4" id="productCategoryItem2_1">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem2_2">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem2_3">
                            <div class="productCategoryItemDescription"></div>
                        </div>
                    </div>


                    <div class="row" id="productCategoryList3">
                        <div class="col-sm-4" id="productCategoryItem3_1">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem3_2">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem3_3">
                            <div class="productCategoryItemDescription"></div>
                        </div>
                    </div>


                    <div class="row" id="productCategoryList4">
                        <div class="col-sm-4" id="productCategoryItem4_1">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem4_2">
                            <div class="productCategoryItemDescription"></div>
                        </div>

                        <div class="col-sm-4" id="productCategoryItem4_3">
                            <div class="productCategoryItemDescription"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer"><?php include_once('Templates/footer.php'); ?></div>
    </body>
</html>
