<?php
    class Test{
        public function connect(){
            $dsn = 'mysql:host=localhost;dbname=quiz';
            $db_user = 'root';
            $db_password = '';
            $connection = new PDO($dsn, $db_user, $db_password);
            return $connection;
        }

        public function insert(){
            $sqlInsert = 'INSERT INTO questions(savol, variant_a, variant_b, variant_c, javob)  VALUES (?,?,?,?,?)';
            $queryInsert = Test::connect()->prepare($sqlInsert);
            return $queryInsert;
        }

        public function delete(){
            $sqlDelete = 'DELETE FROM questions WHERE id=';
            return $sqlDelete;
        }

        public function update(){
            $sqlUpdate = 'UPDATE questions SET savol= ?, variant_a= ?, variant_b= ?, variant_c = ?, javob = ? WHERE id = ';
            return $sqlUpdate;
        }

        public function listTest(){
            $lists = Test::connect()->query('SELECT * FROM questions ORDER BY id DESC');
            $queryList = $lists->fetchAll();
            return $queryList;
        }

        public function addUser(){
            $sqlAddUser = 'INSERT INTO users (ism, login, password)  VALUES (?,?,?)';
            $queryAddUser = Test::connect()->prepare($sqlAddUser);
            return $queryAddUser;
        }

        public function listUser(){
            $sqlListUser = Test::connect()->query('SELECT * FROM users ORDER BY id DESC');
            $queryListUser = $sqlListUser->fetchAll();
            return $queryListUser;
        }
    }
?>