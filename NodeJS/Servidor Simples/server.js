// Executar com node server.js
const http = require('http');
const port = 3000;
const ip = 'localhost';

// Declaração de como vai ser o site e as requisições rest
// Arrow Function ES6
const server = http.createServer((req, res)=> {
	// Definição das URIs
	const responses = [];
	responses['/'] = '<h1>Home</h1>';
	responses['/inscreva-se'] = '<h1>Inscreva-se</h1>';
	responses['/local'] = '<h1>Local</h1>';
	responses['/contato'] = '<h1>Contato</h1>';
	responses['/naoExiste'] = '<h1>URL sem resposta definida!</h1>';
	res.end(responses[req.url] || responses['/naoExiste']);
})

// Levanta o server e deixa rodando um listener
server.listen(port, ip);