<?php

require 'vendor/autoload.php';

$test = new Simplephper\Accuracy(123);
echo $test->add(321)->result();