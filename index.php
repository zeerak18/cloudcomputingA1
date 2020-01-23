<html>
<head>
  <link rel='stylesheet' type='text/css' href='style2.css' />

  </div>

</head>

<body>

<h1> Joke Vault</h1>
<h3> Don't remember a joke? Search using the keyword you do remember! </h3>


<?php

include "db_connect.php";
include "viewcounter.php";
// include "allviewscounter.php";
//include "search_all_jokes.php";
//include "search_keyword.php";

?>

<div class = jokeform>
  <form action="/jokepage/search_keyword.php">
    Enter the joke keyword:<br>
    <input type="text" name="userinput"><br>

    <input type="submit" value="Find My Joke!">
  </form>

  <br>

  <h3> Want to add a new joke? </h3>

  <br>

  <form action="/jokepage/add_joke.php">
    Enter your Funniest Joke!<br>
    <input type="text" name="newjoke"<br>

  <br>

  </br>Answer to your joke!<br>
     <input type="text" name="newanswer"><br>
     <input type="submit" value="Save this Joke!">

</div>
</form>


<?php


$mysqli->close();

?>

</body>
</html>
