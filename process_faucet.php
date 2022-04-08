<?PHP 
$db = mysqli_connect(getenv('db_host'),getenv('db_user'),getenv('db_pass'),'bmorecoinweb') or die(); 
$q = "select * from tweets where status = 'approved'";
$r = $db->query($q);
while ($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<li>SENDING 1,000.00000000 BALTx to $d[address]</li>";
}

?>
