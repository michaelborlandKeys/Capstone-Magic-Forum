




<?php include("../resources/db_setup.php");?>

<?php 
$connection_to_database_2 = mysqli_connect($server, $username, $password, $database) or die("Cannot Connect to the User database!");
 
  // Pull all users from the database
  $posted_query = "SELECT * FROM capstone_posts ";
  $results_from_database_2 = mysqli_query( $connection_to_database_2, $posted_query ) or die("Query Failed to find any Users in database.");
  
   
      




          while($posted_table_row = mysqli_fetch_assoc($results_from_database_2)) {
            $id=htmlentities($posted_table_row['id']);
            $comments = htmlentities($posted_table_row['Comments']);
            $timestamp=htmlentities($posted_table_row['timestamp']);
               
                  echo htmlentities($id);
                  
                  echo htmlentities($comments);
                  echo htmlentities($timestamp);
             
                  echo "<a href='../dlt_post_scripts/rm_xboxone_posts.php?id=$id'>Delete</a>  ";
                




  }
  mysqli_free_result($results_from_database_2);
  mysqli_close($connection_to_database_2);
  ?>