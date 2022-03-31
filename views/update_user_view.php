<?php
    ob_start();
?>

<form action='index.php?action=save-user' method='POST'>

    <input type='hidden' value='<?= $user['id'] ?>' name='id' >
    <input type='text' value='<?= $user['username'] ?>' name='username' >
    <input type='text' value='<?= $user['email'] ?>' name='email' >
    <input type='text' value='<?= $user['password'] ?>' name='password' >
    <input type='submit' value='Send form'>

</form>

<?php
    $update_user_view = ob_get_clean();
?>