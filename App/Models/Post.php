<?php
namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 7.0
 */

class Post
{
    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        try {

            $host     = 'localhost';
            $dbname   = 'mvc';
            $username = 'root';
            $password = '';

            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
            
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    
}