<?php

namespace App\Controllers\Team;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class Team
{
    public function execute()
    {
        require('template/team.php');
    }
} 
