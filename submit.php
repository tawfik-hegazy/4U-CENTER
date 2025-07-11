<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = htmlspecialchars($_POST['studentName']);
    $studentPhone = htmlspecialchars($_POST['studentPhone']);
    $parentPhone = htmlspecialchars($_POST['parentPhone']);
    $subjects = htmlspecialchars($_POST['subjects']);

    // Set your email
    $to = "your-email@example.com";
    $subject = "تسجيل جديد من الطالب: $studentName";

    $message = "
    اسم الطالب: $studentName\n
    تليفون الطالب: $studentPhone\n
    تليفون ولي الأمر: $parentPhone\n
    المواد والمدرسين:\n$subjects
    ";

    $headers = "From: "4ueducationcentre@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>✅ تم إرسال البيانات بنجاح! شكرًا لك.</h2>";
    } else {
        echo "<h2>❌ حدث خطأ أثناء إرسال البيانات.</h2>";
    }
} else {
    echo "الرجاء إرسال البيانات من النموذج.";
}
?>
