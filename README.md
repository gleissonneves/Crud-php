# Crud


##  Mais sobre Crud

Crud é um framework de aplicação web com sintaxe expressiva e com objetivo de agilizar o desenvolvimento de novos sitemas. O Crud, como seu nome expressa são operações básicas para manipular e gerenciar dados em um banco de dados relacional, dessa forma colocamos um curativo em uma ferida facilitando e otimizando uma tarefa comum no desenvolvimento de muitos projetos da web.

## O que está incluido?
No download, você encontrará os seguintes diretórios e arquivos

<pre>
Crud/
│   
├── Config/
│   └── Mensage.php
├── Database/
│   └── Crud.php
├── autoload.php
└── LICENSE
</pre>

## Sobre a estrutura
Config - possui arquivos de configuração de ambiente como constantes de erro e sucesse além da configuraçãos com de Banco de dados.

Database - onde está localizado as operações. 

## Adicione a conexão
clone o repositório <pre> https://github.com/gdk46/ConnectDb.git </pre>

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


## Passando a conexão

<pre>
require_once '../autoload.php';

$featureDb = [
    "db_drive" => "myslq",
    "db_port" => "3306",
    "db_name" => "test",
    "db_host" => "localhost",
    "db_username" => "test",
    "db_passwd" => "1234",
    "db_charset" => "utf-8",
];

$db   = new ConnectDb\Database\Connect($featureDb); // classe de conexão com o banco de dados
$crud = new Crud\Database\Crud($db->getConnect());
</pre>

## Criando um novo registro (Crud - Create)
<pre>
/* Cria */
$_POST['nome'] = 'Nome3';

// (tabela, array);
$crudCreate = $crud->create('pessoas', $_POST);

echo $crudCreate;
</pre>


## Lendo registros (cRud - Read)
<pre>
/* Lê */
// (tabela;
$crudRead = $crud->read('pessoas');

var_dump($crudRead);
</pre>

## Atualizando registro (crUd - Upadte)
<pre>
/* Atualiza */
$_POST['nome'] = 'test dos santos neves algusto';

// (tabela, array, query);
$crudUpdate    = $crud->update('pessoas', $_POST, "id = 26");

echo $crudUpdate;
</pre>


## Deletando registro (cruD - Delete)
<pre>
require_once '../autoload.php';

$db   = new ConnectDb\Database\Connect($featureDb); // classe de conexão com o banco de dados
$crud = new Crud\Database\Crud($db->getConnect());

/* Deleta */
// pessoas(tabela, query);
$crudDelete = $crud->delete('pessoas', "id = 26");

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
