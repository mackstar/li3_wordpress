<?php

use \lithium\net\http\Router;
use \lithium\core\Environment;

Router::connect('/blog/page/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/blog/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/archives/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:year}/{:month}/{:day}/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:year}/{:month}/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:page}/{:args}', array('Pages::view', 'library' => 'li3_wordpress'));