<html>

<head>
    <link href="sort_style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <div id="table_div">
            <?php
            // $host = "localhost";
            // $username = "bit_academy";
            // $password = "bit_academy";
            // $databasename = "media";
            // $connect = mysqli_connect($host, $username, $password, $databasename);
            $conn = new PDO("mysql:host=localhost;dbname=media", 'bit_academy', 'bit_academy');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            $order = "asc";
            if ($_GET['orderby'] == "title" && $_GET['order'] == "asc") {
                $order = "desc";
            }
            if ($_GET['orderby'] == "rating" && $_GET['order'] == "asc") {
                $order = "desc";
            }
            if ($_GET['orderby'] == "summary" && $_GET['order'] == "asc") {
                $order = "desc";
            }

            if ($_GET['orderby']) {
                $orderby = "order by " . $_GET['orderby'];
            }
            if ($_GET['order']) {
                $sort_order = $_GET['order'];
            }

            $results = "SELECT * FROM media" . $orderby . ' ' . $sort_order . ' ';

            echo "<table align=center border=1 cellpadding=10>";
            echo "<tr>";
            echo "<th><a href='?orderby=title&order=" . $order . "'>Title</a></th>";
            echo "<th><a href='?orderby=rating&order=" . $order . "'>Rating</a></th>";
            echo "<th><a href='?orderby=summary&order=" . $order . "'>Summary</a></th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['summary'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";


            ?>
        </div>

    </div>
</body>

</html>