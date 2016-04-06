<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:30%;">

        <?php

        echo '<a href="index.php">Home</a> || <a href="ticket-edit.php">Edit Sold Ticket</a> || <a href="check-in.php">Check-In</a>';
        echo '<br/>&copy; Georgia Tech Indonesian Cultural Night<br/>>';

        $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
        @mysql_select_db("cl57-lovissa") or die("Unable to select database");

        $date_updated=strftime("%Y. %B %d. %A. %X %Z");
        $ticket_id = (int) $_POST['ticket_id'];
        $is_sold = isset($_POST['is_sold'])==1 ? 1 : 0;
        $admin_username = $_POST['admin_name']=='' ? 'default' : $_POST['admin_name'];
        $sold_by = $_POST['sold_by']==''? 'N/A' : $_POST['sold_by'];
        $end_buyer = $_POST['end_buyer']==''? 'N/A' : $_POST['end_buyer'];
        $is_student = isset($_POST['is_student'])==1 ? 1 : 0;
        $sql = mysql_query("UPDATE Tickets SET Time_Bought='$date_updated', is_Sold=$is_sold, is_Student_Price=$is_student, Paid_To='$admin_username', Sold_By='$sold_by', Details='$end_buyer' WHERE Ticket_Number=$ticket_id");
        echo "Record updated successfully";
        ?>
    </div>
</div>
</body>

<?php include 'footer.php' ?>

