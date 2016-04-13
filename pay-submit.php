<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:30%;">

        <?php

        $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
        @mysql_select_db("cl57-lovissa") or die("Unable to select database");

        if ($_POST['ticket_id1']!='SELECT') {
            $ticket_id1 = (int) $_POST['ticket_id1'];
            $sql = mysql_query("UPDATE Tickets SET is_paid=TRUE WHERE Ticket_Number=$ticket_id1");
            echo "Ticket number $ticket_id1 is updated</br>";
        }
        if ($_POST['ticket_id2']!='SELECT') {
            $ticket_id2 = (int) $_POST['ticket_id2'];
            $sql = mysql_query("UPDATE Tickets SET is_paid=TRUE WHERE Ticket_Number=$ticket_id2");
            echo "Ticket number $ticket_id2 is updated</br>";
        }
        if ($_POST['ticket_id3']!='SELECT') {
            $ticket_id3 = (int) $_POST['ticket_id3'];
            $sql = mysql_query("UPDATE Tickets SET is_paid=TRUE WHERE Ticket_Number=$ticket_id3");
            echo "Ticket number $ticket_id3 is updated</br>";
        }
        if ($_POST['ticket_id4']!='SELECT') {
            $ticket_id4 = (int) $_POST['ticket_id4'];
            $sql = mysql_query("UPDATE Tickets SET is_paid=TRUE WHERE Ticket_Number=$ticket_id4");
            echo "Ticket number $ticket_id4 is updated</br>";
        }
        if ($_POST['ticket_id5']!='SELECT') {
            $ticket_id5 = (int) $_POST['ticket_id5'];
            $sql = mysql_query("UPDATE Tickets SET is_paid=TRUE WHERE Ticket_Number=$ticket_id5");
            echo "Ticket number $ticket_id5 is updated</br>";
        }
        if ($_POST['ticket_id1']=='SELECT' && $_POST['ticket_id2']=='SELECT' && $_POST['ticket_id3']=='SELECT' && $_POST['ticket_id4']=='SELECT' && $_POST['ticket_id5']=='SELECT') {
            echo 'No ticket was checked in';
        }
        ?>
    </div>
</div>
</body>

<?php include 'footer.php' ?>

