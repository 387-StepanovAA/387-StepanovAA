<?php
include 'VarDumper.php';
class Dog
{
    public $physicalcapabilities = 40;
    public $legs = 4;
    public $steps = 0;
    public $nose = 1;
    public $eyes = 2;
    public $satiety = 50;
    public $Arms = 0;
    public $ears = 2;
    public function go(){ //Dog go
        return $this -> steps++;
        return $this ->satiety - 10;
    }
    public function jump (){ //Dog jump and broke legs
        return $this ->legs--;
    }
    public function saySmth ($text) {
        echo $text;
    }
    public function eat () {
        return $this ->satiety + 20;
        return $this ->physicalcapabilities + 20;
    }
    public function calcLegArms () {
        return $this -> legs + $this->Arms;
    }
    public function calcOrgans (){
        return $this->ears + $this->eyes + $this->nose;
    }
    public function run (){
        return $this->satiety - 30;
        return $this->physicalcapabilities - 30;
    }
}
$korgi = new Dog;
print_r($korgi);
echo '<br>';
$korgi->run();
$korgi->calcLegArms();
$korgi->eat();
VarDumper::dump($korgi,10,true);
echo '<br>';
$korgi->saySmth('Гав ');
?>