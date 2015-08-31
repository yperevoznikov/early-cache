<?php

return array(
    'enabled' => true,
    'cache_dir' => dirname(__FILE__) . '/cache-tmp',
    'cookie_no_cache' => array('authautologin'),
    'minimize_html' => true,
    'secret_code' => '123',

    'rules' => array(
        array('regexp' => '#^/$#', 'cachetime' => 60),
        array('startswith' => '/page', 'cachetime' => 0),
    ),

);