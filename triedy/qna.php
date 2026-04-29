<?php

namespace App;

require __DIR__ . '/database.php';

class QnA extends Database
{
    public function getAll(): array
    {
        $data = $this->loadData();
        if (!is_array($data)) {
            throw new \Exception('Chyba: Neplatné dáta načítané z databázy.');
        }
        return $data;
    }
}
