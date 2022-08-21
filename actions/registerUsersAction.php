
<?php
    include '../models/User.php';
    $fullName = $_POST[ 'fullName' ];
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];

    $user = new User();

    $user->createStudent( $fullName, $email, $password );
    
?>
