<html>
    <head>
    </head>
    <body>
        <?php
            include "db_connect.php";
            $keyword = $_GET["keyword"];
            $sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE '%". $keyword ."%'";
            $result = $mysqli->query($sql);

            echo "<h2>Show all Jokes with the word - " . $keyword ."</h2>";

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Joke ID: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
            }
            } else {
            echo "0 results";
            }
            $mysqli->close();
        ?>
        <form>
            <br><input type="button" value="Go back!" onclick="history.back()">
        </form>
    </body>
</html>