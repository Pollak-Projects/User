<?php
class DatabaseConnect
{
    public function ConnectToDatabaseTable(string $UserProvidedTable)
    {
        $mysqli = new mysqli("localhost", "tanulo", "tanulo", "Bluementa");

        if (!$mysqli) {
            die('Unable to coonnect to the MySql server' . $mysqli->connect_errno);
        }
        $db = $mysqli->select_db($UserProvidedTable);
        if (!$db) {
            die('Unable to coonnect to the MySql server' . $mysqli->connect_errno);
        }
        @$mysqli->query('SET NAMES utf8mb4');

        return $mysqli;
    }
}
