<?php

namespace App\Controllers\Homepage;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class Homepage
{
    public function execute()
    {
        require('template/homepage.php');
    }
} 
