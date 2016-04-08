<?php session_start(); ?>
<?php include 'header.php' ?>
    <body>

    <div id="container" class="center-block pager" style="width:90%;">
        <div id="content" class="center-block" style="width:80%;">

            <?php

            // connect to db
            $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
            @mysql_select_db("cl57-lovissa") or die("Unable to select database");


            $query = "SELECT COUNT(*) FROM Tickets WHERE (is_Sold=TRUE)";
            $query_result = mysql_query($query);
            $count = (int)mysql_result($query_result, 0);

            $data_query = "SELECT * FROM Tickets WHERE (is_Sold=TRUE)";
            $data_query_result = mysql_query($data_query);

            echo '<table width="90%" class="table table-striped">';
            echo "<tr><th>Sold Ticket Number</th><th>Price</th><th>Paid to Admin</th><th>Sold By</th><th>End Buyer</th><th>Time Updated</th><th>Check-In Time</th></tr>";
            while ($answer = mysql_fetch_row($data_query_result)) {
                $price = ($answer[2] == TRUE) ? 5 : 15;
                echo "<tr><td>$answer[0]</td><td>$price</td><td>$answer[3]</td><td>$answer[4]</td><td>$answer[5]</td><td>$answer[6]</td><td width='100px'>$answer[7]</td></tr>";
            }

            $query = "SELECT COUNT(*) FROM Tickets WHERE (is_Sold=FALSE)";
            $query_result = mysql_query($query);
            $count = (int)mysql_result($query_result, 0);

            $data_query = "SELECT * FROM Tickets WHERE (is_Sold=FALSE)";
            $data_query_result = mysql_query($data_query);

            echo '<table class="table table-striped">';
            echo '<tr><th>Leftover Ticket Number</th><th>Currently is Being Hold By</th><th>Details</th></tr>';
            while ($answer = mysql_fetch_row($data_query_result)) {
                echo "<tr><td>$answer[0]</td><td>$answer[4]</td><td>$answer[5]</td></tr>";
            }

            ?>
        </div>
    </div>
    </body>

<?php include 'footer.php' ?>