<?php
    include 'Connection.php';

    class User {
        private $name;
        private $email;
        private $password;
        private $role;
        private $created_at;
        private $updated_at;
        private $connection;
        
        public function __construct() {
            $this->connection = new Connection();
        }

        private function checkEmail ( $email ) {
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->connection->getConnection()->query( $query );
            if ( $result->num_rows > 0 )
                return true;
            return false;
        }

        public function createStudent ( $name, $email, $password ) {

            if ( $this->checkEmail( $email ) ) {
                echo '<p>The email is already registered.</p>';
                return false;
            }

            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->role = 'student';
            $this->created_at = date( 'Y-m-d H:i:s' );
            $this->updated_at = date( 'Y-m-d H:i:s' );

            
            
            $sql = "INSERT INTO users (name, email, password, role, created_at, updated_at) VALUES ( '$this->name', '$this->email', '$this->password', '$this->role', '$this->created_at', '$this->updated_at' )";
            $result = $this->connection->getConnection()->query( $sql );
            
            if ( $result ) {
                echo '<p>User created successfully.</p>';
                echo '<small> Redirecting to login page </small>'
                header( "refresh:5;url=../login.php" );
            } else {
                echo '<p>Error creating user.</p>';
                echo '<small> Redirecting to login page </small>'
                header( "refresh:5;url=../register.php" );
            }
        }

        public function getUser ( $email, $password ) {

            $this->email = $email;
            $this->password = $password;
            
            $sql = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'";
            $result = $this->connection->getConnection()->query( $sql );
            
            if ( $result->num_rows > 0 ) {
                while( $row = $result->fetch_assoc() ) {
                    $this->id = $row[ 'id' ];
                    $this->name = $row[ 'name' ];
                    $this->email = $row[ 'email' ];
                    $this->password = $row[ 'password' ];
                    $this->role = $row[ 'role' ];
                    $this->created_at = $row[ 'created_at' ];
                    $this->updated_at = $row[ 'updated_at' ];
                }
            } else {
                echo '<p>User not found.</p>';
            }
        }
        
        
    }
?>
