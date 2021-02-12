<html>
    <head>
    </head>
    <body>
        <h1>Jokes Page</h1>
        <?php

            include "db_connect.php";
            include "retrieve_all.php";
            echo "<h2>Show all Jokes with the word - quit</h2>";
            include "search_jokes.php";

            $mysqli->close();
        ?>
    </body>
</html>