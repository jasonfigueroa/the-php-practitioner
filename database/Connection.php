<?php

class Connection
{
    public static function make($config)
    {
        $dbConfig = $config['database'];
        try {
            return new PDO(
                $dbConfig['connection'] . ';dbname=' . $dbConfig['name'],
                $dbConfig['username'],
                $dbConfig['password'],
                $dbConfig['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}