<?php
require_once 'TriangleFigure2-0.php';

$tri = new TriangleFigure();
$tri->setBase(-50);
$tri->setHeight(-3);
print "三角形の面積は、【{$tri->getArea()}" . "】です。";