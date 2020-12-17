<?php
class TriangleFigure {
    private $base;
    private $height;

    //初期化
    public function __construct() {
        $this->setBase(1);
        $this->setHeight(1);
    }

    //baseプロパティのゲッター
    public function getBase(): float {
        return $this->base;
    }

    //baseプロパティのセッター
    public function setBase(float $base) {
        if ($base > 0) {
            $this->base = $base;
        }
    }

    //heightプロパティのゲッター
    public function getHeight(): float {
        return $this->height;
    }

    //heightプロパティのセッター
    public function setHeight(float $height) {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    //三角形の面積を出力
    public function getArea(): float {
        //実際の出力は「accessor2-0.php」から
        return $this->getBase() * $this->getHeight() / 2;
    }
}