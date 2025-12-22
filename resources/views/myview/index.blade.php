<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop #HTML - FORM</title>
</head>
<body>

<h1>Workshop #HTML - FORM</h1>

<form action="/mycontroller" method="POST">
    @csrf

    <label for="num">ป้อนข้อมูลแม่สูตรคูณ</label><br>
    <input type="number" id="num" name="num" required>
    <br><br>

    <button type="submit">ส่งข้อมูล</button>
</form>

</body>
</html>
