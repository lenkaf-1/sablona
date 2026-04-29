<?php

namespace App;

class Database
{
    protected $dataPath;

    public function __construct()
    {
        $configFile = __DIR__ . '/../nastavenie/database.php';

        if (!file_exists($configFile)) {
            die("Chyba: Súbor s konfiguráciou databázy nebol nájdený: {$configFile}");
        }

        $config = require $configFile;

        if (!is_array($config) || empty($config['jsonPath'])) {
            die('Chyba: Neplatná konfigurácia databázy. Skontrolujte súbor nastavenie/database.php.');
        }

        $this->dataPath = $config['jsonPath'];
    }

    protected function loadData(): array
    {
        if (!file_exists($this->dataPath)) {
            return [];
        }

        $json = file_get_contents($this->dataPath);
        $data = json_decode($json, true);

        if (!is_array($data)) {
            return [];
        }

        return $data;
    }
}
