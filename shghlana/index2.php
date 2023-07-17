<!DOCTYPE html>
<html lang="ar">
<head>
<link rel="icon" type="image/x-icon" href="logo.ico">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شغلانه</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap');

        /* تخصيص الخط واللغة */
        * {
            font-family: 'Cairo', sans-serif;
           
        }

        form {
            margin: 25px;
        }
        body{
          
        }
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


    <form method="POST">
        <div class="container mt-4">
            <h3>تواصل معنا</h3>
            <div class="form-group">
                <label for="email">ايميلك</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="name">اسمك</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="اسمك">
            </div>
            <button type="submit" class="btn btn-primary" name="send">ارسال</button>
        </div>
    </form>

    <?php
    $imageURL = 'https://images.unsplash.com/photo-1628348068343-c6a848d2b6dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80';
    $imageData = file_get_contents($imageURL);
    $filename = 'your_work_image.jpg'; // اسم الملف الذي ترغب في حفظ الصورة به
    file_put_contents($filename, $imageData);

    // استخدام الرابط المحلي للصورة في رمز PHP
    if (isset($_POST['send'])) {
        require_once 'mail.php';
       

        $mail->setFrom('onlineshghlana@gmail.com', 'شغلانه');
        $mail->addAddress($_POST['email']);
        $mail->Subject = 'اهلا بيك في مجتمعنا';
        $mail->Body =  'اهلا ' . $_POST['name'] .'<br>' .'انت دلوقتي ممكن تدور علي شغل من علي موقعنا او تكلمنا ونحطلك اعلان لشغلك او اللي انت عايزه لو مهتم سيب رقمك وسيتم الرد عليك شكرا لحضرتك';
        $mail->isHTML(true);

        if ($mail->send()) {
            echo '<div class="container mt-4"><div class="alert alert-success" role="alert">
                    تم التواصل. الرجاء التحقق من بريدك الإلكتروني للحصول على رسالتنا.
                </div></div>';
            header("Location: index.php"); // إعادة التوجيه إلى index.html
            exit;
        } else {
            echo '<div class="container mt-4"><div class="alert alert-danger" role="alert">
                    حدث خطأ أثناء إرسال البريد الإلكتروني. يرجى المحاولة مرة أخرى.
                </div></div>';
        }
    }
    ?>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
