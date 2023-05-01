<?php

  class Database {
    private const DBHOST = 'localhost';
    private const DBPORT = '3307';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'php_pdo_crud';

    private $db_source = 'mysql:host=' . self::DBHOST .':'.self::DBPORT .';dbname=' . self::DBNAME . '';

    protected $conn = null;

    // Method for connection to the database
    public function __construct() {
      try {
        $this->conn = new PDO($this->db_source, self::DBUSER, self::DBPASS);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
      }
    }

          

  }