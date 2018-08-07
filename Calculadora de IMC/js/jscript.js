// Declare the function used in the button
function getInfo() {
	// Store all users in an array
	var users = [];
		// Start the loop to get information from one to three users
		for(let i = 1; i <= (btnCount+1); i++){
				// Object user
				let user = {
					name:document.getElementById("name"+i).value,
					date:document.getElementById("date"+i).value,
					gender:document.getElementById("gender"+i).value,
					weight:document.getElementById("weight"+i).value,
					height:document.getElementById("height"+i).value
				};
			// Adds the new created user in the end of the array
			users.push(user);
		}
		// Show the results after reading all the infos
		writeResult(users);
}

// user array.splice(index,qtd) not necessary because the array is reseting inside function
function writeResult(users){
var imcAvg = 0;
	// Stores every single attribute to show later
	// Can use "for (let user of users) {...}"
	for(let i = 0; i < users.length; i++) {
		var name = users[i].name;
		// Transforms into type Date or can .split("-") the string
		var dateD = new Date(users[i].date);
		// Formats because just returning this is bugged, with toLocaleString() because of timezone
		var date = dateD.getUTCDate()+"/"+ (dateD.getUTCMonth()+1)+"/"+ dateD.getUTCFullYear();
		var gender = users[i].gender;
		// var gender = (gender == "male") ? "Masculino" : (gender == "female") ? "Femino" : "";
		var weight = users[i].weight;
		var height = users[i].height;
		var imc = weight / Math.pow(height, 2);
		// Rounded with two numbers after the comma
		imc = Math.round(imc * 100) / 100;
		// Increments imc avarage to divide by quantity later
		imcAvg += imc;
		// Create a function for this code to not need to rewrite?
		var category =	(imc < 18.5) ? "Abaixo do peso" :
						(imc <= 24.9) ? "Peso normal" :
						(imc <= 29.9) ? "Sobrepeso" :
						(imc <= 34.9) ? "Obesidade Grau I" :
						(imc <= 39.9) ? "Obesidade Grau II" : "Obesidade Grau III";
		// Exhibition
		var result = "<b>"+ name +"</b>: Indivíduo <b>"+ gender +"</b> nascido em <b>"+ date+"</b>";
		result += "<br>Seu imc é <b>"+ imc +"</b> e você está na categoria <b>"+ category+"</b>";
		result += "<br>Resultado obtido a partir do peso <b>"+ weight +"</b> e da altura <b>"+ height+"</b><br><br>";
		document.getElementById("user"+(i+1)).innerHTML = result;
	}
	imcAvg /= users.length;
	imcAvg = Math.round(imcAvg * 100) / 100;
	var categoryAvg =	(imcAvg < 18.5) ? "Abaixo do peso" :
						(imcAvg <= 24.9) ? "Peso normal" :
						(imcAvg <= 29.9) ? "Sobrepeso" :
						(imcAvg <= 34.9) ? "Obesidade Grau I" :
						(imcAvg <= 39.9) ? "Obesidade Grau II" : "Obesidade Grau III";
	result = "A média de imc dos internautas é <b>"+imcAvg+"</b> e corresponde à <b>"+categoryAvg+"</b>";
	document.getElementById("avgResult").innerHTML = result;
}

var btnCount = 0;
var btnAdd = document.getElementsByClassName("btnAddDiv");
var userDivs = document.getElementsByClassName("user");
function unhideDiv(){
	if(btnCount === 0) {
		userDivs[1].removeAttribute("hidden");
		btnAdd[0].setAttribute("hidden","");
		btnAdd[1].removeAttribute("hidden");
		btnCount++;
//setar required pode ser usado loop com getelementbyid("div").children ou byblass()
		document.getElementById("name2").setAttribute("required", "");
		document.getElementById("date2").setAttribute("required", "");
		document.getElementById("gender2").setAttribute("required", "");
		document.getElementById("weight2").setAttribute("required", "");
		document.getElementById("height2").setAttribute("required", "");
	} else {
		userDivs[2].removeAttribute("hidden");
		btnAdd[1].setAttribute("hidden","");
		btnCount++;
		document.getElementById("name3").setAttribute("required", "");
		document.getElementById("date3").setAttribute("required", "");
		document.getElementById("gender3").setAttribute("required", "");
		document.getElementById("weight3").setAttribute("required", "");
		document.getElementById("height3").setAttribute("required", "");
	}
}