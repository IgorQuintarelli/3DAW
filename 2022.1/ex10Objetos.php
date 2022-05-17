<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
//declaração de classe
class Disciplina {
    //atributos
	public $nome;
	public $sigla;
	public $carga;
    //construtor
	public function __construct($nome,$sigla,$carga) {
		$this->nome = $nome;
		$this->sigla = $sigla;
		$this->carga = $carga;
	}
    //método
	public function getDisc() {
		var_dump($this->nome);
		return "nome da disciplina: " . $this->nome . 
			", sigla da disciplina: " . $this->sigla . 
			", carga horária da disciplina: " . $this->carga;
	}
}
$objDisciplina = new Disciplina("Desenvolvimento Web","3DAW","80");
echo $objDisciplina -> getDisc();
echo "<br>";

$objDisciplina2 = new Disciplina("Algebra linear", "3alg","40");
echo $objDisciplina2->getDisc();
echo "<br>";

$objDisciplina3 = new Disciplina("Redes", "3RSD","40");
echo $objDisciplina3->getDisc();
echo "<br>";

?>
</body>
</html>