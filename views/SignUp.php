<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

spl_autoload_register(function ($className) {
    $possibilities = array(
        'Cls'.DIRECTORY_SEPARATOR.$className.'.php',
        'BO'.DIRECTORY_SEPARATOR.$className.'.php',
        'Models'.DIRECTORY_SEPARATOR.$className.'.php',
        'Cls\DBConnection'.DIRECTORY_SEPARATOR.$className.'.php',
        'Cls\Config'.DIRECTORY_SEPARATOR.$className.'.php',
        'Types'.DIRECTORY_SEPARATOR.$className.'.php',
        $className.'.php'
    );
    foreach ($possibilities as $file) {
        if (file_exists($file)) {            
            include_once($file);
            return true;
        }
    }
    throw new Exception($file . "   Not Found");
});

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try{
        $objUser =  new Users();
        $objUser->setUserName("zohaibmir");
        $objUser->setPassword("mir.mir");
        $objUser->setFirstName("Zohaib");
        $objUser->setLastName("Mir");
        $objUser->setUserEmail("zohaib.mir@gmail.com");
        $objUser->setWebSite("www.zafrax.com");
        $objUser->setGroupId(1);
        $objUser->setUserJoiningDate();
        $objUser->setUserModificationDate();
        $objUser->setIsActiveUser(1);
        $objUserMgr = new UserManager();
        $objUserMgr->AddUser($objUser);
         } catch (Exception $exc) {
             echo $exc->getMessage();
         }
        ?>
    </body>
</html>
