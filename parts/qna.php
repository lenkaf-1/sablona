<?php

class QnA {

    private $jsonPath;

    public function __construct($jsonPath) {
        $this->jsonPath = $jsonPath;
    }

    public function getAll() {
        if (!file_exists($this->jsonPath)) {
            return [];
        }

        $json = file_get_contents($this->jsonPath);
        return json_decode($json, true);
    }

    /*
    public function insert($otazka, $odpoved) {
        $data = $this->getAll();
        $data[] = [
            "otazka" => $otazka,
            "odpoved" => $odpoved
        ];
        file_put_contents($this->jsonPath, json_encode($data, JSON_PRETTY_PRINT));
    }
    */
}
