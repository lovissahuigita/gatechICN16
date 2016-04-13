<?php session_start(); ?>
<?php include 'header.php' ?>
    <body>

    <div id="container" class="center-block pager" style="width:90%;">
        <div id="content" class="center-block" style="width:80%;">

            <form action="volunteer-submit.php" method="post">
                <div class="form-group">
                    <label for="volunteer-name">Volunteer Name (Number for delete)</label>
                    <input type="text" class="form-control" name="volunteer-name">
                </div>
                <div class="form-group">
                    <label for="volunteer-role">Volunteer Role</label>
                    <?php
                    $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                    @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                    $sql = mysql_query("SELECT Role FROM Volunteer_Role");
                    if (mysql_num_rows($sql)) {
                        $select = '<select name="role">';
                        while ($rs = mysql_fetch_array($sql)) {
                            $select .= '<option value="' . $rs['Role'] . '">' . $rs['Role'] . '</option>';
                        }
                    }
                    $select .= '</select>';
                    echo $select;
                    ?>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="is-delete" name="isdelete">Delete?</label>
                </div>
                <div class="form-group">
                    <label for="admin_name">Admin username *</label>
                    <input type="text" class="form-control" name="admin_name">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>

                <?php
                $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
                @mysql_select_db("cl57-lovissa") or die("Unable to select database");

                echo '</br><table width="90%" class="table table-striped">';
                echo "<tr><th>Volunter Number</th><th>Volunter Name</th><th>Volunter Role</th></tr>";

                $query = mysql_query("SELECT * FROM Volunteer");
                $num = 0;
                while($each = mysql_fetch_row($query)) {
                    $num++;
                    echo "<tr><td>$num</td><td>$each[0]</td><td>$each[1]</td></tr>";
                }
                ?>
            </form>
        </div>
    </div>
    </body>

<?php include 'footer.php' ?>