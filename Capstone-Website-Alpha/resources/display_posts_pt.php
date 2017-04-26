

<?php include("../resources/db_setup.php");?>

<?php 


$forum_post_id="Post ID:"; 

// post string to be appended before each user name.
$post_by_line="Posted By: ";
//  // default Username until i get a log system implemented
$post_username_temp ="Anonymous_Magic_Player";
$date_time="Date and Time Posted:";


// Connection mysqli object to generate the connect. 
$database_connection_post = new mysqli($server, $username, $password, $database);
// If check to see if the connection is made, if not kill it. print out what the user sent the server. 

// -> is an object reference to something that is inside an object, so here the connection error property is being referenced in the mysqli object.
if ($database_connection_post->connect_error) {
    die("Unable to Connect to Posts Database! " . $database_connection_post->connect_error);
} 

$post_query = "SELECT * FROM capstone_pt_posts";
//$post_count="SELECT COUNT(user_post_id) FROM capstone_posts "; 

$query_result = $database_connection_post->query($post_query);

// here it is referencing the num_rows method and running a comparison to see if there are more than 0 posts, if so it prints 0 posts  
if ($query_result->num_rows > 0) {
    // 
    while($forum_post = $query_result->fetch_assoc()) {
          echo "<p>". " ".$forum_post_id." " .$forum_post['user_post_ID']. " ".$post_by_line."". $post_username_temp. "<br />"."<br />". $forum_post['user_pt_post']."<br />"."<br />".$date_time." ". $forum_post['user_time_pt']."<br />"."</p>";
    }
} else {
    echo "0 Posts on this page";
}
$database_connection_post->close();
  ?>