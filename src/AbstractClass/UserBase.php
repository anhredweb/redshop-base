<?php
namespace AbstractClass;

abstract class UserBase
{
    private $userID;
    private $username;
    private $firstName;
    private $middleName;
    private $lastName;
    private $fullName;
    private $address;
    private $postCode;
    private $userIp;

    //abstract protected function UserAuthorization();
    abstract public function getUser();
    //abstract public function addUser();
    //abstract public function updateUser();

}