<?php
if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', '../');
}

function get_config() {
    // Get the configurations from the config.ini file
    $conf = parse_ini_file(ROOT_DIR.'confs/config.ini');
    return $conf;
}

function create_ssh_tunnel() {
    $config = get_config();

    $dbPort = $config['dbPort'];
    $dbHost = $config['dbHostname'];
    $sshUser = $config['sshUsername'];
    $sshHost = $config['sshHostname'];
    
    $command = "ssh -L {$dbPort}:{$dbHost}:{$dbPort} {$sshUser}@{$sshHost} -N -f -L";
    shell_exec($command);
}

function initDB() {
    // Get the configuration from the config.ini file
    $config = get_config();
    
    // Establish the connection with the database
    $con = mysqli_connect($config['dbHostname'], $config['dbUsername'], $config['dbPassword'], $config['dbName']);
    return $con;
}

function get_list_users() {
    $con = initDB();

    $result = $con -> query("SELECT * FROM users");
    $users = array();
    while ($row = $result -> fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

?>