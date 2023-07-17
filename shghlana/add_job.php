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

// استخراج البيانات من النموذج
$jobTitle = $_POST['jobTitle'];
$company = $_POST['company'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$description = $_POST['description'];

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO jobs (job_title, company, location, salary, description) 
        VALUES ('$jobTitle', '$company', '$location', '$salary', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "تمت إضافة الوظيفة بنجاح!";

} else {
    echo "حدث خطأ أثناء إضافة الوظيفة: " . mysqli_error($conn);
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>
