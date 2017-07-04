<?php
require_once __DIR__ . '/emailutil.php';
Class Server {

   public static function check($host,$ports,$name) {
      $ports = explode(',',$ports);
      foreach ($ports as $port) {
         $connection = @fsockopen($host,$port);
         if (is_resource($connection)) {
	    echo '<h2>'. $host. ':' . $port . ' ' . '('. getservbyport($port,'tcp'). ') is open.</h2>' . "\n";
            fclose($connection);
            continue;
         } 
         EmailUtil::send($host,$port,$name);
      }
   }
}
