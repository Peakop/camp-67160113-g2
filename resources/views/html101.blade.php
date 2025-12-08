<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop #HTML - FORM</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #f5f7ff, #e3f2fd);
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 16px;
        }

        .form-card {
            width: 100%;
            max-width: 960px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            padding: 32px 40px 40px;
        }

        .form-header {
            margin-bottom: 24px;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
        }

        .form-header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
        }

        .form-header p {
            margin: 4px 0 0;
            color: #666;
        }

        form {
            width: 100%;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 180px 1fr;
            column-gap: 24px;
            row-gap: 14px;
            align-items: flex-start;
        }

        .label {
            font-weight: 600;
            padding-top: 8px;
        }

        .field {
            width: 100%;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input[type="file"] {
            font-size: 14px;
        }

        textarea {
            min-height: 140px;
            resize: vertical;
        }

        .inline-options {
            display: flex;
            flex-wrap: wrap;
            gap: 12px 20px;
            padding-top: 6px;
        }

        .inline-options label {
            font-weight: 400;
        }

        .checkbox-row {
            grid-column: 1 / span 2;
            margin-top: 8px;
        }

        .checkbox-row label {
            font-weight: 500;
        }

        .buttons {
            margin-top: 28px;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }

        .btn {
            min-width: 110px;
            padding: 8px 16px;
            border-radius: 999px;
            border: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-reset {
            background: #f0f0f0;
        }

        .btn-submit {
            background: #1976d2;
            color: #fff;
        }

        .btn-submit:hover {
            background: #125ca5;
        }

        @media (max-width: 700px) {
            .form-card {
                padding: 24px 18px 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .label {
                padding-top: 0;
            }

            .checkbox-row {
                grid-column: 1 / span 1;
            }

            .buttons {
                flex-direction: column-reverse;
                align-items: stretch;
            }
        }
    </style>
</head>
<body>

<div class="page-wrapper">
    <div class="form-card">
        <div class="form-header">
            <h1>Workshop #HTML - FORM</h1>
            <p>แบบฟอร์มสมัคร กรอกข้อมูลให้ครบถ้วน</p>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-grid">

                <div class="label">ชื่อ</div>
                <div class="field">
                    <input type="text" name="firstname" placeholder="เช่น พรพรรณ">
                </div>

                <div class="label">สกุล</div>
                <div class="field">
                    <input type="text" name="lastname" placeholder="เช่น พุฒเถื่อน">
                </div>

                <div class="label">วัน/เดือน/ปีเกิด</div>
                <div class="field">
                    <input type="date" name="birthdate">
                </div>

                <div class="label">เพศ</div>
                <div class="field inline-options">
                    <label><input type="radio" name="gender" value="male"> ชาย</label>
                    <label><input type="radio" name="gender" value="female"> หญิง</label>
                    <label><input type="radio" name="gender" value="other"> อื่น ๆ</label>
                </div>

                <div class="label">รูป</div>
                <div class="field">
                    <input type="file" name="photo">
                </div>

                <div class="label">ที่อยู่</div>
                <div class="field">
                    <textarea name="address" placeholder="บ้านเลขที่ / หมู่บ้าน / ถนน / เขต / จังหวัด / รหัสไปรษณีย์"></textarea>
                </div>

                <div class="label">สีที่ชอบ</div>
                <div class="field">
                    <select name="favorite_color">
                        <option value="">เลือกสี</option>
                        <option value="red">สีแดง</option>
                        <option value="blue">สีน้ำเงิน</option>
                        <option value="green">สีเขียว</option>
                        <option value="yellow">สีเหลือง</option>
                        <option value="pink">สีชมพู</option>
                        <option value="black">สีดำ</option>
                    </select>
                </div>

                <div class="label">แนวเพลงที่ชอบ</div>
                <div class="field inline-options">
                    <label><input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต</label>
                    <label><input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง</label>
                    <label><input type="radio" name="music" value="pop"> ป๊อป</label>
                    <label><input type="radio" name="music" value="rock"> ร็อค</label>
                    <label><input type="radio" name="music" value="อื่นๆ"> อื่น ๆ</label>
                </div>

                <div class="checkbox-row">
                    <label>
                        <input type="checkbox" name="consent">
                        ยินยอมให้เก็บและใช้ข้อมูลตามวัตถุประสงค์ของแบบฟอร์มนี้
                    </label>
                </div>

            </div>

            <div class="buttons">
                <button type="reset" class="btn btn-reset">Reset</button>
                <button type="submit" class="btn btn-submit">Submit</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
