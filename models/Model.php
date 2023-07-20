<?php

namespace App\Models;

use App\Core\Db;

class Model extends Db
{
    protected $table;

    private $db;

    public function checkImage($image)
    {
        $extensions = ["image/jpeg"];

        if(isset($image) && !isset($image["error"])){
            $fileInfo = pathinfo($image["name"]);
            if($image["size"] < 200000){
                if(in_array($image["type"], $extensions)){
                    move_uploaded_file($image["tmp_name"], ROOT."/uploads/".$fileInfo);
                    return ROOT."/uploads/".$fileInfo;
                } else {
                    echo "Déplacement impossible";
                }
            } else {
                echo "Fichier trop volumineux";
            }
        } else {
            echo "Une erreur est survenue lors de l'envoi du fichier";
        }
    }

    public function findAll()
    {
        $query = $this->request('SELECT * FROM '. $this->table);
        return $query->fetchAll();
    }

    public function request(string $sql, array $attributs = null)
    {
        $this->db = Db::getInstance();

        if($attributs !== null){
            // Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            // Requête simple
            return $this->db->query($sql);
        }
    }
}