<?php
require_once 'TriangleFigure2.php';

$tri = new TriangleFigure();
$tri->setBase(48);
$tri->setHeight(2);
print "三角形の面積は、【{$tri->getArea()}" . "】です。\n";