# NodeJS
O tutorial que eu segui foi sobre como levantar um servidor local usando NodeJS. Desde a instalação ao arquivo pronto para execução.

Ele indica baixar o Node pelo link https://nodejs.org/en/download. Outro modo de instalar ele é pelo Sublime Text 3 utilizando o Package Control. Basta abrir o Sublime, segurar as teclas ctrl + shift + p, e escolher a opção Install Package Control.

![packageControl](https://lh6.googleusercontent.com/0BNBo9vpB1ToUBc-0VfJoV2xZLF5iaes0JVQkPjYYAS-ZR1mtBHZN76gqZ9EOQN5IOGyRhENjY_jIcEBJQfjSEnCUefBhzyxSnQTbym2qL1wfhbsVSQO-Do-oFFp6cnmF0R8l2roPjz5w2A5ug)

Após isso, escolher a opção “Package Control: Install package” e procurar pelo NodeJS.

O tutorial indica criar um arquivo com a extensão “.js” e dentro dele escrever o seguinte:

![demonstracao1](https://lh5.googleusercontent.com/vNZoSyhUJTpw9o6H7NZRngjiT8K3ukrydb4DDZcIyhkFVujIWpqDQHfR5OSNlYH4kaEBTfxKXwx8k3N2CNEWSKHZPByBzS4HbecyEIBA6OMGyagTL1fdbXf6THtUBI9-r-4pkdU7EfD9k9kn9A)

1ª linha: É criada uma variável que requisita o http.

2ª linha: Variável para armazenar o número da porta que será utilizado.

3ª linha: Variável que define o url do server que será local.

4ª linha: Cria uma constante utilizando a função createServer(requisição, resposta) que imprime uma mensagem no console, e depois exibe uma mensagem na tela.

Após isso o server.listen fica esperando uma conexão no IP e porta especificados.

Depois de tudo pronto, podemos executar o comando “node nomedoarquivo.js” no terminal e o servidor já está funcionando. Para acessar é só escrever no navegador o ip e a porta definidos no arquivo.

Agora podemos definir páginas diferentes dependendo do requisição (url digitada). Para isso modificamos a função createServer inserindo um if(req.url == '/') { res.end('Home') } para apresentar a página inicial, ou uma mensagem de erro caso tenha sido digitado alguma outra coisa no final da url como por exemplo em "http://localhost:3000/inscreve-se".

Podemos definir vários if's para as diferentes páginas da nossa aplicação ou então usar um array.

![demonstracao2](https://lh4.googleusercontent.com/SjX6fpf20RgZh2e5xGnWVIhJ-zFXRw3inb3p8xEK7Zl58aB3LMm-i9c5HZsM_fklc9m3KCaXCC868qXFU2odJkhOcJrSHYFkaGt83l5LkcIw0wxzZj52Q6IRAEjI4npDHja77CZu)

Testando...

![executando1](https://lh5.googleusercontent.com/TpPVicdGoky3UBPjXuOFZSBVmY3Z0BzCShdqhkdZv-bfkXUtf6p1DVcAedrbwbfnXNQiYMAKp3w-ka9D7FVyAyExLE5tKy6FT6QFgjk-vXPMJ-sQqHheDR5MxrHPUpWTJq9GySYa)

![executando2](https://lh3.googleusercontent.com/j8H_hAcQnGILnUXZ7gP-8-pspOL38GvbM5LnXeyMs70MwaY2h42lty_l1bhmAHNw9oYBLcJZdRTJnDQ0gQH4Xn1yJO1S-533fZy3lMgNN_ecDb37mc7fmLm_T_KSa3PB4F8LR1Jp)

Fonte: http://blog.caelum.com.br/como-criar-um-servidor-http-com-nodejs/
