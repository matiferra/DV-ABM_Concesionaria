<?php

abstract class Model 
{

    protected $db;

    protected $atributos;

    public function __construct()
    {
        $this->db = DB::getConn();
        $this->atributos = [];
    }

    public static function getAll(){
        
        $instance = new static;

        $sql = 'SELECT * FROM ' . $instance->getTable();
        
        $query = $instance->db->prepare($sql);

        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_OBJ); 
    
    }


    public static function all($cuantos = 3)
    {
        $instance = new static;
        
        $marca = null;

        
        $sql = 'SELECT * FROM ' . $instance->getTable();
        
        if (isset($_GET['encontrar'])) {
            $encontrar = $_GET['encontrar'];
            $sql .= " WHERE nombre LIKE '%$encontrar%'";
        }
     
        if (isset($_GET['ordenar'])) {
            $sql .= " order By nombre " . $_GET['ordenar'];
        }

         $pagina = $_GET['pagina'] ?? 1;
 
         $desde = ($pagina - 1) * $cuantos;

         $sql .= " limit $cuantos offset $desde";

        $query = $instance->db->prepare($sql);
        
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }
    
    
    public static function find($primaryKey)
    {
        $instance = new static;

        $query = $instance->db->prepare('SELECT * FROM ' . $instance->getTable(). ' WHERE ' . $instance->getPrimaryKey() .  ' = :primaryKey');

        $query->execute([
            ':primaryKey' => $primaryKey
        ]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public static function delete($primaryKey)
    {
        $instance = new static;

        $query = $instance->db->prepare('DELETE FROM ' . $instance->getTable(). ' WHERE ' . $instance->getPrimaryKey() .  ' = :primaryKey');

        $query->execute([
            ':primaryKey' => $primaryKey
        ]);

        return $query->rowCount();;
    }

    public function insert(){

        $columnas = [];
        $valores = [];

        foreach($this->atributos as $key => $value){
            $columnas[] = $key;
            $valores[] = ":$key"; 
        }

        $columnas = implode(', ', $columnas);
        $valores = implode(', ', $valores);

        $sql = 'INSERT INTO ' . $this->getTable() . " ($columnas) VALUES ($valores)";

        $data = [];

        foreach($this->atributos as $key => $value){
            $data[":$key"] = $value;
        }

        $query = $this->db->prepare($sql);

        $query->execute($data);

    }

    public function update($primaryKey){

        $columnas = [];

        foreach($this->atributos as $key => $value){
            $columnas[] = "$key=:$key";
        }

        $columnas = implode(', ', $columnas);

        $sql = 'UPDATE ' . $this->getTable() . ' SET ' . $columnas . ' WHERE ' . $this->getPrimaryKey() . ' =  ' . $primaryKey;
        
        $data = [];

        foreach($this->atributos as $key => $value){
            $data[":$key"] = $value;
        }

        $query = $this->db->prepare($sql);

        $query->execute($data);

    }

 
    public function setAtributo($columna, $valor){

        $this->atributos[$columna] = $valor; 

    }
 
    public static function getAllCount()
    {
        $instance = new static;

        $sql = 'SELECT count(' . $instance->getPrimaryKey().') as total FROM ' . $instance->getTable();

        if (isset($_GET['encontrar'])) {
            $encontrar = $_GET['encontrar'];
            $sql .= " WHERE nombre LIKE '%$encontrar%'";
        }

        $query = $instance->db->prepare($sql);

        $query->execute();

        return $query->fetch(PDO::FETCH_NUM);
    }


    protected abstract function getTable();

    protected function getPrimaryKey(){
        return 'id';
    }

    
}