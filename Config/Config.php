<?php 

// Check if the constants are not already defined before adding them
// BASE URL
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/PHP/SprintSchool/');
}

// Staff URL
if (!defined('STAFF_URL')) {
    define('STAFF_URL', BASE_URL . 'Staff/');
}

//Student URL
if (!defined('STUDENT_URL')) {
    define('STUDENT_URL', BASE_URL . 'Student/');
}



