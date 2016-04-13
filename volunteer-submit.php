<?php include 'header.php' ?>
<body>

<div id="container" class="center-block pager" style="width:90%;">
    <div id="content" class="center-block" style="width:80%;">
        <?php
        $connect = mysql_connect("176.32.230.251:3306", "cl57-lovissa", "Love041107");
        @mysql_select_db("cl57-lovissa") or die("Unable to select database");

        $is_delete = isset($_POST['isdelete'])==1 ? 1 : 0;
        $name = $_POST['volunteer-name'];
        $role = $_POST['role'];

        $admin = $_POST['admin_name'];

        $query = "SELECT COUNT(*) FROM Admin WHERE (Admin_Username='$admin')";
        $query_result = mysql_query($query);
        $count = (int) mysql_result($query_result, 0);

        if ($count==0) {
            echo 'You are not authorized to make this changes';
        } else {
            if ($name=='') {
                echo 'The volunteer name cannot be empty';
            } else {
                if ($is_delete==1) {
                    $sql = mysql_query("DELETE FROM Volunteer WHERE Volunteer_Name='$name'");
                    echo 'Volunteer number' . $name . ' has been deleted!';
                } else {
                    $sql = mysql_query("INSERT INTO Volunteer(Volunteer_Name, Role) VALUES ('$name', '$role')");
                    echo 'Volunteer ' . $name . ' has been added!';
                }
            }
        }
        ?>
    </div>
</div>
</body>

<?php include 'footer.php' ?>

