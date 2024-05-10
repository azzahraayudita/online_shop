<?php
$conn=pg_connect("host=localhost port=5432 dbname=test_database user=postgres password=112407");
/* check connection */
if (!$conn) {
    echo "<h1>Doesn’t work</h1>";
}
?>