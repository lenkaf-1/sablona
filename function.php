<?php

function generatePortfolio() {
    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);

    if (!isset($data["portfolio"])) {
        echo "Portfolio data not found.";
        return;
    }

    $i = 1;
    foreach ($data["portfolio"] as $item) {
        echo '<div class="col-25 portfolio text-white text-center" id="portfolio-' . $i . '">';
        echo $item["title"];
        echo '</div>';
        $i++;
    }
}

?>