<?php
require_once 'index.php';
    class Country{
        public $name;
        protected $age;
        private $place;
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function getPlace()
    {
        return $this->place;
    }

    public function setPlace($place)
    {
        $this->place=$place;
    }

    public function __construct(){
        $this->name='Россия';
        $this->age='2019';
        $this->place='Евразия';
    }

    public function __destruct(){
        echo "объект удален";
    }

    public function show(){
        echo $this->name.'<br/>'.' '.$this->age.'<br/>'.' '.$this->place.'<br/>';
    }
}
?>    