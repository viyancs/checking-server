<?php
   require_once __DIR__ . '/server.php';
   //server array
   $hosts = array(
      '203.190.241.130:80,22:"Development Server"',
      '203.190.243.34:80,22:"Production Microsite"',
      '192.168.1.225:5432:"Database Postgress Production"',
      '192.168.1.136:6380:"Redis Server"',
      
   );

   foreach($hosts as $host){
      var_dump($host);
      $server = explode(":",$host);
      $host = $server[0];
      $port = $server[1];
      $name = $server[2];
      Server::check($host,$port,$name);
   }

