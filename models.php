<?php 

    $db = new PDO('mysql:host=localhost;dbname=demo_innerjoin;charset=utf8', 'root', 'root');

    function create_user($data) {
        global $db;

        $sql = "INSERT INTO Users (username, email, password) VALUES (:_username, :_email, :_password)";

        $query = $db->prepare($sql);

        $result = $query->execute(array(
            '_username' => $data['username'],
            '_email' => $data['email'],
            '_password' => $data['password']
        ));

    }

    function update_user($data) {
        global $db;

        $sql = "UPDATE Users SET username=:_username, email=:_email, password=:_password WHERE id=:_id";

        $query = $db->prepare($sql);

        $result = $query->execute(array(
            '_username' => $data['username'],
            '_email' => $data['email'],
            '_password' => $data['password'],
            '_id' => $data['id']
        ));
    }

    
    function delete_user($data) {
        global $db;

        $sql = "DELETE FROM Users WHERE id=:_id";

        $query = $db->prepare($sql);

        $result = $query->execute(array(
            '_id' => $data['id']
        ));
    }

    function list_users() {
        global $db;

        $sql = "SELECT * FROM Users";

        $query = $db->prepare($sql);

        $result = $query->execute();

        $users = $query->fetchAll();
        $query->closeCursor();

        return $users;
    }

    function get_user($data) {
        global $db;

        $sql = "SELECT * FROM Users WHERE id=:_id";

        $query = $db->prepare($sql);

        $result = $query->execute(array(
            '_id' => $data['id']
        ));

        $user = $query->fetch();
        $query->closeCursor();

        return $user;
    }


?>


