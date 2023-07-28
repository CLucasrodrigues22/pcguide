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

        return $this;
    }

    public function showOnlyUser($id)
    {
        $q = "select user_id, name, email, phone, photo from users where user_id = $id";
        return $this->db->query($q)->fetchObject();
    }
}
