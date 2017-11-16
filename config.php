<?php
    define('CONFIG', "http://localhost:8090/ToDoList/config.php");

    // ROOT 网站根目录
    define('ROOT', "http://localhost:8090/ToDoList/");
    define('INDEX', ROOT."index.php");
    define('LOGIN', ROOT."login.php");
    define('NEW_TASK', ROOT."newTask.php");
    define('PERSON', ROOT."person.php");
    define('REGISTER', ROOT."register.php");
    define('SHOW_TASK_DETAIL', ROOT."showTaskDetail.php");
    define('TASK_DETAIL', ROOT."taskDetail.php");
    define('TODOLIST', ROOT."todolist.php");
    define('RECYCLEBIN', ROOT."recycleBin.php");
    
    // WWW 系统根目录
    define('WWW', dirname(__FILE__));
//    echo WWW."<br>";
    
    define('TEMPLATES', WWW.'/templates/');
    define('TEMPLATES_HEADER', TEMPLATES."header.php");
    define('TEMPLATES_FOOTER', TEMPLATES."footer.php");
    define('TEMPLATES_QUADRANT1', TEMPLATES."quadrant_1.php");
    define('TEMPLATES_QUADRANT2', TEMPLATES."quadrant_2.php");
    define('TEMPLATES_QUADRANT3', TEMPLATES."quadrant_3.php");
    define('TEMPLATES_QUADRANT4', TEMPLATES."quadrant_4.php");
    
    define('APP_COMMON', WWW.'/application/common/');
    define('COMMON_CONN', APP_COMMON."conn.php");
    define('COMMON_FILE', APP_COMMON."file.php");
    define('COMMON_TIME', APP_COMMON."time.php");
    define('COMMON_PARSE', APP_COMMON."parse.php");
    
    define('APP_CONTROL', WWW.'/application/control/');
    define('CONTROL_ADD_NEW_TASK', APP_CONTROL.'addNewUserInfo.php');
    define('CONTROL_CHANGE_USER_INFO', APP_CONTROL.'changeUserInfo.php');
    define('CONTROL_DELETE_TASK', APP_CONTROL.'deleteTask.php');
    define('CONTROL_LOGIN_CHECK', APP_CONTROL.'loginCheck.php');
    define('CONTROL_LOGOUT', APP_CONTROL.'logout.php');
    define('CONTROL_REGISTER_CHECK', APP_CONTROL.'registerCheck.php');
    
    define('APP_DAL', WWW.'/application/dal/');
    define('DAL_TASK', APP_DAL.'Task.php');
    define('DAL_USER', APP_DAL.'User.php');
//    echo DAL_USER;
    
    define('APP_MODEL', WWW.'/application/model/');
    define('MODEL_TASKINFO', APP_MODEL.'/TaskInfo.php');
    define('MODEL_USERINFO', APP_MODEL.'/UserInfo.php');
?>