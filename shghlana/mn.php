<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="logo.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap');

        /* تخصيص الخط واللغة */
        * {
            font-family: 'Cairo', sans-serif;
        }
         /* تخصيص الخط واللغة */
    body {
      font-family: 'Cairo', sans-serif;
    }
    
    /* تحديد موقع العناصر في النافبار */
    .navbar-brand {
      margin-right: auto;
      font-size: 26px;
    }

    .navbar-nav {
      margin-left: auto;
    }

    .nav-link {
      font-size: 18px;
    }
    .jumbotron {
      background-color: #f8f9fa;
    }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">شغلانه</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link<?php if($_SERVER['PHP_SELF'] == '/index2.php') echo ' active'; ?>" href="index2.php">تواصل معنا</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link<?php if($_SERVER['PHP_SELF'] == '/mn.php') echo ' active'; ?>" href="mn.php">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($_SERVER['PHP_SELF'] == '/index.php') echo ' active'; ?>" href="index.php">الرئيسية</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">من نحن</h1>
      <p class="lead">نحن فريق متخصص في تقديم الحلول والخدمات المهنية. نسعى لتلبية احتياجات عملائنا وتحقيق رضاهم التام. لدينا خبرة واسعة في مجالات متعددة وفريق عمل محترف يسعى لتحقيق أفضل النتائج.</p>
      <hr class="my-4">
      <p>تواصل معنا لمزيد من المعلومات والاستفسارات.</p>
      <a class="btn btn-primary btn-lg" href="index2.php" role="button">تواصل معنا</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>