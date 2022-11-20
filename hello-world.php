<?php

require_once __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use joshtronic\LoremIpsum;

$text = 'Hello, World!';
echo $text . "\n";

$slugify = new Slugify();
echo $slugify->slugify($text, '*') . "\n";

echo "------------------\n";

$lipsum = new LoremIpsum();
$randomText = $lipsum->words(5);
echo "$randomText\n";
echo $slugify->slugify($randomText, '_') . "\n";