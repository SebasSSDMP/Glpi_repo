<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'glpi_user';
   public $dbpassword = '3214';
   public $dbdefault = 'glpi_db';
   public $allow_datetime = false;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_signed_keys = false;
}
