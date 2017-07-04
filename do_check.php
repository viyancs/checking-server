<?php
   require_once __DIR__ . '/server.php';
   //server array
   $hosts = array(
      '1.1.1.1:80,22:"Development Server"',
      '1.1.1.1:80,22:"Production Server"',
      '1.1.1.1:5432:"Database Postgress Production"',
      '1.1.1.1:6380:"Redis Server"',
      
   );

   foreach($hosts as $host){
      var_dump($host);
      $server = explode(":",$host);
      $host = $server[0];
      $port = $server[1];
      $name = $server[2];
      Server::check($host,$port,$name);
   }

