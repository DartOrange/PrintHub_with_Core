<?php

use printhub\Router;


Router::add('^sitemap.xml', ['controller' => 'Sitemap', 'action' => 'index', 'layout' => 'false']);
//users routes
Router::add('^product/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view', 'lang' => 'ru']);
Router::add('^service/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Service', 'action' => 'view', 'lang' => 'ru']);

Router::add('^ru/product/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view', 'lang' => 'ru']);
Router::add('^ru/service/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Service', 'action' => 'view', 'lang' => 'ru']);

Router::add('^ua/product/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view', 'lang' => 'ua']);
Router::add('^ua/service/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Service', 'action' => 'view', 'lang' => 'ua']);

Router::add('^en/product/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view', 'lang' => 'en']);
Router::add('^en/service/?(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Service', 'action' => 'view', 'lang' => 'en']);



//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
Router::add('^ru/admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^ru/admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);


//default language
Router::add('^rules/', ['controller' => 'Rules', 'action' => 'index', 'lang' => 'ru']);
Router::add('^ru/rules', ['controller' => 'Rules', 'action' => 'index', 'lang' => 'ru']);
Router::add('^ru$', ['controller' => 'Main', 'action' => 'index', 'lang' => 'ru']);
Router::add('^ru/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['lang' => 'ru']);

Router::add('^ua$', ['controller' => 'Main', 'action' => 'index', 'lang' => 'ua']);
Router::add('^ua/rules', ['controller' => 'Rules', 'action' => 'index', 'lang' => 'ua']);
Router::add('^ua/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['lang' => 'ua']);

Router::add('^en$', ['controller' => 'Main', 'action' => 'index', 'lang' => 'en']);
Router::add('^en/rules', ['controller' => 'Rules', 'action' => 'index', 'lang' => 'en']);
Router::add('^en/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['lang' => 'en']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
