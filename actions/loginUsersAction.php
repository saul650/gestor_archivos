<?php
    include '../models/User.php';

    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];

    $user = new User();
    $user->getUser( $email, $password );
    
    // do session start
    if ( $user->name !== '' ) {
        session_start();
        $_SESSION[ 'name' ] = $user->name;
        $_SESSION[ 'email' ] = $user->email;
        $_SESSION[ 'role' ] = $user->role;
        echo '<p>Login success</p>';
        echo '<small> Redirecting to index </small>'

        header( "refresh:5;url=../index.php" );
    }
    
?>
