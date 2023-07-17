<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شغلانه</title>
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
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #007bff;
            color: #fff;
            padding: 50px;
        }

        .jumbotron h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 20px;
        }

        /* أنماط إضافية للبحث عن عمل */
        form {
            margin-top: 50px;
        }

        form input[type="text"],
        form input[type="email"],
        form select {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form button {
            padding: 10px 20px;
            font-size: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .carousel-caption {
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
        }

        .carousel-caption h3 {
            font-size: 30px;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 18px;
        }

        .quranic-verse {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
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

<div>
    <div class="jumbotron text-center">
        <h1>بحث عن عمل</h1>
        <p>أدخل معلوماتك وابحث عن وظيفة مناسبة</p>
     <form action="search.php" method="POST">
    <div class="form-group">
        <label for="jobTitle">عنوان الوظيفة</label>
        <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="أدخل عنوان الوظيفة">
    </div>
    <div class="form-group">
        <label for="location">الموقع</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="أدخل الموقع">
    </div>
    <button type="submit" class="btn btn-primary">ابحث</button>
</form>


    </div>
</div>
  <div class="container">
        <h1>الوظائف المتاحة</h1>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "job";

        // الاتصال بقاعدة البيانات
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // التحقق من الاتصال
        if (!$conn) {
            die("فشل الاتصال: " . mysqli_connect_error());
        }

        // استعلام SQL لاستخراج الوظائف
        $sql = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $sql);

        // عرض الوظائف في بطاقات
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['job_title'] . '</h5>';
                echo '<h6 class="card-subtitle mb-2 text-muted">' . $row['company'] . '</h6>';
                echo '<p class="card-text">' . $row['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'لا توجد وظائف متاحة حاليًا.';
        }

        // إغلاق الاتصال بقاعدة البيانات
        mysqli_close($conn);
        ?>

    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
