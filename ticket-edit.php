<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:80%;">

        <div id="get-verifier-form" class="text-left">
            <form action="ticket-edit-submit.php" method="post">
                <div class="form-group">
                    <label for="ticket_id_fr">Ticket ID (From)</label>
                    <?php
                    //query
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id_fr">';
                        while ($rs = mysql_fetch_array($sql)) {
                            $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="form-group">
                    <label for="ticket_id_fr">Ticket ID (To)</label>
                    <?php
                    //query
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id_to">';
                        $select .= '<option value="default">default</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="issold" name="is_sold">Ticket Sold?</label>
                </div>
                <h4>If ticket is sold, please fill the information below:</h4>
                <div class="form-group">
                    <label for="admin_name">Admin username *</label>
                    <input type="text" class="form-control" name="admin_name">
                </div>
                <div class="form-group">
                    <label for="sold_by">Sold By (Optional)/Current Ticket Holder</label>
                    <input type="text" class="form-control" name="sold_by">
                </div>
                <div class="form-group">
                    <label for="end_buyer">End Buyer (Optional)</label>
                    <input type="text" class="form-control" name="end_buyer">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="student" name="is_student">Student Ticket</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="earlybird" name="is_earlybird">Early Bird Ticket?</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>


</body>
