<html>
<title> Super Hero Pics </title>
<body>
<h1>
<center>
<IMG SRC="avengers.jpg" ALT="error downloading file"><br>
<?php
    function getEC2InstanceMetadata($path) {
      $url = 'http://169.254.169.254/latest/meta-data/' . $path;
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $data = curl_exec($curl);
      curl_close($curl);
      return $data;
    }
    
    $publicIpv4 = getEC2InstanceMetadata('public-ipv4');
    
    echo "<p><strong>Public IP Address:</strong> $publicIpv4</p>";
?>
</center>
</h1>
</body>
</html>
