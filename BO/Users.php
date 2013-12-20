<?php

//namespace BO;

//use Types\IUsers;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author zohaib
 */
class Users implements IUsers {

    //put your code here
    private $Id;
    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $webSite;
    private $groupId;
    private $joiningDate;
    private $modificationDate;
    private $isActive;

    public function __construct() {
        //echo "myClass init'ed successfuly!!!";
    }

    public function getUserId() {
        return $this->id;
    }

    public function setUserId($userId) {
        $this->Id = $userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }
    public function getPassword()
    {
       return $this->password;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getUserEmail() {
        return $this->email;
    }

    public function setUserEmail($email) {
        $this->email = $email;
    }

    public function getWebSite() {
        return $this->webSite;
    }

    public function setWebSite($webSite) {
        $this->webSite = $webSite;
    }

    public function getGroupId() {
        return $this->groupId;
    }

    public function setGroupId($groupId = 2) {
        $this->groupId = $groupId;
    }

    public function setUserJoiningDate() {
        $this->joiningDate = date('Y-m-d H:i:s');
    }

    public function getUserJoiningDate() {
        return $this->joiningDate;
    }

    public function setUserModificationDate() {
        $this->modificationDate = date('Y-m-d H:i:s');
    }

    public function getUserModificationDate() {
        return $this->modificationDate;
    }

    public function getIsActiveUser() {
        return $this->isActive;
    }

    public function setIsActiveUser($isActive = 0) {
         $this->isActive = $isActive;       
    }

}

?>
