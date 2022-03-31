
<?php
    ob_start();
?>

<a href='index.php?action=create-user'>Add a new user </a>

<ul>
    <?php foreach($users as $user) { ?>
    
        <li> <a href='index.php?action=update-user&user_id=<?= $user['id'] ?>' > <?= $user['username'] ?> </a> </li>

    <?php } ?>
</ul>


<?php

    $list_users_views = ob_get_clean();

?>