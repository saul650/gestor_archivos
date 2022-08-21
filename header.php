

<nav>
    <ul>
        <li><a href="index.php"> Home </a></li>
        <li><a href="about.php"> About </a></li>
        <li><a href="contact.php"> Contact </a></li>
        <li><a href="login.php"> Login </a></li>
    </ul>
    <div>
        <h3> Gestor de Archivos </h3>
    </div>
    <?php
        if ( isset( $_SESSION[ 'name' ] ) ) {
            echo '<div>';
            echo '<p> Welcome, ' . $_SESSION[ 'name' ] . '</p>';
            echo '<a href="logout.php"> Logout </a>';
            echo '</div>';
        }
    ?>
</nav>
