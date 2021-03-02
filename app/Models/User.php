<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //attributes id, fullname, type, username, password
    protected $fillable = ['fullname','type','username','password'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getFullName()
    {
        return $this->attributes['fullname'];
    }

    public function setFullName($fullname)
    {
        $this->attributes['fullname'] = $fullname;
    }

    public function getType()
    {
        return $this->attributes['type'];
    }

    public function setType($type)
    {
        $this->attributes['type'] = $type;
    }

    public function getUsername()
    {
        return $this->attributes['username'];
    }

    public function setUsernamae($username)
    {
        $this->attributes['username'] = $username;
    }

    public function getPassword()
    {
        return $this->attributes['password'];
    }

    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }

}


