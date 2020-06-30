<?php
include_once "component/error-header.html";
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
       403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
       404 => array('404 Not Found', 'The document/file requested was not found on this server.'),
       405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
       408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
       500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
       502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
       504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
       $message = 'Please supply a valid status code.';
}

if ($title == false || strlen($status) != 3) {
       $message = 'Please supply a valid status code.';
}
//Insert headers here
echo '<div class="col-lg-6 col-lg-off-3 background-white center" style="margin-top:100px;">
<img src="include\img\top-icon.png" whidth="75px" height="75px"/>

<h2 class="text-center">'.$title.'
</h2>
<br>
<p>'.$message.'</p>
<br>
<br>
<center><a href ="index.php" style="color:black">bake to nija-links</a></center>
</div>';
// Insert footer here