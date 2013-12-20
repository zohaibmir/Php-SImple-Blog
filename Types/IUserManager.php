<?php
//namespace FaceTimeBlog\Types;
//use FaceTimeBlog\Types\IUsers;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author zohaib
 */
interface IUserManager {
    //put your code here    
    public function AddUser(IUsers $IUser);
    public function EditUser(IUsers $IUser);
    public function RemoveUser(IUsers $IUser);        
    public function GetUserById($id);
    public function GetActiveUsers();
    public function GetAllUsers();
    public function GetUserGroup(IUsers $IUser);
    public function GetUserGroupById($id);
}

?>
