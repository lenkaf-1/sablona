<?php  
include "parts/header.php"; 
include "parts/QnA.php";

$qnaModel = new QnA("data/qna.json");
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
    <link rel="stylesheet" href="/sablona/sablona/css/accordion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/sablona/sablona/js/accordion.js"></script>
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

      <?php renderAccordionItems(); ?>

    </section>

</main>

<script src="/sablona/sablona/js/accordion.js"></script>
<script src="/sablona/sablona/js/menu.js"></script>

<?php include "parts/footer.php"; ?>

</body>
</html>
