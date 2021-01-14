# Crud


##  Mais sobre Crud

Crud é um framework de aplicação web com sintaxe expressiva e com objetivo de agilizar o desenvolvimento de novos sitemas. O Crud, como seu nome expressa são operações básicas para manipular e gerenciar dados em um banco de dados relacional dessa forma colocamos um curativo em uma ferida facilitando e otimizando uma tarefa comum no desenvolvimento de muitos projetos da web.

## O que está incluido?
No download, você encontrará os seguintes diretórios e arquivos

<pre>
Crud/
│   
├── Config/
│   ├── Env.php 
│   └── Mensage.php
├── Database/
│   ├── Connect.php
│   └── Crud.php
├── autoload.php
└── LICENSE
</pre>

## Sobre a estrutura
Config - possui arquivos de configuração de ambiente como constantes de erro e sucesse além da configuraçãos com de Banco de dados.

Database - onde está localizado a conexão com o banco de dados e as operações. 

## Como utilizar?
importe os arquivos de autoload (recomendações da psr-4)
<pre>
require_once 'autoload.php';
</pre>

## Utilizando a classe
<pre>
use Crud\Database\Crud;
require_once 'autoload.php';

ou

require_once 'autoload.php';
$crud = new Crud\Database\Crud();
</pre>

## Criando um novo registro (Crud - Create)
<pre>
use Crud\Database\Crud;

require_once 'autoload.php';

$crud = new Crud();

/* Cria */
$_POST['nome'] = 'Nome1';

// create('tabela', array);
$crudCreate = $crud->create('pessoas', $_POST);

// resultado
echo $crudCreate;
</pre>


## Lendo registros (cRud - Read)
<pre>
use Crud\Database\Crud;

require_once 'autoload.php';

$crud = new Crud();

/* Lê uma tabela específica*/
// read('tabela');
$crudRead = $crud->read('pessoas');

// resultado
var_dump($crudRead);
</pre>

## Lendo registro (crUd - Upadte)
<pre>
use Crud\Database\Crud;

require_once 'autoload.php';

$crud = new Crud();

/* Atualiza */
$_POST['nome'] = 'test2';

// update('tabela', query);
$crudUpdate    = $crud->update('pessoas', $_POST, "id = 1");

// resultado
echo $crudUpdate;
</pre>


## Deletando registro (cruD - Delete)
<pre>
use Crud\Database\Crud;

require_once 'autoload.php';

$crud = new Crud();

/* Deleta */
// pessoas('tabela', query);
$crudDelete = $crud->delete('pessoas', "id = 1");

// resultado
echo $crudDelete;
</pre>

## Bugs e solicitações de recursos
Tem um bug ou uma solicitação de recurso? Leia primeiro as diretrizes do problema e pesquise os problemas existentes e encerrados. Se o seu problema ou ideia ainda não foi resolvido, abra um novo problema.


## Contribuindo
Por favor, leia nossas diretrizes de contribuição. Estão incluídas instruções para abrir questões, padrões de codificação e notas sobre o desenvolvimento.

As preferências do editor estão disponíveis na configuração do editor para facilitar o uso em editores de texto comuns. Leia mais e baixe os plug-ins em https://editorconfig.org/.

## Criador
#### Gleisson Neves
  * https://github.com/gdk46


## License/Licença do Projeto #
[MIT License](https://github.com/gdk46/Crud/LICENSE) © [Gleisson Neves](https://github.com/gdk46)
