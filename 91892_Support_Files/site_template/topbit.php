<!DOCTYPE HTML>

<html lang="en">

<?php
    
    session_start();
    include("config.php");  //Connect to database...
    include ("functions.php");  // include data sanitising...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
    
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/foo.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/food_logo.png" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Food Reviews</h1>
        </div>    <!-- / banner -->
        
        
        <div class="box side">
            <h2>Search | <a class="side"href="show_all.php">Show All</a></h2>
            
            <i>Type part of the dish name if desired</i>
        <hr />
            
            <!-- food search -->
            <form method="post" action="food_search.php" enctype="multipart/form-data"> 
                <input class="search" type="text" name="food" size="20" value="" required placeholder="Food...">
            <input class="submit" type="submit" name="find_food" value="&#xf002;" /></form>
            
            <!-- end of food search -->
            <p></p>
            <i>Search for specific details of the dish</i>
            <hr />
            <!-- Start of time search -->
            <form method="post" action="time_search.php"enctype="multipart/form-data">
                <select name="time" required>
                    
	           <option value="" disabled selected>Time...</option>
                    
               <option value="Breakfast">Breakfast</option>
                
                <option value="Dessert">Dessert</option>
                    
                <option value="Dinner">Dinner</option>
                
                <option value="Lunch">Lunch</option>
                </select>
                
            <input class="submit" type="submit" name="find_time" value="&#xf002;" />  
            </form>   
            
            <!-- end of time search -->
            
            <!-- Start of location search -->
             <form method="post" action="location_search.php"enctype="multipart/form-data">
                <select name="location" required>
                    
	           <option value="" disabled selected>Location...</option>
                    
               <option value="Home">Home</option>
                
                <option value="Tascas">Tascas</option>
                    
                <option value="St Pierres">St Pierres</option>
                
                <option value="Ephesus Turkish Kitchen">Ephesus Turkish Kitchen</option>
                    
                <option value="Subway">Subway</option>
                    
                <option value="Sushi Ya">Sushi Ya</option>
                </select>
                
            <input class="submit" type="submit" name="find_location" value="&#xf002;" />  
            </form>
            
            <!-- end of location search -->
            
            <!-- Start of vegetarian search -->
            <form method="post" action="vegen_search.php"enctype="multipart/form-data">
                <select name="vegen" required>
                    
                   <option value="" disabled selected>Vegetarian...</option>

                   <option value="yes">Yes</option>

                    <option value="no">No</option>
                    
                </select>
            <input class="submit" type="submit" name="find_vegen" value="&#xf002;" /> 
            </form>
                    
            <!-- End of vegen search here -->
    <p></p>
            <!-- Start of ratings here -->
            <form method="post" action="rating_search.php" enctype="multipart/form-data">
            
                <select class="half_width" name="amount">
                    
                    <option value="more" selected>At least...</option>
                    
                    <option value="less" selected>At most...</option>
                    
                     <option value="exactly" selected>Exactly...</option>
                    
                </select>
                
                <select class="half_width" name="stars">
                    <option value=1>&#9733;</option>
                    
                    <option value=2>&#9733; &#9733;</option>
                    
                    <option value=3>&#9733; &#9733; &#9733;</option>
                    
                    <option value=4>&#9733; &#9733; &#9733; &#9733;</option>
                    
                    <option value=5>&#9733; &#9733; &#9733; &#9733; &#9733;</option>
                
                </select>
                
                    <input class="submit" type="submit" name="find_rating" value="&#xf002;" />
                
            <!-- End of ratings search here --> 
            </form>
                
        </div>