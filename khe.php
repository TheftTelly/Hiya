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

//2)Холодильник
class Fridge
{
    private $power;//мощность
    private $wire;//шнур для подключения к сети
    private $thermostat;//термостат

    public function setValue(string $power = 'Сильная', int $wire = 220, string $thermostat = 'Есть')
    {
        $this->power = $power;
        $this->wire = $wire;
        $this->thermostat = $thermostat;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getWire()
    {
        return $this->wire;
    }

    public function getThermostat()
    {
        return $this->thermostat;
    }
}
$myFridge = new Fridge();//создаем объект
$myFridge->setValue('Слабая', 220, 'Есть' );

echo "Мощность - " . $myFridge->getPower();
echo "<br>";
echo "Провод - " . $myFridge->getWire();
echo "<br>";
echo "Термостат - " . $myFridge->getThermostat();

//3) Тетрадь
class Notebook{
    private $sheets;//листы
    private $cover;//обложка

    public function setValue(string $sheets = 'Тонкие', string $cover = 'Цветная')
    {
        $this->sheets = $sheets;
        $this->cover = $cover;

    }

    public function getSheets()
    {
        return $this->sheets;
    }

    public function getCover()
    {
        return $this->cover;
    }
}
$myNotebook = new Notebook();//создаем объект
$myNotebook -> setValue('Тонкие', 'Синяя');

echo "Страницы - " . $myNotebook->getSheets();
echo "<br>";
echo "Обложка - " . $myNotebook->getCover();
//4)Настольная лампа
class Lamp{
    private $color;//цвет
    private $bulb;//лампочка
    private $wire;//шнур для подключения к сети

    public function setValue(string $color = 'Черный', string $bulb = 'Желтая', int $wire = 220)
    {
        $this->color = $color;
        $this->bulb = $bulb;
        $this->wire = $wire;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function getBulb()
    {
        return $this->bulb;
    }
    public function getWire()
    {
        return $this->wire;
    }


}
$myLamp = new Lamp();//создаем объект
$myLamp->setValue('Розовый', 'Желтая', 220 );


echo "Цвет лампы - " . $myLamp->getColor();
echo "<br>";
echo "Лампочка - " . $myLamp->getBulb();
echo "<br>";
echo "Провод - " . $myLamp->getWire();
//5)Ручка
class Pen{
    private $color;//цвет
    private $material;//материал
    private $ink_color;//цвет чернил

    public function setValue(string $color = 'Черный', string $material = 'Пластик', string $ink_color = 'Синий')
    {
        $this->color = $color;
        $this->material = $material;
        $this->ink_color = $ink_color;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function getMaterial()
    {
        return $this->material;
    }
    public function getInk_color()
    {
        return $this->ink_color;
    }


}
$myPen = new Pen();//создаем объект
$myPen->setValue('Розовый', 'Железо', 'Черный' );


echo "Цвет ручки - " . $myPen->getColor();
echo "<br>";
echo "Материал - " . $myPen->getMaterial();
echo "<br>";
echo "Цвет чернил - " . $myPen->getInk_color();









