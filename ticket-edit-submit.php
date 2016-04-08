<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:80%;">

        <?php

        $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
        @mysql_select_db("cl57-lovissa") or die("Unable to select database");

        $date_updated=date('j F Y h:i:s A');
        $ticket_id_fr = (int) $_POST['ticket_id_fr'];
        $ticket_id_to = (int) $_POST['ticket_id_to'];
        $is_sold = isset($_POST['is_sold'])==1 ? 1 : 0;
        $admin_username = $_POST['admin_name']=='' ? 'default' : $_POST['admin_name'];
        $sold_by = $_POST['sold_by']==''? 'N/A' : $_POST['sold_by'];
        $end_buyer = $_POST['end_buyer']==''? 'N/A' : $_POST['end_buyer'];
        $is_student = isset($_POST['is_student'])==1 ? 1 : 0;
        if ($ticket_id_to=='default') {
            $sql = mysql_query("UPDATE Tickets SET Time_Bought='$date_updated', is_Sold=$is_sold, is_Student_Price=$is_student, Paid_To='$admin_username', Sold_By='$sold_by', Details='$end_buyer' WHERE Ticket_Number=$ticket_id_fr");
        } else {
            $sql = mysql_query("UPDATE Tickets SET Time_Bought='$date_updated', is_Sold=$is_sold, is_Student_Price=$is_student, Paid_To='$admin_username', Sold_By='$sold_by', Details='$end_buyer' WHERE (Ticket_Number >= $ticket_id_fr AND Ticket_Number <= $ticket_id_to)");
        }
        echo "Record updated successfully";
        ?>
    </div>
</div>
</body>

<?php include 'footer.php' ?>

