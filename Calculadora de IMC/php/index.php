<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jscript.js"></script>
<!--
*Solicite nome, data de nascimento, sexo, peso e altura de 3 usuários
*Calcular o IMC(peso/altura²)
*Informar qual categoria cada um se encontra
*Utilizar array para manipular usuários
*Tratar valores inválidos
*Desafio: usar OO (div de usuarios como objeto?)
'NOME' Indivíduo 'SEXO' Nascido em 'DATA DE NASCIMENTO'
Seu imc é 'IMC' e você está com 'CATEGORIA'
Resultado obtido a partir do peso 'PESO' e da altura 'ALTURA'
A média de imc dos internautas é 'IMC' corresponde à 'CATEGORIA'
-->
<!-- Criar botao para adicionar usuarios -->
<body>
	<!-- Body of the content (div not necessary) -->
	<div id="content">
		<h2>BMI Calculator</h2>
		<h4>Calcule o seu Índice de Massa Corpórea (Body Mass Index)</h4>
		<hr>
		<!-- Scope of all the inputs that get information from the users -->
		<div id="infos">
			<!-- Submit form without reloading the page -->
			<form action="resultado.php" method="POST">
				<div class="user">
					<input id="name1" placeholder="Nome" required name="name1">
					<!-- Test datetime-local -->
					<input type="date" id="date1" required name="date1">
					<select id="gender1" required name="gender1">
						<!-- Or disabled selected hidden -->
						<option value="" hidden>Sexo</option>
						<!-- Male -->
						<option value="masculino">Masculino</option>
						<!-- Female -->
						<option value="feminino">Feminino</option>
					</select>
					<input type="number" id="weight1" placeholder="Peso" step="any" min="1" required name="weight1">
					<input type="number" id="height1" placeholder="Altura" step="any" min="1" required name="height1">
				</div>
				
				<div class="user" hidden>
					<input id="name2" placeholder="Nome" name="name2">
					<input type="date" id="date2" name="date2">
					<select id="gender2" name="gender2">
						<option value="" hidden>Sexo</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
					<input type="number" id="weight2" placeholder="Peso" step="any" min="1" name="weight2">
					<input type="number" id="height2" placeholder="Altura" step="any" min="1" name="height2">
				</div>
				<input type="button" onclick="unhiddenDiv()" class="btnAddDiv" value="+">
				
				<div class="user" hidden>
					<input id="name3" placeholder="Nome" name="name3">
					<input type="date" id="date3" name="date3">
					<select id="gender3" name="gender3">
						<option value="" hidden>Sexo</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
					<input type="number" id="weight3" placeholder="Peso" step="any" min="1" name="weight3">
					<input type="number" id="height3" placeholder="Altura" step="any" min="1" name="height3">
				</div>
				<input type="reset" value="Limpar">
				<input type="submit" value="Calcular">
				<input type="button" onclick="unhiddenDiv()" class="btnAddDiv" value="+" hidden>
			</form>
		</div>
		<hr>
		<!-- Uses JS to show content after the button is clicked -->
		<div id="showResult">
			<div id="user1"></div>
			<div id="user2"></div>
			<div id="user3"></div>
			<div id="avgResult"></div>
		</div>
	</div>
</body>
</html>