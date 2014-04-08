<?php
error_reporting(0);
set_time_limit(0);
$host = "127.0.0.1";
$port = 1234;
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create
socket\n");
$result = socket_bind($socket, $host, $port) or die("Could not bind to
socket\n");
$result = socket_listen($socket) or die("Could not set up socket
listener\n");


echo "Entrer  le Sujet  SVP ? \n";
$sujet = trim(fgets(STDIN));
echo "Entrer el Nombre de question s'il vout plait  ?\n ";
$nbrQuest = trim(fgets(STDIN));

for($i=0;$i<$nbrQuest;$i++){

echo "entrer la question ".array_sum(array($i,1)).":\n";
$Quest[$i] = trim(fgets(STDIN));

}
echo "Waiting for connections... \n";

echo "****************************Le  Sujet de la Conference C'est  : ".$sujet."********************\n";
echo "****************************Les  Qustion poser par le directeur sont :\n";
for($i=0;$i<$nbrQuest;$i++){
echo  array_sum(array($i,1)).")".$Quest[$i]."\n";
}

echo "############################Soyer la bienVenue à vos remarqus  et suggestions:.................\n";

while(1)
{
	$spawn[++$i] = socket_accept($socket) or die("Could not accept incoming
	connection\n");
	echo "_______________________________________________________\n";
	$input = socket_read($spawn[$i],1024);
	$client = $input;
	echo $client ."\n";
	socket_close($spawn[$i]);
	echo "_______________________________________________________\n";
}
socket_close($socket);
?>