<?php
    require('models.php');

    $data = array(
        'id' => $_GET['user_id'],
    );

    $user = get_user($data);
?>

<form action='validate_form.php' method='POST'>
    <input type='hidden' value='<?= $user['id'] ?>'>
    <input type='text' value='<?= $user['username'] ?>'>
    <input type='text' value='<?= $user['email'] ?>'>
    <input type='text' value='<?= $user['password'] ?>'>
    <input type='submit' value='Send form'>
</form>