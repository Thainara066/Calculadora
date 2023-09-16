<?php

class calculadora
{
	public function somar(float|int $num1, float|int$num2):float|int
	{
		return $num1+$num2 ;
	}
	public function subtrair(float|int $num1,float|int $num2):float|int
	{
		return $num1-$num2 ;
	}
	
	public function dividir (float|int $num1, float|int $num2):float|int
	{
		return $num1/$num2 ; 
	}
	
	public function multiplicar (float|int $num1, float|int $num2):float|int
	{
		return $num1*$num2 ;
	}
}
$calculadora = new calculadora ;
$soma=$calculadora->somar(5,2.7);
$subtracao=$calculadora->subtrair(5,2.5);
$divisao=$calculadora->dividir(10,5);
$multiplicacao=$calculadora ->multiplicar(8,2);

echo $soma . PHP_EOL;
echo $subtracao . PHP_EOL;
echo $divisao . PHP_EOL;
echo $multiplicacao . PHP_EOL;
