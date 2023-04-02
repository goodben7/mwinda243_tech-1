<?php

namespace App\Controllers\MwindaBlog;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class MwindaBlog
{
    public function execute()
    {
        require('template/blog/mwinda243_tech.php');
    }
} 
