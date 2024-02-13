<?php

    function db_connection() {

        return new PDO("mysql:dbname=interns_schema;host=localhost", "root", "1234");

    }

    function findAllInterns() {

        return db_connection()
        
            ->query("SELECT * FROM interns")
            
            ->fetchAll(PDO::FETCH_OBJ);

    }

    function saveIntern($first_name, $last_name, $login, $password) {

        $sqlStatment = db_connection()->prepare("INSERT INTO interns VALUES
        
        (null, ?, ?, ?, ?)");

        $sqlStatment->execute([$first_name, $last_name, $login, $password]);

    }

    function getInternById($id) {

        $sqlStatment = db_connection()->prepare("SELECT * FROM interns WHERE id = ?");

        $sqlStatment->execute([$id]);

        return $sqlStatment->fetch(PDO::FETCH_OBJ);
            
    }

    function updateInternById($first_name, $last_name, $login, $password, $id) {

        $sqlStatment = db_connection()->prepare("UPDATE interns SET first_name = ?, 
        
        last_name = ?, login = ?, password = ? WHERE id = ?");

        $sqlStatment->execute([$first_name, $last_name, $login, $password, $id]);
            
    }

    function deleteInternById($id) {

        $sqlStatment = db_connection()->prepare("DELETE FROM interns WHERE id = ?");

        $sqlStatment->execute([$id]);
            
    }
