<?php
// connect to the database
include($_SERVER['DOCUMENT_ROOT'] . '/php-blog/config/db_connect.php');

// check GET request id param
if(isset($_GET['slug'])){
		
  // escape sql chars
  $slug = mysqli_real_escape_string($conn, $_GET['slug']);

  // make sql
  $sql = "SELECT * FROM articles WHERE slug = '$slug'";


  // get the query result
  $result = mysqli_query($conn, $sql);

  // fetch result in array format
  $article = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);


}

?>



<!DOCTYPE html>
<html>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/php-blog/templates/base_layout.php'); ?>

  <h1>Article Detail</h1>
  <div class="article-detail">
      <div class="article">
        <img src="/php-blog/img/default.jpg" alt="">
        <h2><?php echo $article['title']; ?></a></h2>
        <p><?php echo $article['body']; ?></p>
        <p><?php echo $article['date']; ?></p>
      </div>
  </div>
<!--footer-->
  </div>
</body>

</html>