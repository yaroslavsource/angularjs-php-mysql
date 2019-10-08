<?php

class DB {

    private $host = 'localhost';
    private $username = 'gamaliel';
    private $password = 'gama';
    private $database = 'sias3a';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null) {
        if ($host != null) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        } catch (PDOException $e) {
            die('<h1>Could not connect to database because this error : </h1>' . $e->getMessage());
        }
    }

    public function query($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}

$db = new DB('localhost', 'gamaliel', 'gama', 'sias3a');
echo json_encode($db->query('SELECT idetudiant, matriculeetudiant, nometudiant, prenometudiant, emailetudiant FROM etudiant LIMIT 5'));
