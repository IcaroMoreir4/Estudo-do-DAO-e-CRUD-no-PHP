### Exercício PHP com DAO e CRUD

#### Sobre o Projeto

Este repositório contém um exercício prático realizado em sala de aula, focado no desenvolvimento backend com PHP. O objetivo foi aplicar os conceitos de DAO (Data Access Object) e operações CRUD (Create, Read, Update, Delete) para gerenciar dados de carros em uma base de dados MySQL.

#### Estrutura dos Arquivos

O projeto é composto pelos seguintes arquivos PHP:

- `Carro.php`: Define a classe `Carro` com propriedades como modelo, cor, ano, fabricante e id, além dos métodos getters e setters correspondentes.
- `CarroDAO.php`: Contém a classe `CarroDAO` que realiza as operações CRUD na base de dados para a entidade `Carro`.
- `Conexao.php`: Define a classe `Conexao`, responsável por estabelecer e manter a conexão com o banco de dados usando o padrão Singleton.
- `index.php`: Arquivo de entrada que demonstra a criação de um objeto `Carro` e exibe suas propriedades.

#### Configuração

Para rodar o projeto, é necessário ter um servidor PHP e um banco de dados MySQL configurados. Siga os passos abaixo para configurar e executar o projeto:

1. **Configurar o Banco de Dados:**
   - Crie um banco de dados MySQL chamado `carros`.
   - Execute o seguinte comando SQL para criar a tabela necessária:
     ```sql
     CREATE TABLE carro (
       id INT AUTO_INCREMENT PRIMARY KEY,
       modelo VARCHAR(50),
       cor VARCHAR(30),
       ano INT,
       fabricante VARCHAR(50)
     );
     ```
   - Altere as credenciais de acesso ao banco de dados no arquivo `Conexao.php` conforme necessário.

2. **Instalação:**
   - Clone o repositório em seu servidor local ou ambiente de desenvolvimento.
   - Garanta que o servidor PHP e o MySQL estão em execução.

3. **Execução:**
   - Acesse `index.php` através do seu navegador ou utilizando um cliente HTTP para ver a execução do script.

#### Contribuições

Contribuições para o projeto são bem-vindas. Para contribuir:

1. Faça um fork do projeto.
2. Crie uma nova branch para suas modificações (`git checkout -b feature/novaFeature`).
3. Faça commit das suas alterações (`git commit -am 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin feature/novaFeature`).
5. Abra um Pull Request.
