<?php include("top_bit.php");

    // retrieves information...
    $ID = $_SESSION['ID'];
    
    $find_sql = "SELECT * FROM `game_details`
    JOIN genre ON (game_details.GenreID = genre.GenreID)
    JOIN developer ON (game_details.DeveloperID = developer.DeveloperID)
    WHERE `ID` = '$ID'
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
    
    <div class="box main">
        <h2>Congratulations</h2>
        
        <p>You have added the following entry</p>
        
        <?php include ("results.php"); ?>
    </div>

<?php include("bottom_bit.php") ?>