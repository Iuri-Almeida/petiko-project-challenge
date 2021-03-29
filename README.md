<div align = "center" id = "top">

<img width="300" src="https://user-images.githubusercontent.com/60857927/112410945-d220a700-8cfa-11eb-86ba-330676127226.png">

</div>

<div align = "center">

<p>

  <a href="#descricao">Descrição</a> &#xa0; | &#xa0;
  <a href="#tecnologias">Tecnologias</a> &#xa0; | &#xa0;
  <a href="#requisitos">Requisitos</a> &#xa0; | &#xa0;
  <a href="#executando">Executando</a> &#xa0; | &#xa0;
  <a href="#prazer">Prazer</a>

</p>

</div>

<br />
<br />

<div id = "descricao">

## 📌 Descrição ##

Esse é um repositório para o desafio de desenvolvedor do processo seletivo da [Petiko][petiko] 2021.

O projeto consistia em simular um formulário de pedido com nome do cliente e endereço. Além disso, tinha o objetivo de consumir a API da [VIACEP][viacep], com o objetivo de realizar o autocomplete nos campos do formulário.

Acabei conseguindo ir além e realizei a funcionalidade extra, então a solução posta nesse repositório tem a inteligência de buscar as informações na API da [Postmon][postmon], caso não consiga na VIACEP.

</div>

<br />
<br />

<div id = "tecnologias">

## 🛠 Linguagens e ferramentas ##

Todas as linguagens e ferramentas usadas na realização dos testes:

[<img align="left" alt="HTML5" width="36px" src="https://user-images.githubusercontent.com/60857927/108612406-41873c00-73c7-11eb-8c19-ab379a124cf2.png" />][html]
[<img align="left" alt="HTML5" width="36px" src="https://user-images.githubusercontent.com/60857927/108612516-3aacf900-73c8-11eb-9c4b-7c6bdaf27d46.png" />][css]
[<img align="left" alt="JavaScript" width="36px" src="https://user-images.githubusercontent.com/60857927/108612409-464bf000-73c7-11eb-92de-b3bbd7132cbd.png" />][js]
[<img align="left" alt="Visual Studio Code" width="36px" src="https://user-images.githubusercontent.com/60857927/112410120-73a6f900-8cf9-11eb-8826-49d38988e042.png" />][php]
[<img align="left" alt="SQL" width="36px" src="https://user-images.githubusercontent.com/60857927/108612577-aee79c80-73c8-11eb-8400-5260990e647e.png" />][sql]
[<img align="left" alt="Visual Studio Code" width="36px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/visual-studio-code/visual-studio-code.png" />][vscode]
[<img align="left" alt="Laravel" width="36px" src="https://user-images.githubusercontent.com/60857927/112901871-b3842c80-90bb-11eb-80c9-2ee917bb692d.png" />][laravel]
[<img align="left" alt="Sequel Pro" width="36px" src="https://user-images.githubusercontent.com/60857927/112901903-bda62b00-90bb-11eb-9006-dfbbf7d65747.png" />][sequelpro]

</div>

<br />
<br />

<div id = "requisitos">

## ⚠️ Requisitos ##

Antes de executar esse projeto é preciso que vc tenha o [Git][git], [PHP][php] e [XAMPP][xampp] (globalmente na máquina). Após instalá-los, certifique-se que está tudo rodando com os comandos:

```bash

# Verificando a versão do Git
$ git --version
# retorno --> git version X.XX.X

# Verificando a versão do PHP
$ php --version
# retorno --> PHP X.X.XX

# Verificando se o XAMPP foi instalado de forma global
$ cd /Applications/XAMPP/xamppfiles/htdocs/
# Vc deve ser capaz de entrar nesse diretório

```

**Obs.:** O caminho do XAMPP provavelmente será diferente no [Microsoft Windows][msw] e no [GNU/Linux][gnulinux].

</div>

<br />
<br />

<div id = "executando">

## 💻 Executando ##

Para acessar esse conteúdo siga os passos abaixo.

```bash

# Vá ao diretório do XAMPP
$ cd /Applications/XAMPP/xamppfiles/htdocs/

# Clone este projeto
$ git clone https://github.com/Iuri-Almeida/petiko-project-challenge.git

# Acesse a pasta do projeto
$ cd petiko-project-challenge

# Abrir no Visual Studio Code
$ php artisan serve

# Servidor estará rodando em http://127.0.0.1:8000 por padrão.

```

</div>

<br />
<br />

<div id = "prazer">

## 👋🏻 Prazer ##

[<img style="border-radius: 50%;" align="left" alt="Iuri Almeida" width="36px" src="https://github.com/Iuri-Almeida.png" />][linkedin] &#xa0; [Iuri Almeida][linkedin]

<br />

</div>

<hr>

<div align = "center">

<a href = "#top">Voltar ai início</a>

</div>

<!-- Links -->
[petiko]: http://petiko.com.br/
[js]: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript
[html]: https://developer.mozilla.org/pt-BR/docs/Web/HTML
[css]: https://developer.mozilla.org/pt-BR/docs/Web/CSS
[php]: https://www.php.net/
[sql]: https://pt.wikipedia.org/wiki/SQL
[vscode]: https://code.visualstudio.com/
[linkedin]: https://www.linkedin.com/in/iurilopesalmeida/
[laravel]: https://laravel.com/
[sequelpro]: http://sequelpro.com/
[git]: https://git-scm.com/
[xampp]: https://www.apachefriends.org/pt_br/index.html
[msw]: https://www.microsoft.com/pt-br/windows/
[gnulinux]: https://www.gnu.org/gnu/linux-and-gnu.pt-br.html
[postmon]: https://postmon.com.br/
[viacep]: https://viacep.com.br/
