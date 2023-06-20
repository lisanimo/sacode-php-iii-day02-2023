<?php 

class Car {

    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "Mobil saya adalah" . $this->color ."".$this->model . "4";
    }

}

$mycar = new Car('biru', 'Avansa');
echo $mycar->message();
echo '<br>';
$mycar = new Car('Hitam', 'BMW');
echo $mycar->message();

  

?>