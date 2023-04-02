<?php

namespace App\Controllers\MwindaPortfolio;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class MwindaPortfolio
{
    public function execute()
    {
        require('template/portfolio/portfolio-details.php');
    }
} 
