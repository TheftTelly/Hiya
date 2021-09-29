<?php

//1)Газонокосилка
class Lawn_mover
{
    private $power;//мощность
    private $wire;//шнур для подключения к сети
    private $button;//кнопка вкл,выкл



    public function setValue(string $power = 'Сильная', int $wire = 220, string $button = 'on/off')
    {
        $this->power = $power;
        $this->wire = $wire;
        $this->button = $button;
    }


    public function getPower()
    {
        return $this->power;
    }

    public function getWire()
    {
        return $this->wire;
    }

    public function getButton()
    {
        return $this->button;
    }

}

$myLawn_mower = new Lawn_mover();//создаем объект
$myLawn_mower->setValue('Средняя', 220, 'on/off' );

echo "Мощность - " . $myLawn_mower->getPower();
echo "<br>";
echo "Провод - " . $myLawn_mower->getWire();
echo "<br>";
echo "Кнопка - " . $myLawn_mower->getButton();
?>