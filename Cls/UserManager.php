<?php

//namespace FaceTimeBlog\Cls;

//use FaceTimeBlog\Types\IUserManager;
//use FaceTimeBlog\Models\UserModel;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserManager
 *
 * @author zohaib
 */
class UserManager implements IUserManager {

    public function AddUser(IUsers $IUser) {
        try {
            $ObjUModel = new UserModel();
            echo $IUser->getFirstName();
            $ObjUModel->AddUser($IUser);
            
        } catch (Exception $exc) {
            throw $exc;
        }
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
