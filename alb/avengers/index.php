<html>
<title> Super Hero Pics </title>
<body>
<h1>
<center>
<IMG SRC="avengers.jpg" ALT="error downloading file"><br>
<?php
function getEC2InstanceMetadata($path) {
      $tokenUrl = 'http://169.254.169.254/latest/api/token';
      $metadataUrl = 'http://169.254.169.254/latest/meta-data/' . $path;

      // Retrieve the metadata token
      $tokenCmd = 'curl -X PUT "' . $tokenUrl . '" -H "X-aws-ec2-metadata-token-ttl-seconds: 21600"';
      $token = exec($tokenCmd);

      // Retrieve the metadata using the token
      $metadataCmd = 'curl -H "X-aws-ec2-metadata-token: ' . $token . '" ' . $metadataUrl;
      $metadata = exec($metadataCmd);

      return $metadata;
    }
    
    $publicIpv4 = getEC2InstanceMetadata('public-ipv4');
    
    echo "<p><strong>Public IP Address:</strong> $publicIpv4</p>";
?>
</center>
</h1>
</body>
</html>
