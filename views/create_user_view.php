<?php
    ob_start();
?>

<form action='index.php?action=save-user' method='POST'>

    <input type='text' name='username' placeholder='Insert your username'>
    <input type='text' name='email' placeholder='email' >
    <input type='text' name='password' placeholder='Your password'>
    <input type='submit' value='Send form'>

</form>

<?php
    $create_user_view = ob_get_clean();
?>