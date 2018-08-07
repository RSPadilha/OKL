<html>
<?php
class Usuario {
	private $name;
	private $date;
	private $gender;
	private $weight;
	private $height;
	function Usuario($index) {
		$this->name = $_POST['name'.$index];
		$this->date = $_POST['date'.$index];
		$this->gender = $_POST['gender'.$index];
		$this->weight = $_POST['weight'.$index];
		$this->height = $_POST['height'.$index];
	}
	public function getIMC() {
		return round($this->weight / ($this->height ** 2),2);
	}
	public function getName() { return $this->name; }
	public function getDate() { return $this->date; }
	public function getGender() { return $this->gender; }
	public function getWeight() { return $this->weight; }
	public function getHeight() { return $this->height; }
	public function getCategory() {
		$imc = $this->getIMC();
		return	($imc < 18.5 ? "Abaixo do peso" :
				($imc <= 24.9 ? "Peso normal" :
				($imc <= 29.9 ? "Sobrepeso" :
				($imc <= 34.9 ? "Obesidade Grau I" :
				($imc <= 39.9 ? "Obesidade Grau II" : "Obesidade Grau III")))));
	}
}

function writeData($usuarios) {
		echo $usuarios->getName().": Indivíduo ".$usuarios->getGender()." nascido em ".$usuarios->getDate()
		."<br>Seu IMC é ".$usuarios->getIMC()." e você está na categoria ".$usuarios->getCategory()
		."<br>Resultado obtido a partir do peso ".$usuarios->getWeight()." e da altura ".$usuarios->getHeight()."<br><br>";
}

for ($i=1; $i <= 1; $i++) {
	// testar se botao foi pressed
	//iff dos posts
	//btncount num input hidden
		$usuarios[] = new Usuario($i);
}



// meter um value hidden pra contar se foi clicado pq no firefox n reseta no refresh
// ou n pq a pagina precisa voltar
// if($_POST['name2']!=""){
?>

<div id="user1">
<?php writeData($usuarios[0]) ?>
</div>
<div id="user2">
<?php if(isset($usuarios[1])) { writeData($usuarios[1]); } ?>
</div>
<div id="user3">
<?php if(isset($usuarios[2])) { writeData($usuarios[2]); } ?>
</div>
<div id="avgResult">
	<?php
	// echo "A média de imc dos internautas é ".$imcAVG." e corresponde à ".$categoryAVG;
	?>
</div>
<a href="./index.php">Voltar</a>
</html>