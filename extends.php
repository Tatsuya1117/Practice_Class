<?php
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('太郎', 'テスト');
$bp->work();
$bp->show();