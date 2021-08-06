<?php
    include "topbit.php";
    $showall_sql="SELECT *
FROM `91879_food_review`
LIMIT 0 , 30";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);

?>
        <div class="box main">
            <h2>All Items</h2>
          <?php
            
            // check if there are any results
            
            if ($count < 1) 
            {
            ?>
            <div class="error">
            Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.
            </div>
            
            <?php
            } // end count 'if'
            
            
            // if there are no results, output an error
            else
            {
                do {
                ?>
                <!-- Results go here -->
            <div class="results">
            
                <p>Food: <span class="sub_heading"><?php echo $showall_rs['Food']; ?></span></p>
                
                <p>Time: <span class="sub_heading"><?php echo $showall_rs['Time']; ?></span></p>
                
                <p>Location: <span class="sub_heading"><?php echo $showall_rs['Location']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                    
                    <?php 
                    for($x=0; $x < $showall_rs['Rating']; $x++)
                        
                    {
                       echo "&#9733"; 
                    }
                    
                    ?>
                    
                    </span></p>
                <p>
                Review / Response
                </p>
                
                <p><span class="sub_heading"><?php echo $showall_rs['Review']; ?></span></p>
                
            </div> <!-- / end results div -->
            <br />
                
                
                 <?php   
                } // end of 'do'
                while($showall_rs=mysqli_fetch_assoc($showall_query));
            } //end else
            // if there are results display them
            
            ?>
            </div>
            
        
<?php
    include "bottombit.php";
?>
