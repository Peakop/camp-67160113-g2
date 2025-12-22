<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Workshop #HTML - FORM</title>
  <style>
    * { box-sizing: border-box; }
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
    .form-header p { margin: 4px 0 0; color: #666; }

    form { width: 100%; }

    .form-grid {
      display: grid;
      grid-template-columns: 180px 1fr;
      column-gap: 24px;
      row-gap: 14px;
      align-items: flex-start;
    }
    .label { font-weight: 600; padding-top: 8px; }
    .field { width: 100%; }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    select,
    textarea {
      width: 100%;
      padding: 8px 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    input[type="file"] { font-size: 14px; }
    textarea { min-height: 140px; resize: vertical; }

    .inline-options {
      display: flex;
      flex-wrap: wrap;
      gap: 12px 20px;
      padding-top: 6px;
    }
    .inline-options label { font-weight: 400; }

    .checkbox-row {
      grid-column: 1 / span 2;
      margin-top: 8px;
    }
    .checkbox-row label { font-weight: 500; }

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
    .btn-reset { background: #f0f0f0; }
    .btn-submit { background: #1976d2; color: #fff; }
    .btn-submit:hover { background: #125ca5; }

    .err {
      margin-top: 6px;
      color: #ef4444;
      font-size: 13px;
    }

    @media (max-width: 700px) {
      .form-card { padding: 24px 18px 28px; }
      .form-grid { grid-template-columns: 1fr; }
      .label { padding-top: 0; }
      .checkbox-row { grid-column: 1 / span 1; }
      .buttons { flex-direction: column-reverse; align-items: stretch; }
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

    <form action="{{ route('workshop.store') }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf

      <div class="form-grid">

        <div class="label">ชื่อ</div>
        <div class="field">
          <input id="firstname" type="text" name="firstname" placeholder="เช่น พรพรรณ" value="{{ old('firstname') }}">
          @error('firstname') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">สกุล</div>
        <div class="field">
          <input id="lastname" type="text" name="lastname" placeholder="เช่น พุฒเถื่อน" value="{{ old('lastname') }}">
          @error('lastname') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">วัน/เดือน/ปีเกิด</div>
        <div class="field">
          <input id="birthdate" type="date" name="birthdate" value="{{ old('birthdate') }}">
          @error('birthdate') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">อายุ</div>
        <div class="field">
          <input id="age" type="number" name="age" min="0" placeholder="เช่น 20" value="{{ old('age') }}">
          @error('age') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">เพศ</div>
        <div class="field inline-options">
          <label><input type="radio" name="gender" value="male" {{ old('gender')=='male'?'checked':'' }}> ชาย</label>
          <label><input type="radio" name="gender" value="female" {{ old('gender')=='female'?'checked':'' }}> หญิง</label>
          <label><input type="radio" name="gender" value="other" {{ old('gender')=='other'?'checked':'' }}> อื่น ๆ</label>
          @error('gender') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">รูป</div>
        <div class="field">
          <input id="photo" type="file" name="photo" accept="image/*">
          <div style="font-size:12px;color:#666;margin-top:6px;">* หมายเหตุ: ยังไม่ต้อง upload ไฟล์</div>
        </div>

        <div class="label">ที่อยู่</div>
        <div class="field">
          <textarea id="address" name="address" placeholder="บ้านเลขที่ / หมู่บ้าน / ถนน / เขต / จังหวัด / รหัสไปรษณีย์">{{ old('address') }}</textarea>
          @error('address') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">สีที่ชอบ</div>
        <div class="field">
          <select id="favorite_color" name="favorite_color">
            <option value="">เลือกสี</option>
            <option value="red" {{ old('favorite_color')=='red'?'selected':'' }}>สีแดง</option>
            <option value="blue" {{ old('favorite_color')=='blue'?'selected':'' }}>สีน้ำเงิน</option>
            <option value="green" {{ old('favorite_color')=='green'?'selected':'' }}>สีเขียว</option>
            <option value="yellow" {{ old('favorite_color')=='yellow'?'selected':'' }}>สีเหลือง</option>
            <option value="pink" {{ old('favorite_color')=='pink'?'selected':'' }}>สีชมพู</option>
            <option value="black" {{ old('favorite_color')=='black'?'selected':'' }}>สีดำ</option>
          </select>
          @error('favorite_color') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="label">แนวเพลงที่ชอบ</div>
        <div class="field inline-options">
          <label><input type="radio" name="music" value="เพื่อชีวิต" {{ old('music')=='เพื่อชีวิต'?'checked':'' }}> เพื่อชีวิต</label>
          <label><input type="radio" name="music" value="ลูกทุ่ง" {{ old('music')=='ลูกทุ่ง'?'checked':'' }}> ลูกทุ่ง</label>
          <label><input type="radio" name="music" value="pop" {{ old('music')=='pop'?'checked':'' }}> ป๊อป</label>
          <label><input type="radio" name="music" value="rock" {{ old('music')=='rock'?'checked':'' }}> ร็อค</label>
          <label><input type="radio" name="music" value="อื่นๆ" {{ old('music')=='อื่นๆ'?'checked':'' }}> อื่น ๆ</label>
          @error('music') <div class="err">{{ $message }}</div> @enderror
        </div>

        <div class="checkbox-row">
          <label>
            <input id="consent" type="checkbox" name="consent" value="1" {{ old('consent') ? 'checked' : '' }}>
            ยินยอมให้เก็บและใช้ข้อมูลตามวัตถุประสงค์ของแบบฟอร์มนี้
          </label>
          @error('consent') <div class="err">{{ $message }}</div> @enderror
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
