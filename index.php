<?php

require_once 'Carro.php';
require_once 'CarroDAO.php';
require_once 'Conexao.php';

// Instancia o objeto DAO para acessar os métodos CRUD
$carroDao = new CarroDAO();

echo "<h1>Testando operações CRUD</h1>";

// 1. CREATE - Criando e inserindo um novo carro
echo "<h2>1. Criar um novo carro</h2>";
$c1 = new Carro('Corolla', 'Branco', 2024, 'Toyota');
$carroDao->create($c1);
echo "Carro criado com sucesso: Corolla Branco 2024 Toyota<br>";

// 2. READ - Lendo todos os carros disponíveis
echo "<h2>2. Ler todos os carros</h2>";
$carros = $carroDao->read();
echo "<pre>"; print_r($carros); echo "</pre>";

// Simulando a obtenção de um ID existente para atualizar e deletar
$ultimoCarro = end($carros);  // Pegando o último carro adicionado para exemplo
$ultimoCarroId = $ultimoCarro['id'];

// 3. UPDATE - Atualizando o último carro inserido
echo "<h2>3. Atualizar o último carro inserido</h2>";
$c1->setId($ultimoCarroId);
$c1->setModelo('Corolla');
$c1->setCor('Preto');
$c1->setAno(2025);
$c1->setFabricante('Toyota');
$carroDao->update($c1);
echo "Carro atualizado com sucesso: Corolla Preto 2025 Toyota<br>";

// 4. READ Again - Lendo todos os carros após atualização
echo "<h2>4. Ler todos os carros após atualização</h2>";
$carros = $carroDao->read();
echo "<pre>"; print_r($carros); echo "</pre>";

// 5. DELETE - Deletando o último carro atualizado
echo "<h2>5. Deletar o último carro atualizado</h2>";
$carroDao->delete($ultimoCarroId);
echo "Carro deletado com sucesso: ID $ultimoCarroId<br>";

// 6. READ Final - Lendo todos os carros após deletar
echo "<h2>6. Ler todos os carros após deletar</h2>";
$carros = $carroDao->read();
echo "<pre>"; print_r($carros); echo "</pre>";

?>
