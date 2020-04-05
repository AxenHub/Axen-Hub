// Variables
$token = "token";


if( !isset($_REQUEST["token"]) || $_REQUEST["token"] != $token )
 die("Need token");
