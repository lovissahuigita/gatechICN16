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

            $gt_early = (int) mysql_result(mysql_query("SELECT COUNT(*) FROM Tickets WHERE ((is_Sold=TRUE) AND (is_Student_Price=TRUE) AND (is_earlybird=TRUE))"),0);
            $gt_early_mon = $gt_early * 3;
            $gt_notearly = (int) mysql_result(mysql_query("SELECT COUNT(*) FROM Tickets WHERE ((is_Sold=TRUE) AND (is_Student_Price=TRUE) AND (is_earlybird=FALSE))"),0);
            $gt_notearly_mon = $gt_early * 5;
            $gt_total = $gt_early + $gt_notearly;
            $gt_total_mon = $gt_early_mon + $gt_nonearly_mon;
            $nongt_early = (int) mysql_result(mysql_query("SELECT COUNT(*) FROM Tickets WHERE ((is_Sold=TRUE) AND (is_Student_Price=FALSE) AND (is_earlybird=TRUE))"),0);
            $nongt_early_mon = $gt_early * 10;
            $nongt_notearly = (int) mysql_result(mysql_query("SELECT COUNT(*) FROM Tickets WHERE (is_Sold=TRUE AND is_Student_Price=FALSE AND is_earlybird=FALSE)"),0);
            $nongt_notearly_mon = $gt_early * 15;
            $nongt_total = $nongt_early + $nongt_notearly;
            $nongt_total_mon = $nongt_early_mon + $nongt_notearly_mon;
            $total_early = $gt_early + $nongt_early;
            $total_early_mon = $gt_early_mon + $nongt_early_mon;
            $total_notearly = $gt_notearly + $nongt_notearly;
            $total_notearly_mon = $gt_notearly_mon + $nongt_notearly_mon;
            $total = $gt_total + $nongt_total;
            $total_mon = $gt_total_mon + $nongt_total_mon;
            echo '<table width="50%" class="table table-striped">';
            echo "<tr><th>Details</th><th>Early Bird</th><th>On the Door</th><th>Total Tickets</th></tr>";
            echo "<tr><td>GT Tickets</td><td>$gt_early</td><td>$gt_notearly</td><td>$gt_total</td></tr>";
            echo "<tr><td>Non-GT Tickets</td><td>$nongt_early</td><td>$nongt_notearly</td><td>$nongt_total</td></tr>";
            echo "<tr><td>TOTALS</td><td>$total_early</td><td>$total_notearly</td><td>$total</td></tr>";

            echo '<h3 class="text-center">Summary</h3><br/>';
            echo '<table width="50%" class="table table-striped">';
            echo "<tr><th>Details</th><th>Early Bird $</th><th>On the Door $</th><th>Total $</th></tr>";
            echo "<tr><td>GT Tickets</td><td>$gt_early_mon</td><td>$gt_notearly_mon</td><td>$gt_total_mon</td></tr>";
            echo "<tr><td>Non-GT Tickets</td><td>$nongt_early_mon</td><td>$nongt_notearly_mon</td><td>$nongt_total_mon</td></tr>";
            echo "<tr><td>TOTALS</td><td>$total_early_mon</td><td>$total_notearly_mon</td><td>$total_mon</td></tr>";
            echo '<h3 class="text-center">Money</h3><br/>';

            echo '<table width="90%" class="table table-striped">';
            echo "<tr><th>Number</th><th>Sold Ticket Number</th><th>Price</th><th>Paid to Admin</th><th>Sold By</th><th>End Buyer</th><th>Time Updated</th><th>Check-In Time</th></tr>";
            $num = 1;
            while ($answer = mysql_fetch_row($data_query_result)) {
                $price = ($answer[2] == TRUE) ? ($answer[3] == TRUE ? 3 : 5) : ($answer[3] == TRUE ? 10 : 15);
                echo "<tr><td>$num</td><td>$answer[0]</td><td>$price</td><td>$answer[4]</td><td>$answer[5]</td><td>$answer[6]</td><td>$answer[7]</td><td width='100px'>$answer[8]</td></tr>";
                $num++;
            }

            $query = "SELECT COUNT(*) FROM Tickets WHERE (is_Sold=FALSE)";
            $query_result = mysql_query($query);
            $count = (int)mysql_result($query_result, 0);

            $data_query = "SELECT * FROM Tickets WHERE (is_Sold=FALSE)";
            $data_query_result = mysql_query($data_query);

            echo '<table class="table table-striped">';
            echo '<tr><th>Number</th><th>Leftover Ticket Number</th><th>Currently is Being Hold By</th><th>Details</th></tr>';
            $nums = 1;
            while ($answer = mysql_fetch_row($data_query_result)) {
                echo "<tr><td>$nums</td><td>$answer[0]</td><td>$answer[5]</td><td>$answer[6]</td></tr>";
                $nums++;
            }

            ?>
        </div>
    </div>
    </body>

<?php include 'footer.php' ?>