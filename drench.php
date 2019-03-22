#! /usr/bin/env php
<?php
use Symfony\Component\Console\Application;
use Acme\SayHelloCommand;
require 'vendor/autoload.php';

$app = new Application('Drench CLI','1.0');

$app->add(new SayHelloCommand);
$app->run();
 
  