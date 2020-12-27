<?php 
// connect to the database
include($_SERVER['DOCUMENT_ROOT'] . '/php-blog/config/db_connect.php');


$email = $title = $ingredients = '';
$errors = array('title' => '', 'body' => '', 'slug' => '');

if(isset($_POST['submit'])){

  if(array_filter($errors)){
    //echo 'errors in form';
  } else {
    // escape sql chars
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);

    // create sql
    $sql = "INSERT INTO articles(title,body,slug) VALUES('$title','$body','$slug')";

    // save to db and check
    if(mysqli_query($conn, $sql)){
      // success
      header("location:  /../php-blog/");
      exit;
    } else {
      echo 'query error: '. mysqli_error($conn);
    }

  }


}

?>

<!DOCTYPE html>
<html>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/php-blog/templates/base_layout.php'); ?>

  <div class="create-article">
    <h2>Create an awesome new article!</h2>
    <form class="site-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <label for="id_title">Title:</label><input type="text" name="title" maxlength="100" required="" id="id_title">
      <label for="id_body">Body:</label><textarea name="body" cols="40" rows="10" required="" id="id_body"></textarea>
      <label for="id_slug">Slug:</label><input type="text" name="slug" maxlength="50" required="" id="id_slug">
      <input type="submit" name="submit" value="Create">
    </form>
  </div>
  <script src="/php-blog/slugify.js"></script>
<!--footer-->
  </div>
  
</body>
</html>