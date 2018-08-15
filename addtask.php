<?PHP
require("api/api.php");
// usage: localhost/addtask.php?a=some_data&b=some_data

if(isset($_GET['a']) && $_GET['b']) {
  
if(empty($a)) { die(); }
if(empty($b)) { die(); }

$a = $_GET['a'];
$b = $_GET['b'];

send_request( $a, $b );

} else { die(); }
