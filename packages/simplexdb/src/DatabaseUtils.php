<?php

namespace xbugs\simplexdb;

use PDO;

class DatabaseUtils
{
    public function fetchQuery(string $query) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=exads', $_ENV['DB_USER'] , $_ENV['DB_PASS'], array(PDO::FETCH_OBJ));
            $result = $dbh->query($query, PDO::FETCH_OBJ)->fetch();
            return $result;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . PHP_EOL;
            die();
        }
    }

    public function getComputedSql($filename, array $vars) {
        $query = file_get_contents('sql/getNextShow.sql');
        foreach ($vars as $var) {
            str_replace($query,'{$var}',$var);
        }
    }
}