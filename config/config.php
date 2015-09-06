<?php
/**
 * Created by PhpStorm.
 * User: Perron
 * Date: 12/17/2014
 * Time: 2:18 PM
 */

$env = "prod"; // local, beta, prod

if($env == "local"){
    require_once('local/config.php');
}
elseif($env == "beta"){
    require_once('beta/config.php');
}
elseif($env == "prod"){
    require_once('prod/config.php');
}

if(isset($_GET["env"])){
    echo json_encode(array("environment" => $env));
}

?>
