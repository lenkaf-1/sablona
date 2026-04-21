<?php  
include "parts/header.php"; 
include "parts/QnA.php";

$jsonPath = "data/qna.json";

$qnaModel = new QnA($jsonPath);

$qna = $qnaModel->getAll();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>

    <link rel="stylesheet" href="/sablona/sablona/css/style.css">
    <link rel="stylesheet" href="/sablona/sablona/css/portfolio.css">
    <link rel="stylesheet" href="/sablona/sablona/css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <main>

    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>

    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>
            Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui.
          </em></strong></p>
        </div>
      </div>
    </section>

    <section class="container">

      <?php foreach ($qna as $item): ?>
        <div class="accordion">
          <div class="question"><?= htmlspecialchars($item['otazka']) ?></div>
          <div class="answer"><?= nl2br(htmlspecialchars($item['odpoved'])) ?></div>
        </div>
      <?php endforeach; ?>

    </section>

  </main>

  <script src="js/accordion.js"></script>
  <script src="js/menu.js"></script>

  <?php include "parts/footer.php"; ?>

</body>
</html>
