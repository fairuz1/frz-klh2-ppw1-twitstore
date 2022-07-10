<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;500&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Twitstore, Everything in one clik of a button!</title>

    <style>
        html {scroll-behavior: smooth;}
        * {
            font-family: 'Manrope', sans-serif;
        }
        
        .btn {
            background-color: #C6396D;
            color: white;
        }
        .btn:hover {
            background-color: #39C692;
            color: white;
        }
        
        a {
            text-decoration: none;
        }

    </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px;">
                <span><b style="color: #C6396D;">Twit</b></span><span><b style="color: #39C692;">store</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                            Username
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" class="d-inline-block align-text-top">
                            <li><a class="dropdown-item" href="#">Account Setting</a></li>
                            <li><a class="dropdown-item" href="#">Billing Setting</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="http://localhost/PROJECT_UAS/landingPage.html">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- heading -->
    <div class="container-fluid text-center" style="color: white;">
        <div class="row" style="background-color: #C6396D;">
            <div class="col mt-2 mb-4">
                <h1 class="h1 mb-lg-0" style="font-size: 45px;">Many things to offer, Just click the button !</h1>
                <small>Products that visible, are available</small>
                
                <div class="row justify-content-center">
                    <div class="col-sm-auto mt-3">
                        <button class="btn btn-lg" style="color: #C6396D; background-color: white;"><b><a href="#burger" style="color: #C6396D;">Burger?</a></b></button>
                    </div>
                    <div class="col-sm-auto mt-3">
                        <button class="btn btn-lg" style="color: #C6396D; background-color: white;"><b><a href="#pizza" style="color: #C6396D;">Pizza?</a></b></button>
                    </div>
                    <div class="col-sm-auto mt-3">
                        <button class="btn btn-lg" style="color: #C6396D; background-color: white;"><b><a href="#drinks" style="color: #C6396D;">Drinks?</a></b></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- search items -->
    <nav class="navbar navbar-light" style="background-color: #39C692;">
        <form class="container-fluid">
            <div class="input-group">
                <span class="input-group-text">Search</span>
                <input type="text" onclick="search_items()" class="form-control" placeholder="Find your favorit items here!" id="search">
            </div>
        </form>
    </nav>

    <br>
    <div class="container-fluid mb-3" id="burger">
        <!-- Burger Heading -->
        <div class="container-fluid text-center">
            <div class="row mt-4">
                <div class="col">
                    <h1 class="h1 mb-1" style="font-size: 50px;"><b>Twit's </b><span><b style="color: #C6396D;">Bur</b></span><span><b style="color: #39C692;">ger</b></span></h1>
                    <small>Savor the tastiest burger you ever taste!</small>
                </div>
            </div>
        </div>
        <br>

        <!-- Burger Main -->
        <div class="container text-center">
            <div class="row">
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/b1 cropped.jpg" class="img-fluid" id="TRPLE CHEESE BURGER DELUXE WITH FRIES">
                    <h3 class="h3 mt-3">TRPLE CHEESE BURGER DELUXE WITH FRIES</h3>
                    <p>3 Beef burger topped with salad, bacon/onion ring, and melted mozzarella. With addition of 2 pack of French Fries.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>69.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/b2 cropped.jpg" class="img-fluid" id="BEEF BURGER DELUXE WITH FRIES AND SMOTHIE">
                    <h3 class="h3 mt-3">BEEF BURGER DELUXE WITH FRIES AND SMOTHIE</h3>
                    <p>Single Beef burger topped with salad, pickle, and delicious Sauce. With addition of a pack of French Fries and Smothie of your choice.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>49.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/b3 cropped.jpg" class="img-fluid" id="DOUBLE MONSTER BEEF BURGER WITH COKE">
                    <h3 class="h3 mt-3">DOUBLE MONSTER BEEF BURGER WITH COKE</h3>
                    <p>2 monsterus Beef burger topped with avocado salad, pickle, and goat cheese. With addition of 2 bottles of Coke.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>79.999 K</h2></button>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Pizza Heading -->
        <div class="container text-center" id="pizza">
            <div class="row">
                <div class="col mt-4">
                    <h1 class="h1 mb-1" style="font-size: 50px;"><b>Twit's </b><span><b style="color: #C6396D;">Piz</b></span><span><b style="color: #39C692;">za</b></span></h1>
                    <small>Enjoy the most amazing pizza you could find in this region!</small>
                </div>
            </div>
        </div>
        <br>

        <!-- Pizza Main -->
        <div class="container text-center">
            <div class="row mt-3">
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/p1.jpg" class="img-fluid" id="VEGETABLE PIZZA WITH SMOKED PAPRIKA, MUSHROOM, AND CORN">
                    <p></p>
                    <h3 class="h3">VEGETABLE PIZZA WITH SMOKED PAPRIKA, MUSHROOM, AND CORN</h3>
                    <p>Goat cheese pizza topped with deleciuous smoked paprika and mushroom.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>49.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/p2 cropped.jpg" class="img-fluid" id="VEGAN PIZZA WITH TOMATO AND VEGAN CHEESE">
                    <p></p>
                    <h3 class="h3">VEGAN PIZZA WITH TOMATO AND VEGAN CHEESE</h3>
                    <p>Vegan pizza topped with delicious processed tomato and vegan cheese.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>29.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/p3 cropped.jpg" class="img-fluid" id="PEPPERONI PIZZA WITH SPRINKLE OF SMOKED BEEFS">
                    <p></p>
                    <h3 class="h3">PEPPERONI PIZZA WITH SPRINKLE OF SMOKED BEEFS</h3>
                    <p>Papperoni pizza topped with delicious smoked beefs and mozarella cheese.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>29.999 K</h2></button>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Drinks Heading -->
        <div class="container text-center" id="drinks">
            <div class="row">
                <div class="col mt-4">
                    <h1 class="h1 mb-1" style="font-size: 50px;"><b>Twit's </b><span><b style="color: #C6396D;">Dri</b></span><span><b style="color: #39C692;">nks</b></span></h1>
                    <small>Relinguish your thirst with our freshest beverages!</small>
                </div>
            </div>
        </div>
        <br>

        <!-- Drinks Main -->
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/d1 cropped.jpg" class="img-fluid" id="RED VELVET">
                    <p></p>
                    <h3 class="h3">RED VELVET</h3>
                    <p>Enjoy red velvet with shaved ice and chocolatos. Make your drink be a dessert to !</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>24.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/d2 cropped.jpg" class="img-fluid" id="LEMON TEA">
                    <p></p>
                    <h3 class="h3">LEMON TEA</h3>
                    <p>Refreshing lemon tea with slice of lemon to increase the tea acidity as you like.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>14.999 K</h2></button>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <img src="http://localhost/PROJECT_UAS/images/d3 cropped.jpg" class="img-fluid" id="SMOTHIES">
                    <p></p>
                    <h3 class="h3">SMOTHIES</h3>
                    <p>Enjoy a different variety of cold smoothies made with the fruits you preffered.</p>
                    <div class="container">
                        <button class="btn btn-lg"><h2>19.999 K</h2></button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->
    <div class="container-fluid" style="background-color: #424242; color: white;">
        <div class="row">
            <div class="col mt-3 mb-3">
                <h1 class="h1 mb-0">Twitstore.inc</h1>
                <small>All Right Reserved 2022</small>
            </div>
            <div class="col-md mt-4 mb-3">
                <p class="text-end mb-0">Wilman Braun Street number 27, Brighton 2134,</p>
                <p class="text-end">United Kingdom</p>
            </div>
        </div>
    </div>

    <!-- shopping basket modal and button -->
    <button 
    type="button" 
    class="btn btn-lg"
    style= "position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px rgb(65, 65, 65);"
    data-bs-toggle="modal" 
    data-bs-target="#basket">
        <b style="font-size: 30px;">+</b>
    </button>

    <div class="modal fade" id="basket" tabindex="-1" aria-labelledby="basket" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="basket">Order here!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/PROJECT_UAS/order-items-process.php" method="post">
                        <div class="form-group mb-3">
                            <label for="username" class="form-label" >Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username" readonly>
                        </div>
        
                        <div class="form-group mb-3">
                            <label for="items">Enter your order here</label>
                            <textarea class="form-control" id="items" name="items" rows="5"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agreement" name="agreement">
                            <label class="form-check-label" for="agreement">I am fully aware that I order the items and I am responsible to pay for the price of the items</label>
                        </div>
                        <button type="submit" class="btn">Submit</button> 
                        <button type="reset" class="btn mx-2">Reset</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small><b>Twitstore.inc</b></small>
                </div>
            </div>
        </div>
    </div>

    <script>
        //var name = '<?= $username_login ?>';
        // var name = 'fairuz';
        var user = document.getElementById("username");
        
        document.getElementById('navbarDropdown').innerHTML = `Hello ${name}`;
        user.setAttribute("placeholder", name);


        items = ["TRPLE CHEESE BURGER DELUXE WITH FRIES", "BEEF BURGER DELUXE WITH FRIES AND SMOTHIE", "DOUBLE MONSTER BEEF BURGER WITH COKE", "VEGETABLE PIZZA WITH SMOKED PAPRIKA, MUSHROOM, AND CORN", "VEGAN PIZZA WITH TOMATO AND VEGAN CHEESE", "PEPPERONI PIZZA WITH SPRINKLE OF SMOKED BEEFS", "RED VELVET", "LEMON TEA", "SMOTHIES"];
        function search_items() {
            var search = document.getElementById("search").value;
            for (let i = 0; i < items.length; i++) {
                if (items[i] == search) {     
                    document.getElementById(search).scrollIntoView({behavior:"smooth"});
                }
            }
            return false;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>