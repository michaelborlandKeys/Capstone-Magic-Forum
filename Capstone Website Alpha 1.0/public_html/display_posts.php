

<?php include("../resources/db_setup.php");?>

<?php 

// Create connection
$database_connection_post = new mysqli($server, $username, $password, $database);
// Check connection
if ($database_connection_post->connect_error) {
    die("Connection failed: " . $database_connection_post->connect_error);
} 

$post_query = "SELECT * FROM capstone_posts";
$result = $database_connection_post->query($post_query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row['user_post_ID']. " - Post: " . $row['user_post']. " " . $row['user_time_posted'];
    }
} else {
    echo "0 results";
}
$database_connection_post->close();
  ?>