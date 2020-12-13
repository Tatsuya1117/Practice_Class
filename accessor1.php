<?php
require_once 'TriangleFigure1.php';

$tri = new TriangleFigure();
$tri->base = 100;
$tri->height = 200;
print "三角形の面積：{$tri->getArea()}";