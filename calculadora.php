<?php

class Calculadora
{
	public function somar(float|int $valor1, float|int...$valores):float|int
	{
		foreach ($valores as $valor) {
			$valor1 += $valor;
		}
		return $valor1;
	}
	public function subtrair(float|int $num1, float|int...$valores):float|int
	{
		foreach ($valores as $valor) {
			$num1 -= $valor;
		}

		return $num1;

	}

	public function dividir (float|int $v1, float|int... $valores):float|int
	{
		foreach ($valores as $valor) {
			$v1 /= $valor;
		}
		return $v1;
	}

	public function multiplicar (float|int $n1, float|int... $valores):float|int
	{
		foreach ($valores as $valor) {
			$n1 *= $valor;
		}
		return $n1;
	}
}

$calculadora = new calculadora;
$soma = $calculadora->somar(5, 2, -10);
$subtracao = $calculadora->subtrair(90, 30, -50);
$divisao = $calculadora->dividir(100, 5, 5);
$multiplicacao = $calculadora ->multiplicar(8, 2, -2);

echo ("O resultado da soma é = $soma"). PHP_EOL;
echo (" O resultado da subtração é = $subtracao") . PHP_EOL;
echo ("O resultado da divisão é = $divisao") . PHP_EOL;
echo ("O resultado da multiplicação é = $multiplicacao") . PHP_EOL;
