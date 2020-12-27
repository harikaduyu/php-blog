<?php if(session_status() != 2) {
  session_start();
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Blog</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
  <link rel="stylesheet" href="/php-blog/templates/styles.css">
</head>
<body>
  <header>
    <h1><a href="/php-blog/"><img class="logo" src="/php-blog/img/logo.png" alt="php_blog"></a></h1>
    <nav>
      <ul>
      <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
        <li class="signlog">
          <form class="logout-link" action="/php-blog/users/logout.php" method="post">

            <button type="submit">Logout</button>
          </form>
        </li>
        <li>
          <a href="/php-blog/articles/article_create.php" class="highlight">New Article</a>
        </li>

        <?php else: ?>        
        <li class="signlog">
          <a href="/php-blog/users/login.php">Login</a>
        </li>
        <li class="signlog">
          <a href="/php-blog/users/signup.php">Signup</a>
        </li>
	    <?php endif ?>
      </ul>
    </nav>
  </header>
  <div class="wrapper">


