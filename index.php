<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>استمارة التسجيل - سنتر 4U</title>
  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background-color: #f5f7fb;
      margin: 0;
      padding: 0;
    }

    .form-wrapper {
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-header {
      background: linear-gradient(to left, #4A00E0, #8E2DE2);
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
    }

    form {
      padding: 25px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
      color: #333;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    button {
      width: 100%;
      background: #4A00E0;
      color: white;
      border: none;
      padding: 12px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #3a00b2;
    }

    .footer {
      text-align: center;
      font-size: 14px;
      color: #888;
      margin-top: 20px;
      padding-bottom: 20px;
    }

    @media (max-width: 600px) {
      .form-wrapper {
        margin: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="form-wrapper">
    <div class="form-header">📘 استمارة تسجيل الطالب - سنتر 4U</div>

    <form action="submit.php" method="POST">
      <label for="studentName">اسم الطالب</label>
      <input type="text" id="studentName" name="studentName" required>

      <label for="studentPhone">رقم تليفون الطالب</label>
      <input type="tel" id="studentPhone" name="studentPhone" required>

      <label for="parentPhone">رقم تليفون ولي الأمر</label>
      <input type="tel" id="parentPhone" name="parentPhone" required>

      <label for="subjects">المواد والمدرسين</label>
      <textarea id="subjects" name="subjects" rows="4" placeholder="مثال: فيزياء - أ/ سامي، كيمياء - أ/ هالة" required></textarea>

      <button type="submit">إرسال البيانات</button>
    </form>

    <div class="footer">جميع الحقوق محفوظة © سنتر 4U</div>
  </div>

</body>
</html>
