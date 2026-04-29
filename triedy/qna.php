<?php

namespace App;

class QnA extends Database
{
    public function getAll(): array
    {
        return $this->loadData();
    }
}
