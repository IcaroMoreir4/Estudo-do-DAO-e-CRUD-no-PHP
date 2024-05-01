<?php

class CarroDAO{

    public function create (Carro $carro){
        $sql = 'INSERT INTO carro (modelo, cor, ano, fabricante) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $carro->getModelo());
        $stmt->bindValue(2, $carro->getCor());
        $stmt->bindValue(3, $carro->getAno());
        $stmt->bindValue(4, $carro->getFabricante());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM carro';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    

    public function update(Carro $carro) {
        $sql = 'UPDATE carro SET modelo = ?, cor = ?, ano = ?, fabricante = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $carro->getModelo());
        $stmt->bindValue(2, $carro->getCor());
        $stmt->bindValue(3, $carro->getAno());
        $stmt->bindValue(4, $carro->getFabricante());
        $stmt->bindValue(5, $carro->getId());
    
        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM carro WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}

?>