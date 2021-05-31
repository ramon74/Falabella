<?php
/*
	* Autor:	Ramoón Abelardo Espinoza Godoy
	* e-Mail:	ramon74@gmail.com
	* Fecha:	31-05-2021
	* Time: 	17:00 PM 
	* Titulo:	Challenge – Backend Developer - Falabella
*/
$inicio = 1;																			// Inicialización del rango de números
$fin = 100;
$div = array("Falabella", "IT", "Integraciones");										// Arreglo contenedor de casos de estudio
for ($i=$inicio;$i<=$fin;++$i)
{
	$salida = $i;																		// Variable a ser impresa
	if ((($i % 3) == 0)||(($i % 5) == 0))												// En caso de ser múltiplo de 3 o de 5, cambia el valor a ser impreso según lo indique el caso de estudio
		$salida = $div[intval($i % 5 == 0) + intval($i % 3 == 0 && $i % 5 == 0)];		// La expresión lógico-aritmtica devuelve 0 si es múltiplo de 3, 1 si es múltiplo de 5 y 2 si es múltiplo de ambos 
	echo $i . ".- " . $salida ."<br>";											
}
?>
