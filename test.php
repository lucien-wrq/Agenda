<?php
define('ROOT_DIR', '');

require_once ROOT_DIR.'includes/function.php';

$users = get_list_users();

//create_ssh_tunnel();

print_r($users);

create_ssh_tunnel();

?>