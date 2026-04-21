<?php

class QNA {

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

    public function renderAccordionItems() {
        $items = $this->getAll();
        $html = '';
        foreach ($items as $item) {
            $html .= '<div class="accordion">';
            $html .= '<div class="question">' . htmlspecialchars($item['otazka']) . '</div>';
            $html .= '<div class="answer">' . htmlspecialchars($item['odpoved']) . '</div>';
            $html .= '</div>';
        }
        return $html;
    }
}

function renderAccordionItems() {
    $qnaModel = new QnA("data/qna.json");
    $items = $qnaModel->getAll();
    $html = '';
    foreach ($items as $item) {
        $html .= '<div class="accordion qna">';
        $html .= '<div class="question">' . htmlspecialchars($item['otazka']) . '</div>';
        $html .= '<div class="answer">' . htmlspecialchars($item['odpoved']) . '</div>';
        $html .= '</div>';
    }
    echo $html;
}
