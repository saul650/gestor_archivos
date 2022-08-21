
<?php
    include 'models/User.php'
?>

<form action="actions/registerUsersAction.php" method="post">

    <input
        type="text"
        name="fullName"
        placeholder="Full Name"
        value="saul"
    />
    <input
        type="email"
        name="email"
        placeholder="yuki@example.com"
        value="saul@gmail.com"
    />
    <input
        type="password"
        name="password"
        placeholder="Password"
        value="1234"
    />
    <button> Register </button>
    <a href="login.php"> I have account </a>
</form>
