<?php

abstract class Model 
{

    private $db;

    public function __construct()
    {
        $this->db = DB::getConn();
        $this->atributos = [];
    }


    public static function all()
    {
        $instance = new static;
        
        $marca = null;

        $sql = 'SELECT * FROM ' . $instance->getTable();
        
        if($instance->getTable() == 'modelo'){
            if(isset($_GET["id_marca"])){
                $marca = $_GET["id_marca"];
                $sql .= ' WHERE id_marca like ' . $marca;
            }
            if (isset($_GET['encontrar']) && $_GET["encontrar"] != null) {
                $encontrar = $_GET['encontrar'];
                $sql .= " AND nombre LIKE '%$encontrar%'"; 
            }
            if (isset($_GET['botonOrdenar'])) {
                $sql .= " order By nombre " . $_GET['botonOrdenar'];
            }
        } else {
            if (isset($_GET['encontrar'])) {
                $encontrar = $_GET['encontrar'];
                $sql .= " WHERE nombre LIKE '%$encontrar%'";
            }
        }
        

        if (isset($_GET['ordenar'])) {
            $sql .= " order By nombre " . $_GET['ordenar'];
        }

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

    public static function search($forenKey)
    {
        $instance = new static;

        $query = $instance->db->prepare('SELECT * FROM ' . $instance->getTable(). ' WHERE ' . $instance->getForenKey() .  ' = :forenKey');

        $query->execute([
            ':forenKey' => $forenKey
        ]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    protected abstract function getTable();

    protected function getPrimaryKey(){
        return 'id';
    }

    protected function getForenKey(){
        return '';
    }

    
}