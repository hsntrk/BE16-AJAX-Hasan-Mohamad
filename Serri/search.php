<?php

require_once "db_connect.php";

$search = $_GET["search"];

$sql = "SELECT * FROM users where f_name LIKE '$search%' OR l_name LIKE '$search%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "No Result";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p> {$row["f_name"]}  {$row["l_name"]}  {$row["email"]}</p>";
    }
}