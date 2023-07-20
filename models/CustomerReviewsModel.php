<?php

namespace App\Models;

use App\Core\Db;

class CustomerReviewsModel extends Model
{
    /**
     * customer reviews table in database
     */
    public function __construct()
    {
        $this->table = "customer_review";
    }

    /**
     * @param string $username
     * @param string $note
     * @param string $comment
     * @return void
     */
    public function createReviews(string $username, string $note, string $comment)
    {
        $db = Db::getInstance();
        $sql = "INSERT INTO $this->table (
                   customer_review_username, 
                   customer_review_date,
                   customer_review_note, 
                   customer_review_text) 
        VALUES (:username, NOW(),:note, :comment)";
        $query = $db->prepare($sql);
        $query->bindValue(":username", $username);
        $query->bindValue(":note", $note);
        $query->bindValue(":comment", $comment);

        if(!$query->execute()){
            header("location:".ROOT."/home");
        } else {
            if($_SESSION["user"]["role"]){
                header("location:".ROOT."/".$_SESSION["user"]["role"]."/reviews");
            } else {
                header("location:".ROOT."/feedback");
            }
        }
    }

    /**
     * @return array|false
     */
    public function findByLimit()
    {
        $query = $this->request('SELECT * FROM '. $this->table. ' ORDER BY customer_review_date DESC LIMIT 6;');
        return $query->fetchAll();
    }

    /**
     * @param $id
     * @return void
     */
    public function deleteReview($id)
    {
        $db = Db::getInstance();

        $sql = "DELETE FROM ".$this->table." WHERE id_customer_review = ".$id.";";
        $db->query($sql);
    }
}