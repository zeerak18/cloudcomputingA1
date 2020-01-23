<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' href='style2.css' />
    </head>
      <body>
        <h3> New Joke has been Added</h3>
        <div id="alljokes">
          <?php

          include "db_connect.php";
          $new_joke_question = $_GET["newjoke"];
          $new_joke_answer = $_GET["newanswer"];

          //adding new joke into the form to save into the database
        //  echo "<h1>Trying to add a New Joke: $new_joke_question and $new_joke_answer </h1>";

          $sql = "INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')";
          $result = $mysqli->query($sql);


          include "search_all_jokes.php";

          ?>

        </div>
          <br><br>


          <a href="index.php"> Return to the main page </a>

        </body>
</html>
