<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' href='style2.css' />
  </head>
    <body>

        <h1>Bank Of Jokes</h1>

          <div id = "alljokes">
          <?php

          include "db_connect.php";

          $keywordfromform = $_GET["userinput"];
          if($keywordfromform == "fuck" ||$keywordfromform == "ass"){
            echo '<script language="javascript">';
            echo 'alert("Will not search swear words! Try Again!")';
            echo '</script>';
          }
          else {
            echo $keywordfromform;
            //Search the database for the keyword
            echo "<h2>All Jokes with keyword  $keywordfromform : </h2";
            echo "<br>";
            echo "<br>";
            echo "<br>";

            $sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE '%" . $keywordfromform . "%'" ;
            $result = $mysqli->query($sql);



            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Joke ID: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
                }
            } elseif($_GET["userinput"] = "") {
                echo '<script language="javascript">';
                echo 'alert("Will not search swear words! Try Again!")';
                echo '</script>';
            } else {
                echo "0 results";
            }

          }



          ?>


          </div>

            <br>  <a href="index.php"> Home Page </a>
    </body>
</html>
