<?php

namespace App\Models;

use MVC\Model\Model;

class Users extends Model
{
    private $user_id;
    private $name;
    private $email;
    private $password;
    private $phone;
    private $photo;

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function getAllUsers()
    {
        $q = "select user_id, name, email, phone, photo from users";
        return $this->db->query($q)->fetchAll();
    }

    public function create()
    {
        $q = "insert into users (name, email, password, phone, photo) values (:name, :email, :password, :phone, :photo)";
        $stmt = $this->db->prepare($q);
        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->bindValue(':phone', $this->__get('phone'));
        $stmt->bindValue(':photo', $this->__get('photo'));
        $stmt->execute();

        // Get the user_id of the last inserted row
        $lastUserInsertedId = $this->db->lastInsertId();

        // Fetch the inserted data from the database
        $q = "SELECT user_id, name, email, phone, photo FROM users WHERE user_id = :user_id";
        $stmt = $this->db->prepare($q);
        $stmt->bindValue(':user_id', $lastUserInsertedId);
        $stmt->execute();

        // Fetch the data and return it as an associative array and return
        $insertedData = $stmt->fetch(\PDO::FETCH_ASSOC);
        $this->data = $insertedData;
        return $this;
    }

    public function showOnlyUser($id)
    {
        $q = "select user_id, name, email, phone, photo from users where user_id = $id";
        return $this->db->query($q)->fetchObject();
    }

    public function update($id)
    {
        $q = "update users set name = :name, email = :email, phone = :phone, photo = :photo where user_id = $id";
        $stmt = $this->db->prepare($q);
        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':phone', $this->__get('phone'));
        $stmt->bindValue(':photo', $this->__get('photo'));
        $stmt->execute();

        // Fetch the updated data
        $q = "SELECT * FROM users WHERE user_id = :user_id";
        $stmt = $this->db->prepare($q);
        $stmt->bindValue(':user_id', $id);
        $stmt->execute();

        // Return the updated data as an associative array
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        // Fetch the updated data to verificate if user exist
        $q = "select * from users where user_id = $id";
        if ($this->db->query($q)->fetchObject() != false) {
            $q = "delete from users where user_id = $id";
            $stmt = $this->db->prepare($q);
            $stmt->execute();
            return true;
        } else {
            return false;
        }
    }
}
