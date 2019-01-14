<?php
	function validate_cars(){
		$error=array();
		$valido = true;
		$filtro = array(
			'marca' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{2,15}$/')
			),

			'modelo' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{2,15}$/')
			),

			'fabricante' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{2,15}$/')
			),

			'matricula' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/([0-9]{4}[A-Z]{3})/')
			),

			'color' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{2,15}$/')
			),

			'puertas' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([0-9]){1}$/')
			),

			'caballos' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([0-9]){2,3}$/')
			),

			'marchas' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([0-9]){1}$/')
			),

			'velocidad' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([0-9]){2,3}$/')
			),

			'motor' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[a-zA-Z0-9\\s]+$/')
			),
			
			'date_fabric' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options' => array('regexp' => '/\d{2}.\d{2}.\d{4}$/')
			)
		);

	$resultado=filter_input_array(INPUT_POST,$filtro);

	if (($resultado!=null) && ($resultado)) {

		if(!$resultado['marca']){
			$error['marca']='La Marca debe tener de 2 a 15 caracteres';
			$valido = false;
		}
		if(!$resultado['modelo']){
			$error['modelo']='El Modelo debe tener de 2 a 15 caracteres';
			$valido = false;
		}
		if(!$resultado['fabricante']){
			$error['fabricante']='El fabricante debe tener de 2 a 15 caracteres';
			$valido = false;
		}
		if(!$resultado['matricula']){
			$error['matricula']='La matricula debe tener 4 numeros y 3 letras';
			$valido = false;
		}
		if(!$resultado['color']){
			$error['color']='El color debe tener de 2 a 15 caracteres';
			$valido = false;
		}
		if(!$resultado['puertas']){
			$error['puertas']='Las puertas deben tener un 1 caracter';
			$valido = false;
		}
		if(!$resultado['caballos']){
			$error['caballos']='Los caballos deben tener de 2 a 4 caracteres';
			$valido = false;
		}
		if(!$resultado['marchas']){
			$error['marchas']='Las marchas deben tener un 1 caracter';
			$valido = false;
		}
		if(!$resultado['velocidad']){
			$error['velocidad']='La velocidad maxima debe tener de 3 caracteres';
			$valido = false;
		}
		if(!$resultado['motor']){
			$error['motor']='El motor debe tener de 2 a 15 caracteres';
			$valido = false;
		}
		if(!$resultado['date_fabric']){
			$error['date_fabric']='Formato fecha dd/mm/yy';
			$valido = false;
		}
	}else{
			$valido=false;
		};

		return $return = array('resultado' => $valido,
															 'error' => $error,
															 'datos' => $resultado);
	}

// 	function validatemail($email){
// 		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// 		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
// 			if(filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
// 				return $email;
// 			}
// 		}
// 		return false;
// }
  //
	// function debug($array){
	// 	echo "<pre>";
	// 	print_r($array);
	// 	echo "</pre><br>";
	// }
