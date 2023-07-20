<?php

namespace App\Models;

use App\Core\Db;

class CustomerReviewsModel extends Model
{
    public function __construct()
    {
        $this->table = "customer_review";
    }

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
            header("location:".ROOT."/feedback");
        }
    }

    public function findByLimit()
    {
        $query = $this->requete('SELECT * FROM '. $this->table. ' ORDER BY customer_review_date DESC LIMIT 6;');
        return $query->fetchAll();
    }

    public function deleteReview($id)
    {
        $db = Db::getInstance();

        $sql = "DELETE FROM ".$this->table." WHERE id_customer_review = ".$id.";";
        $db->query($sql);
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return CustomerReviewsModel
     */
    public function setUsername(string $username): CustomerReviewsModel
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return CustomerReviewsModel
     */
    public function setDate(string $date): CustomerReviewsModel
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * @param int $note
     * @return CustomerReviewsModel
     */
    public function setNote(int $note): CustomerReviewsModel
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return CustomerReviewsModel
     */
    public function setComment(string $comment): CustomerReviewsModel
    {
        $this->comment = $comment;
        return $this;
    }


}