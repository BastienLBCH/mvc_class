<?php

require('models.php');


function list_users_view() {
    // Get the data
    $users = list_users();

    // Call the view to display the data
    require('views/list_user_view.php');

    echo $list_users_views;
}



function update_user_view() {
    $user_id = $_GET['user_id'];

    $data = array(
        'id' => $user_id,
    );

    $user = get_user($data);

    require('views/update_user_view.php');
    
    echo $update_user_view;
}


function create_user_view() {
    require('views/create_user_view.php');

    echo $create_user_view;
}


function save_user_view($data) {
    print_r($data);

    if(array_key_exists('id', $data)) {
        update_user($data);
    }
    else {
        create_user($data);
    }

    header('Location: index.php');
}


$function_list = array(

    'list-users' => 'list_users_view',
    'update-user' => 'update_user_view',
    'save-user' => 'save_user_view',
    'create-user' => 'create_user_view'
);


$action = 'list-users';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if( array_key_exists($action, $function_list) ) {

    if(isset($_POST)) {
        $function_list[$action]($_POST);
    }
    else {
        $function_list[$action]();
    }

}



?>
