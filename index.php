<?php

class Database{

    private $link;

    public function __construct()
    {
        $this -> connect();
    }
    private function connect ()
    {
        $config = require_once 'config.php';
        $dsn = 'mysql:host = '.$config['host']. ';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this -> link = new PDO($dsn , $config['username'], $config['password']);

        return $this;
    }

    public function execute($sql)
    {
        $sth = $this->Link->prepare($sql);
        return $sth->execute();
    }
    public function query($sql)
    {
        $exe = $this -> execute($sql);
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false){
            return [];
        }
        return $result;
    }
}

 $db = new Database();
 $db->execute("INSERT INTO `user` (`username`, `password`, `date`)VALUES('fdjh',367487,'".$date."')");





