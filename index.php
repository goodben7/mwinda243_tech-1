<?php 

require_once('src/controllers/homepage.php');
require_once('src/controllers/team.php');
require_once('src/controllers/blog/blog.php');
require_once('src/controllers/blog/mwinda243_tech.php');
require_once('src/controllers/portfolio/portfolio-details.php');

use App\Controllers\Homepage\Homepage;
use App\Controllers\Team\Team;
use App\Controllers\Blog\Blog;
use App\Controllers\MwindaBlog\MwindaBlog;
use App\Controllers\MwindaPortfolio\MwindaPortfolio;

try {

  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  $result = match (true) {
      $uri === '/' => (new Homepage())->execute(),
      $uri === '/team' => (new Team())->execute(),
      $uri === '/blog' => (new Blog())->execute(),
      $uri === '/blog/mwinda243_tech' => (new MwindaBlog())->execute(),
      $uri === '/portfolio/mwinda243_tech' => (new MwindaPortfolio())->execute(),
      default => 'Not Found',
  };


} catch (Exception $e) {

  $errorMessage = $e->getMessage();

}