<?php

$settings = array(

  'available_scripts'      => array(
    'jquery-g'             => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'plugins'              => array('/assets/js/plugins.min.js'),
    'scripts'              => array('/assets/js/scripts.min.js'),
  ),

  'default_scripts'        => array(
    'jquery-g',
    'plugins',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'default'              => array('/assets/css/styles.min.css'),
    'rblayout'             => array('http://www.redbull.com/cs/RedBull2Misc/external-content/external-layout.css'),
    'rbmain'               => array('http://www.redbull.com/cs/RedBull2Misc/external-content/main.css'),
  ),

  'default_stylesheets'    => array(
    'default',
    'rblayout',
    'rbmain'
  ),

);

Themewrangler::set_defaults( $settings );