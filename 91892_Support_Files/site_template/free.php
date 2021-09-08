<?php include("top_bit.php");

    $name_dev = $_POST['free'];

    $find_sql = "SELECT * FROM `game_details`
    JOIN genre ON (game_details.GenreID = genre.GenreID)
    JOIN developer ON (game_details.DeveloperID = developer.developerID)
    WHERE `In App` = 0 AND `Price` = 0
    ";

    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>            

        <div class="box main">
            <h2>Free and No In App Purchases</h2>
            
            <?php 
            include ("results.php"); 
            ?>
            
            </div> <!-- / main -->

<?php include("bottom_bit.php") ?>