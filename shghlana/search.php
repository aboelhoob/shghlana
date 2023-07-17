<?php

// الاتصال بقاعدة البيانات
$servername = "localhost";  // اسم خادم قاعدة البيانات
$username = "root";
$password = "";
$dbname ="job";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// استعلام البحث
$jobTitle = $_POST['jobTitle']; // قم بتعديل الاسم وفقًا لحقل عنوان الوظيفة في النموذج
$location = $_POST['location']; // قم بتعديل الاسم وفقًا لحقل الموقع في النموذج

$sql = "SELECT * FROM jobs WHERE job_title LIKE '%$jobTitle%' AND location LIKE '%$location%'";
$result = mysqli_query($conn, $sql);

// عرض النتائج
if (mysqli_num_rows($result) > 0) {
    // عرض النتائج في صورة جدول أو قائمة
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>عنوان الوظيفة: " . $row['job_title'] . "</p>";
        echo "<p>الموقع: " . $row['location'] . "</p>";
        // يمكنك عرض المزيد من المعلومات الأخرى حسب الحاجة
        echo "<hr>";
    }
} else {
    echo "<p>لم يتم العثور على نتائج</p>";
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>