
<?php
    include '/models/User.php'
?>

<form action="/actions/registerUsersAction.php" method="post">

    <input
        type="text"
        name="fullName"
        placeholder="Full Name"
    />
    <input
        type="email"
        name="email"
        placeholder="yuki@example.com"
    />
    <input
        type="password"
        name="password"
        placeholder="Password"
    />
    <button> Register </button>
</form>
