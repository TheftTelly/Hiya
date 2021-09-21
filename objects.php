<?php
//1)Газонокосилка
class Lawn_mover
{
    public $power;//мощность
    public $wire;//шнур для подключения к сети
    public $button;//кнопка вкл,выкл
    public $wheels;//колеса

}
$myLawn_mower = new Lawn_mover();//создаем объект
$myLawn_mower->power = 'strong';//сильная
$myLawn_mower->wire= 220;
$myLawn_mower->button= 'turn_on/turn_off';//включить/выключить
$myLawn_mower->wheels= 'small';

public function connect()
{
    //подключение провода к сети
}
public function turn_on()
{
    //включаем газонокосилку
}
public function go()
{
//косим
}
public function turn_off()
{
//выключаем газонокосилку
}
$myLawn_mower->connect();
$myLawn_mower->turn_on();
$myLawn_mower->go();
$myLawn_mower->turn_off();

$myLawn_mower2 = new Lawn_mover();//создаем еще одну газонокосилку
$myLawn_mower = new Lawn_mover('strong', 220, 'turn_on/turn_off', 'small');//новый слепок
public function __construct($power, $wire, $button, $wheels)
{
    $this -> power = $power;
    $this -> wire = $wire;
    $this -> button = $button;
    $this -> wheels = $wheels;
}
//2)Лейка
class Watering_can{
    public $spout_with_hole;//носик с отверстием
    public $size;//размер
    public $handle;//ручка
}
$myWatering_can = new Watering_can();//создаем объект
$myWatering_can->spout_with_hole = 'round';//круглый носик
$myWatering_can->size = 'big';//размер
$myWatering_can-> handle = 'comfortable';//удобная ручка
public function pour_the_water{
    //налить воды в лейку
}
public function pour_out_the_water{
    //вылить воду
}
$myWatering_can-> pour_the_water();
$myWatering_can-> pour_out_the_water();
$myWatering_can = new Watering_can('round','big','comfortable');//новый слепок
public function __construct($spout_with_hole, $size, $handle)
{
    $this -> spout_with_hole = $spout_with_hole;
    $this -> size = $size;
    $this -> handle = $handle;
}
//3)Холодильник
class Fridge{
    public $wire;//шнур для подключения к сети
    public $thermostat;//термостат

}
$myFridge = new Fridge();//создаем объект
$myFridge->wire = 220;//вольт
$myFridge->thermostat = ' ';
public function connect()
{
    //подключение провода к сети
}
public function open{
    //открыть холодильник
}
public function close{
    //закрыть холодильник
}
$myFridge-> connect()
$myFridge-> open();
$myFridge-> close();
$myFridge = new Fridge(220,' ');//новый слепок
public function __construct($wire, $thermostat)
{
    $this -> wire = $wire;
    $this -> thermostat = $thermostat;
}
//4) Тетрадь
class Notebook{
    public $sheets;//листы
    public $cover;//обложка

}
$myNotebook = new Notebook();//создаем объект
$myNotebook->sheets ='paper';//бумажные
$myNotebook->cover = 'green';//зеленая обложка
public function open{
    //открыть тетрадь
}
public function close{
    //закрыть тетрадь
}
public function turn_over{
    //листать страницы
}
$myNotebook-> open();
$myNotebook-> close();
$myNotebook-> turn_over();
$myNotebook = new Notebook('paper','green');//новый слепок
public function __construct($sheets, $cover)
{
    $this -> sheets = $sheets;
    $this -> cover = $cover;
}
//5)Настольная лампа
class Lamp{
    public $button;//конпка вкл,выкл
    public $bulb;//лампочка
    public $wire;//шнур для подключения к сети

}
$myLamp = new Lamp();//создаем объект
$myLamp->button ='on/off';
$myLamp->bulb = 'yellow';//желтая лампочка
$myLamp->wire = 220;
public function connect()
{
    //подключение провода к сети
}
public function turn_on{
    //вкл
}
public function turn_off{
    //выкл
}
$myLamp-> connect();
$myLamp-> turn_on();
$myLamp-> turn_off();
$myLamp = new Lamp('on/off','yellow', 220);//новый слепок
public function __construct($button, $bulb, $wire)
{
    $this -> button = $button;
    $this -> bulb = $bulb;
    $this -> wire = $wire;
}
//6) Стол
class Table{
    public $material;//материал
    public $legs;//ножки
    public $table_top;//столешница
}
$myTable = new Table();//создаем объект
$myTable->material ='wood';//деревянный
$myTable->legs ='sustainable';//устойчивые
$myTable->table_top ='strong';//крепкая
public function stand()
{
    //стоять
}

$myTable-> stand();
$myTable = new Table('wood','sustainable', 'strong');//новый слепок
public function __construct($material, $legs, $table_top)
{
    $this -> material = $material;
    $this -> legs = $legs;
    $this ->table_top = $table_top;
}
//7)Музыкальная колонка
class Music_column{
    public $manufacturer;//изготовитель
    public $volume_button;//кнопка громкости
    public $power_button;//кнопка вкл,выкл
    public $speaker;//динамик
    public $wire;//провод
}
$myMusic_column = new Music_column();
$myMusic_column->manufacturer ='SVEN';
$myMusic_column->volume_button ='small';
$myMusic_column->power_button ='on/off';
$myMusic_column->speaker ='loud';//громкий
$myMusic_column->wire=220;
public function connect()
{
    //подключение провода к компьютеру
}
public function turn_on{
    //вкл
}
public function play{
    //играет музыка
}
public function turn_off{
    //выкл
}
$myMusic_column-> connect();
$myMusic_column-> turn_on();
$myMusic_column-> play();
$myMusic_column-> turn_off();
$myMusic_column = new Music_column('SVEN','small','on/off','loud', 220);//новый слепок
public function __construct($manufacturer,$volume_button, $power_button,$speaker, $wire)
{
    $this -> manufacturer = $manufacturer;
    $this -> volume_button = $volume_button;
    $this -> power_button = $power_button;
    $this -> speaker = $speaker;
    $this -> wire = $wire;
}
//8)наручные часы
class Watch{
    public $manufacturer;//изготовитель
    public $clock_face;//циферблат
    public $color;//цвет
    public $straps;//ремешки
}
$myWatch= new Watch();
$myWatch->manufacturer ='Swatch';//часы бренда "Swatch"
$myWatch->clock_face ='white';//белый циферблат
$myWatch->color ='green';//зеленого цвета
$myWatch->straps ='leather';//кожаные ремешки

public function turn_on{
    //вкл
}
public function run{
    //часы идут
}

$myWatch-> turn_on();
$myWatch-> run();
$myWatch = new Watch('Swatch','white','green','leather');//новый слепок
public function __construct($manufacturer,$clock_face, $color,$straps)
{
    $this -> manufacturer = $manufacturer;
    $this -> clock_face = $clock_face;
    $this -> color = $color;
    $this -> straps = $straps;
}
//9)Ручка
class Pen{
    public $color;//цвет
    public $material;//материал
}
$myPen= new Pen();
$myPen->color ='blue';//голубой
$myPen->material ='plastic';//пластмасса
public function write{
    //писать
}

$myPen-> write();
$myPen = new Pen('blue','plastic');//новый слепок
public function __construct($color,$material)
{
    $this -> color = $color;
    $this -> material = $materials;
}