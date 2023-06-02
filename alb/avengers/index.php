<html>
<title> Super Hero Pics </title>
<body>
<h1>
<center>
<IMG SRC="avengers.jpg" ALT="error downloading file"><br>
<?php
$eip = file_get_contents('TOKEN=`curl -X PUT "http://169.254.169.254/latest/api/token" -H "X-aws-ec2-metadata-token-ttl-seconds: 21600"` && curl -H "X-aws-ec2-metadata-token: $TOKEN" -v http://169.254.169.254/latest/meta-data/public-ipv4');
echo $eip;
?>
</center>
</h1>
</body>
</html>
