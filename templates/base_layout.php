<?php 

  session_start();

  //$_SESSION['name'] = 'mario';

  if($_SERVER['QUERY_STRING'] == 'noname'){
    //unset($_SESSION['name']);
    session_unset();
  }

  $name = $_SESSION['name'];

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Django Blog</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
  <link rel="stylesheet" href="{% static 'styles.css' %}">
</head>
<body>
  <header>
    <h1><a href="#"><img class="logo" src="/img/pizzasvg" alt="django_blog"></a></h1>
    <nav>
      <ul>
        <li>
          <a href="/articles/create/" class="highlight">New Article</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">

