 <?php 
$link = mysql_connect('apsonlinetestcom2.ipagemysql.com', '************', '**************'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 

mysql_select_db(subhwishes); 
echo "connected";
?> 