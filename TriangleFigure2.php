<?php
class TriangleFigure {
    private $base;
    private $height;

    //コンストラクタ(初期化)を定義
    public function __construct() {
        $this->setBase(1);
        $this->setHeight(1);
    }

    //底辺のゲッターを定義
    public function getBase(): float {
        return $this->base;
    }

    //底辺のセッターを定義
    public function setBase(float $base) {
        if ($base > 0) {
            $this->base = $base;
        }
    }

    //高さのゲッターを定義
    public function getHeight(): float {
        return $this->height;
    }

    //高さのセッターを定義
    public function setHeight(float $height) {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    //上記定義を参照して、三角形の面積を求める
    public function getArea(): float {
        return $this->getBase() * $this->getHeight() /2 ;
    }
}