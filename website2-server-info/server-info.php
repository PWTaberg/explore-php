<?php
# $_SUPER_GLOBAL 

# Create Server Array
//echo 'server-info <br>';

$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],    
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],


];
/*
echo "Host Server Name: ";
echo $server['Host Server Name'];
echo '<br>';
echo "Host Header: ";
echo $server['Host Header'];
echo '<br>';
echo "Server Software: ";
echo $server['Server Software'];
echo '<br>';
echo "Document Root: ";
echo $server['Document Root'];
echo '<br>';
echo "Current Page: ";
echo $server['Current Page'];
echo '<br>';
echo "Script Name: ";
echo $server['Script Name'];
echo '<br>';
echo "Absolute Path: ";
echo $server['Absolute Path'];
echo '<br>';
echo '<br>';

print_r($server);
echo '<br>';
echo '<br>';
*/

# Create Clien Array
//echo 'client-info <br>';

$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],

];
/*
echo "Client System info: ";
echo $client['Client System info'];
echo '<br>';
echo "Client IP: ";
echo $client['Client IP'];
echo '<br>';
echo "Remote Port: ";
echo $client['Remote Port'];
echo '<br>';

echo '<br>';


print_r($client);
echo '<br>';
echo '<br>';
*/

?>

