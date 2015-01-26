<?php
   require_once __DIR__ . '/server.php';
   //server array
   $hosts = array(
      'apps.microad.co.id',
      'git.microad.co.id',
      'eneloop.id',
      'panasonic-ht.microad.co.id',
      'ocbc-umi.microad.co.id',
      'converse.id',
      'eneloop.uk.com',
      'eneloop.in',
      'goon.microad.co.id',
      'basiqk.com',
      'development.microad.co.id',
      'dev.microad.co.id',
      'bandung.microad.co.id'
   );

   foreach($hosts as $host){
      var_dump($host);
      Server::check($host);
      sleep(60);
   }


