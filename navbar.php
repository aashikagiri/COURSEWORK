<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav class="nagivation-bar">
        <span class="brand">NepGiftCard</span>
        <div class="search-box">
            <input type="text" placeholder="Search....">
            <img src="./images/search-regular-24.png" alt="search button">
        </div>
        <div class="welcome">
        <h3>Welcome <?php 
        echo $_SESSION['name']
        ?></h3>
        </div>
<img src="./images/sun.png" alt="Sun image" id="theme">
        <a href="addtocard.php">
   <img src="./images/png-transparent-shopping-cart-online-shopping-computer-icons-add-to-cart-button-shopping-bags-trolleys-material-internet-thumbnail-removebg-preview.png" alt="add to cart" id="addtocart">
        </a>


        <a href="logout.php" id="logout">
    <p>Logout</p>
        </a>

    </nav>

</body>
<style>
    .welcome{
        position: fixed;
        color:white;
        font-size: 30px;
        left:50%;
        top:-10px;

    }
    .welcome h3{
        color:transparent;
        background-image:linear-gradient(to left, #2ecc71, #3498db, #9b59b6, #f39c12);
        -webkit-background-clip: text;
        animation: animating 5s linear infinite;
        -webkit-background-size: 500%;
        background-size:500%;
    }
    @keyframes animating{
        0%{
            background-position:0 100%;
        }
        50%{
            background-position:100% 0;
        }
        100%{
            background-position:0 100%;
        }
    }


    #logout{
        position: fixed;
        color: aqua;
        font-size: 25px;
        right:30px;
        top: 3px;

    }
    .nagivation-bar{
        position: fixed;
        width: 100%;
        z-index: 3;
    }
    #addtocart{
    right:140px;
    }
</style>

</html>
