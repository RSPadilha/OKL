function createNewProduct() {
	let name = document.getElementById("product").value;
	let qtd = document.getElementById("quantity").value;
	qtd = (qtd === "") ? 1 : qtd;
	let result = document.getElementById("result");

	result.innerHTML = fetch('products.json', {
		method: 'post',
		headers: {
			'Content-Type': 'application/json'
		},
		body: JSON.stringify({
			name:name, qtd:qtd
		})
	})
	.then((req) => req.json())
	.then((data) => console.log(data));
}