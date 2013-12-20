<?php

//namespace FaceTimeBlog\Models;
//use FaceTimeBlog\Types\IUserManager;
//use FaceTimeBlog\Types\IUsers;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsreModel
 *
 * @author zohaib
 */
class UserModel implements IUserManager {
    //put your code here
    private $dbConnection;
     private $m_Result;

    public function __construct() {
        $this->dbConnection = Connection::Connect();

    }

    public function AddUser(IUsers $IUser) {
         try {
             
            $query = "INSERT INTO users (username, password, fname, lname,email, website, group_id, joining_date, modification_date, isActive) VALUES ('". $IUser->getUserName()."','". $IUser->getPassword()."','".$IUser->getFirstName()."','".$IUser->getLastName()."','".$IUser->getUserEmail()."','".$IUser->getWebSite()."',".$IUser->getGroupId().",'".$IUser->getUserJoiningDate()."','".$IUser->getUserModificationDate()."','".$IUser->getIsActiveUser()."')";
            $this->m_Result = $this->dbConnection->Query($query);
            $this->dbConnection->Close();
        } catch (Exception $e) {
            throw $e;
        }
        return $this->m_Result;
    }
    public function EditUser(IUsers $IUser) {

        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function RemoveUser(IUsers $IUser) {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function GetUserById($id) {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function GetActiveUsers() {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function GetAllUsers() {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function GetUserGroup(IUsers $IUser) {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    public function GetUserGroupById($id) {
        try {
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
}

?>
