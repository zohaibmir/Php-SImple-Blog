<?php
//namespace Types;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author zohaib
 */
interface IUsers {
    //put your code here
    public function getUserId();
    public function setUserId($userId);
    public function getUserName();
    public function setUserName($userName);
    public function getFirstName();
    public function setFirstname($firstName);
    public function getLastName();
    public function setLastName($lastName);
    public function getUserEmail();
    public function setUserEmail($email);
    public function getWebSite();
    public function setWebSite($webSite);
    public function getGroupId();
    public function setGroupId($groupId);    
    public function getUserJoiningDate();
    public function setUserJoiningDate();
    public function getUserModificationDate();
    public function setUserModificationDate();
    public function getIsActiveUser();
    public function setIsActiveUser($isActive);
    
          
}

?>
