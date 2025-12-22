<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ผลลัพธ์ Workshop</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background:#f5f7ff; margin:0; }
    .wrap { max-width: 900px; margin: 40px auto; padding: 0 16px; }
    .card { background:#fff; border-radius:18px; padding: 28px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
    h1 { margin:0 0 10px; font-size: 28px; }
    .sub { color:#666; margin:0 0 18px; }
    table { width:100%; border-collapse: collapse; }
    td { padding: 10px 8px; border-bottom: 1px solid #eee; vertical-align: top; }
    td:first-child { width: 220px; font-weight: 600; }
    .btn { display:inline-block; margin-top: 18px; padding: 10px 16px; border-radius: 999px; text-decoration:none; background:#1976d2; color:#fff; }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>✅ ผลลัพธ์จากการส่งฟอร์ม</h1>
      <p class="sub">แสดงค่าที่รับมาจาก Workshop #HTML-FORM</p>

      <table>
        <tr><td>ชื่อ</td><td>{{ $data['firstname'] }}</td></tr>
        <tr><td>สกุล</td><td>{{ $data['lastname'] }}</td></tr>
        <tr><td>วัน/เดือน/ปีเกิด</td><td>{{ $data['birthdate'] }}</td></tr>
        <tr><td>อายุ</td><td>{{ $data['age'] }}</td></tr>
        <tr><td>เพศ</td><td>{{ $data['gender'] }}</td></tr>
        <tr><td>ที่อยู่</td><td style="white-space:pre-wrap;">{{ $data['address'] }}</td></tr>
        <tr><td>สีที่ชอบ</td><td>{{ $data['favorite_color'] }}</td></tr>
        <tr><td>แนวเพลงที่ชอบ</td><td>{{ $data['music'] }}</td></tr>
        <tr><td>ยินยอม</td><td>ยินยอม</td></tr>
      </table>

      <a class="btn" href="{{ route('workshop.index') }}">กลับไปหน้าฟอร์ม</a>
    </div>
  </div>
</body>
</html>
