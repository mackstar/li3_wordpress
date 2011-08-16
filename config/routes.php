<?php

use \lithium\net\http\Router;
use \lithium\core\Environment;

Router::connect('/categories/{:category}/page/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/{:year:[0-9]{4}}/{:month:[0-9]{2}}/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/categories/{:category}/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/blog/page/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/blog/{:args}', array('Blog::index', 'library' => 'li3_wordpress'));
Router::connect('/archives/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:year}/{:month}/{:day}/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:year}/{:month}/{:args}', array('Blog::view', 'library' => 'li3_wordpress'));
Router::connect('/{:page}/{:args}', array('Pages::view', 'library' => 'li3_wordpress'));
