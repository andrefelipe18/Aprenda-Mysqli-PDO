# PDO Learning Repository

Este repositório contém alguns exemplos de uso do PDO em PHP para conexão, inserção, seleção e atualização de dados em um banco de dados.

## Pastas

- `conexao`: Contém um exemplo de como conectar ao banco de dados usando PDO.
- `inserindo_dados`: Contém exemplos de como inserir dados no banco de dados usando PDO.
- `selecionando_dados`: Contém exemplos de como selecionar dados do banco de dados usando PDO.
- `atualizando_dados`: Contém exemplos de como atualizar dados do banco de dados usando PDO.

Cada pasta possui um arquivo `index.php` com um exemplo de como realizar a operação em questão.

## Vantagens do PDO

O PDO tem uma série de vantagens em relação ao mysqli, como:

- Interface de abstração de banco de dados que permite se conectar a vários bancos de dados diferentes;
- Camada de abstração que permite que você mude de banco de dados sem precisar mudar seu código;
- Conjunto de funções mais consistente e mais fácil de lembrar do que o mysqli, tornando-o mais fácil de usar;
- Suporte a consultas preparadas, o que pode ajudar a prevenir ataques de injeção de SQL;
- Uso de parâmetros nomeados e posicionais nas consultas preparadas.

## Habilitando o PDO
Para usar o PDO em seu projeto PHP, você precisa habilitá-lo no arquivo `php.ini`. Para fazer isso, siga estes passos:

1. Abra o arquivo `php.ini`. Você pode encontrar sua localização executando o seguinte comando em seu terminal:
php -i | grep php.ini

2. Procure a seção `[PDO]` e verifique se as extensões estão habilitadas. Se não estiverem, descomente as linhas relevantes. Por exemplo:
;extension=pdo_mysql

Descomente a linha para habilitar a extensão do MySQL:
extension=pdo_mysql

3. Salve o arquivo `php.ini` e reinicie o servidor da web para que as alterações entrem em vigor.