<?php

namespace App\Controllers\Blog;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class Blog
{
    public function execute()
    {
        require('template/blog/blog.php');
    }
} 
