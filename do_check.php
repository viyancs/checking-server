<?php
   require_once __DIR__ . '/server.php';
   //server array
   $hosts = array(
      'server1',
      'server2'
   );

   foreach($hosts as $host){
      var_dump($host);
      Server::check($host);
      sleep(60);
   }


