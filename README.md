### MCV PHP

Projeto criado utilizando composer e padrões mcv seguindo o tutorial do canal WDEV

Anotações e estudos sobre o processo e arquitetura do projeto

Model < Controller > View

Estrutura do projeto

index.php //Autoload e chama a renderização do App
[app] //Pasta com todos os arquivos de controle, models...
[app/controller] //Pasta com todos os controladores
[app/utils] //Pasta com utilitários
app/utils/view.php //Método que pega o resource html e retorna o html modificado com as variáveis
[app/resources] //Pasta com os arquivos estáticos, html, css, javascript

Pre loads
[x] - Tailwind css
[x] - fontawsome

// Após perceber a semelhança da arquitetura como um "mini framework" decidi criar o projeto como default para projetos futuros.
Dessa forma consigo inicializar trabalhos de forma simples, para trabalhar com php nativo.