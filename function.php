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

<?php

function load_banner_data() {
    $path = "data/banner.json";
    if (!file_exists($path)) {
        return null;
    }

    $json = file_get_contents($path);
    return json_decode($json, true);
}

function render_banners() {
    $data = load_banner_data();
    if (!$data) return;

    foreach ($data["text_banner"] as $img => $info) {
        echo '
        <div class="slide fade" onclick="window.location.href=\'' . $info["url"] . '\'">
            <img src="img/banners/' . $img . '">
            <div class="slide-text">' . $info["text"] . '</div>
        </div>';
    }
}

?>