<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll($table) {
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql); //ЗАПРОС SELECT
        $statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($table, $data) {
        $keys = implode(",", array_keys($data));
        $tags = ":" . implode(":,", array_keys($data));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
        //dd($statement);
    }

    public function getOne($table, $id) {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "id" => $id,
        ]);
        $post=$statement->fetchAll(PDO::FETCH_ASSOC)[0];
        return $post;
    }

    public function update($title, $data, $id){
        $keys = implode(',', array_keys($data));
        $string = "";
        foreach ($keys as $key);{
            $string .= $key. "#1" .$key. ",";
        }

        $data = rtrin($string, ",");
        $data['id']=$id;
    }
}

