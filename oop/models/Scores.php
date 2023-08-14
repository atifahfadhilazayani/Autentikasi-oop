<?php
include_once('DB.php');

class Score extends DB {
    public static function all()
    {
        return parent::connect()->query("SELECT * FROM scores")->fetch(MYSQLI_ASSOC);
    }
}
?>