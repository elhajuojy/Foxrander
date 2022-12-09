<?php
namespace  core;


abstract class  Model {

    protected Database  $db =DB;

    protected string $table ;
    protected string $classname ;

    public function __construct($table)
    {
        
        $this->table =$table;
        $this->table =  trim($this->table,"Model\\");
        $this->classname = $table;
    }

    public function findAll(){
        return $this->db->query("SELECT * FROM ".$this->table)->find($this->classname);
    }

    public function findById(int $id){
            return $this->db->query("SELECT * FROM ".$this->table." WHERE id = :id",['id'=>$id])->find($this->classname);
    }

    public function removeById(int $id){
        return $this->db->query("DELETE FROM ".$this->table." WHERE id = :id",['id'=>$id]);
    }


    public function save(array $data){
        $sql = "INSERT INTO ".$this->table." (";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= $key;
            if($i < count($data)-1){
                $sql .= ",";
            }
            $i++;
        }
        $sql .= ") VALUES (";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= ":".$key;
            if($i < count($data)-1){
                $sql .= ",";
            }
            $i++;
        }
        $sql .= ")";
        
        $params = [];
        foreach ($data as $key => $value) {
            $params[":".$key] = $value; 
        }
        return $this->db->query($sql,$params);
    }


    public function update(int $id, array $data){
        $sql = "UPDATE ".$this->table." SET ";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= $key." = :".$value;  }
        }


}