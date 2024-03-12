<?php

class ZangeresModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getZangeressen() {
        $query = "SELECT * FROM zangeres ORDER BY `Nettowaarde (miljoen)` DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
