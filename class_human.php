<?php
class human 
{
    public $name = '';
    public $weight = 0;

    public function __construct($name, $weight) {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function eat() {
        $this->weight += 1;
    }
    public function run() {
        $this->weight -= 1; 
    }
}

$tatsuya = new Human('達也', 65);
$tatsuya->eat();
print $tatsuya->name. 'さんがご飯を食べると、体重は'. $tatsuya->weight. 'kgです。'. PHP_EOL;
$tatsuya->run();
print $tatsuya->name. 'さんが５キロ走ると、体重は'. $tatsuya->weight. 'kgです。'. PHP_EOL;
