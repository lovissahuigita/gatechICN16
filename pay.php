<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:30%;">
        <div id="get-verifier-form" class="text-left">
            <form action="pay-submit.php" method="post">
                <div class="form-group">
                    <label for="id">Ticket ID</label>
                    <?php
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number, is_Sold, Check_In_Time FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id1">';
                        $select .= '<option value="SELECT">SELECT</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            if ($rs['is_Sold']==1 && $rs['is_paid']==0) {
                                $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                            }
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="form-group">
                    <label for="id">Ticket ID</label>
                    <?php
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number, is_Sold, Check_In_Time FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id2">';
                        $select .= '<option value="SELECT">SELECT</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            if ($rs['is_Sold']==1 && $rs['is_paid']==0) {
                                $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                            }
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="form-group">
                    <label for="id">Ticket ID</label>
                    <?php
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number, is_Sold, Check_In_Time FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id3">';
                        $select .= '<option value="SELECT">SELECT</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            if ($rs['is_Sold']==1 && $rs['is_paid']==0) {
                                $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                            }
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="form-group">
                    <label for="id">Ticket ID</label>
                    <?php
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number, is_Sold, Check_In_Time FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id4">';
                        $select .= '<option value="SELECT">SELECT</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            if ($rs['is_Sold']==1 && $rs['is_paid']==0) {
                                $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                            }
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="form-group">
                    <label for="id">Ticket ID</label>
                    <?php
                    // connect to db
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Ticket_Number, is_Sold, Check_In_Time FROM Tickets");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="ticket_id5">';
                        $select .= '<option value="SELECT">SELECT</option>';
                        while ($rs = mysql_fetch_array($sql)) {
                            if ($rs['is_Sold']==1 && $rs['is_paid']==0) {
                                $select .= '<option value="' . $rs['Ticket_Number'] . '">' . $rs['Ticket_Number'] . '</option>';
                            }
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
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
