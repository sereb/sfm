<?php
#классы
class Pets {
	# private - модификатор (вместо var) только внутри своего класса
	# protected - может использоваться внутри класса и в классах наследниках, но не может использоваться в объекте
	# public - может использоваться и в классах и в объектах
	# static - можем вызвать данную переменную без создания объекта
	public static $havesoul = true; # у всех есть душа)
	var $havelegs = true;
	var $havehead = true;
}
class cat extends Pets { # является наследником класса Pets
	
	function cat() {	//конструктор класса - метод с таким же именем класс
		echo ''; 	//вызывается автоматически при создании объекта
	}					# задавать его не обязательно. !можно передать параметр!
	function __construct() {	# еще вариант задания конструктора
		echo '';
	}
	
	var $name; // инициализируем переменные класса
	var $age;
	var $color;
	function addparams($a,$n,$c) { // метод класса
		$this->age=$a; // по аналогии, для доступа к методам класса внутри класса
		$this->name=$n; // можно обращаться через $this
		$this->color=$c; // напр: $this-> rasskaz()
	}
	function rasskaz() {
		$t='';
		if ($this->havelegs) {$t='Он может ходить (теоретически).';}
		$t = 'Моему коту '.$this->age.' года. Его зовут '.$this->name.', цвет '.$this->color.'. '.$t.'<br/>';
		return $t;
	}
	
}
$newCat = new cat(); # создаем объект
$newCat->addparams(42,'Боря','синий'); # передаем параметры в него через его метод(функцию)
echo $newCat->rasskaz(); # выводим ррассказ про объект класса
if (Pets::$havesoul==true) {echo 'У всех есть душа)<br/>';} # обращемся к переменной static без создания Pets





#for
for ($i=0; $i<=10; $i++) { #инициирующее значение, условие выполнение, действие после выполнения
	echo $i;
}


#while
echo '<br/>';$i=0;
while ($i<=10) {	# условие выполнения
	echo $i;$i++;	# действие
}
echo '<br/><br/><br/>';

#foreach & array

# одномерный индексный
$animals = array('dog','cat','turtle'); 

# одномерный ассоциативный
$names = array('Fillip'=>'Kirkorov','Alla'=>'Pugacheva');
# или можно так:
# $names['Fillip'] = 'Kirkorov';
# $names['Alla'] = 'Pugacheva';

// двумерный массив
$m = array('Европа','Азия','Африка','Америка','Австралия и Океания'); 
// массив с названиями Стран
$s = array('Россия','Украина','Беларусь','Казахстан'); 
// массив с названиями Столиц 
$с = array('Москва','Киев','Минск','Астана'); 
// создаём двумерный массив География 
$geography = array($m, $s, $с);

#цикл foreach
foreach ($animals as $key => $val) {
	echo $key.' => '.$val.'<br/>';
}

echo '<br/>'.$animals[0];

echo '<pre>';
print_r($animals);
echo '</pre>';

echo '<pre>';
print_r($names);
echo '</pre><br/>';

echo '<pre>';
print_r($geography);
echo '</pre>';

# функции
function sum($a,$b) {
	for ($i=$a+1;$i<=$b;$i++){
		$v1=$a;
		$v2=$b;
		$a=$a+$i;
	}
	return $a;
}
$v1=1; $v2=100;
echo 'Сумма чисел от '.$v1.' до ' .$v2.' равна '.sum ($v1,$v2);






















































?>