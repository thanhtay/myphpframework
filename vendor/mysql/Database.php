<?php

namespace Mysql;

class Database
{
    public $db = 'localhost';
    public $username;
    public $password;

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */ 
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }
}
