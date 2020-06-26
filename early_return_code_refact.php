function  calculaBonus($salario) : double {
	if (is_null($salario)) {
		return 0.0;
	}

	if ($salario <= 2000) {
		return $salario * 0.1;
	}

	if ($salario > 2000 && $salario <= 4000) {
		return $salario * 0.2;
	}
	
	return $salario * 0.25;
}
