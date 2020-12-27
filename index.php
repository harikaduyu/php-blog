<?php
	define('BASE_PATH', realpath(dirname(__FILE__)));
	include(BASE_PATH . '/config/db_connect.php');

	// write query for all pizzas
	$sql = 'SELECT title, body, date FROM articles ORDER BY date';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


	//get a snippet from article body
	function snippet($body){
		return substr($body, 0, 50) . '...';
	}
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/base_layout.php'); ?>

	<h1>Article List</h1>
  <div class="articles">
		<?php foreach($articles as $article): ?>
      <div class="article">
        <h2><a href="/php-blog/articles/article-detail.php"><?php echo $article['title']; ?></a></h2>
        <p><?php echo snippet($article['body']); ?></p>
        <p><?php echo $article['date']; ?></p>
        <p class="author">added by <?php echo 'h.duyu'; /*$article['author_id']*/  ?></p>
      </div>
			<?php endforeach; ?>
  </div>
<!--footer-->
  </div>
</body>

</html>