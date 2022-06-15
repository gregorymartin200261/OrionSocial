<?php
function GetUserNotConnected()
{
    try {
        global $dbh;
        $query = $dbh->query('select * from users where userId <> ' . $_SESSION["user"]->userId);
        $users = $query->fetchAll();
    } catch (PDOException $e) {
        $error = $e->getMessage();
        die($error);
    }
    return $users;
}
?>
