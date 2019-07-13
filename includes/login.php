<?php include "db.php"; ?>

<?php
if (isset($_POST['login'])) {
    echo $username = $_POST['username'];
    echo $password = $_POST['password'];
}
?>
