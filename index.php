<?php
if(isset($_POST['زرالإرسال'])){
$user = $_POST['خانةالإسم'];
if(strlen($user) <= 2) { exit; }
else {
	
	$ticker = $_POST['خانةالرسالة'];
	if($ticker=='q') { exit; }
	
	$socket= socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
	if($socket===false)
	{
		echo "Socket creation failed!";
	}
	$result = socket_connect($socket,"127.0.0.1",1234);
	if($result===false)
	{
		echo "Socket connection failed!";
	}
		else { 
		socket_write($socket,"$user says --> $ticker",1024);
         }
    
}
}
?>

<form  style="position:absolute;top:20%;left:35%;"method="POST"  action="clientY.php">
<table border="1">
<tr><td>الإسم:</td><td><input  style="width:100%" type="text"  name="خانةالإسم"/></td></tr>
<tr><td colspan="2" style="width:100%"><textarea cols="30" rows="10" name="خانةالرسالة" ></textarea></td></tr>
<tr><td colspan="2"><input type="submit"  name="زرالإرسال" value="إرسال"/></td></tr>

</table>
</form>

<!---------------------------------------------------------------------------------------------------------------------->

<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(320, 240) );
</script>



<script language="JavaScript">
    webcam.set_api_url( 'test.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				document.getElementById('upload_results').innerHTML ='<h1>Upload Successful!</h1>';
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("PHP Error: " + msg);
		}
	</script>
<div id="upload_results" style="background-color:#eee;"></div>
