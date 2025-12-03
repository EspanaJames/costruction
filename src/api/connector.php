<?php
declare(strict_types=1);

class DBConnector {
    private static $host = '127.0.0.1';
    private static $port = 3306;
    private static $dbname = 'costruction';
    private static $user = 'root';
    private static $pass = '';
    private static $charset = 'utf8mb4';

    public static function getConnection() {
        $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s',
            self::$host, self::$port, self::$dbname, self::$charset);
        try {
            $pdo = new PDO($dsn, self::$user, self::$pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
            return $pdo;
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}