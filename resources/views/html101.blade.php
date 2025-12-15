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

    /* ==== Validation UI ==== */
    .error-input {
      border-color: #ef4444 !important;
      outline: 2px solid rgba(239, 68, 68, 0.15);
    }
    .error-group {
      outline: 2px solid rgba(239, 68, 68, 0.25);
      border-radius: 10px;
      padding: 8px 10px;
    }
    .msg {
      display: none;
      margin-top: 14px;
      padding: 12px 14px;
      border-radius: 12px;
      font-size: 14px;
    }
    .msg.error { background: #fff1f2; border: 1px solid #fecdd3; color: #9f1239; }
    .msg.pass  { background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; }
    .msg ul { margin: 8px 0 0 18px; }

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

    <!-- ใส่ id ให้ form เพื่อจับ submit -->
    <form id="html-form" action="#" method="post" enctype="multipart/form-data" novalidate>
      <div class="form-grid">

        <div class="label">ชื่อ</div>
        <div class="field">
          <input id="firstname" type="text" name="firstname" placeholder="เช่น พรพรรณ">
        </div>

        <div class="label">สกุล</div>
        <div class="field">
          <input id="lastname" type="text" name="lastname" placeholder="เช่น พุฒเถื่อน">
        </div>

        <div class="label">วัน/เดือน/ปีเกิด</div>
        <div class="field">
          <input id="birthdate" type="date" name="birthdate">
        </div>

        <!-- เพิ่มช่อง “อายุ” ตามโจทย์ -->
        <div class="label">อายุ</div>
        <div class="field">
          <input id="age" type="number" name="age" min="0" placeholder="เช่น 20">
        </div>

        <div class="label">เพศ</div>
        <div class="field inline-options" id="genderGroup">
          <label><input type="radio" name="gender" value="male"> ชาย</label>
          <label><input type="radio" name="gender" value="female"> หญิง</label>
          <label><input type="radio" name="gender" value="other"> อื่น ๆ</label>
        </div>

        <div class="label">รูป</div>
        <div class="field">
          <input id="photo" type="file" name="photo" accept="image/*">
        </div>

        <div class="label">ที่อยู่</div>
        <div class="field">
          <textarea id="address" name="address" placeholder="บ้านเลขที่ / หมู่บ้าน / ถนน / เขต / จังหวัด / รหัสไปรษณีย์"></textarea>
        </div>

        <div class="label">สีที่ชอบ</div>
        <div class="field">
          <select id="favorite_color" name="favorite_color">
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
        <div class="field inline-options" id="musicGroup">
          <label><input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต</label>
          <label><input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง</label>
          <label><input type="radio" name="music" value="pop"> ป๊อป</label>
          <label><input type="radio" name="music" value="rock"> ร็อค</label>
          <label><input type="radio" name="music" value="อื่นๆ"> อื่น ๆ</label>
        </div>

        <div class="checkbox-row">
          <label>
            <input id="consent" type="checkbox" name="consent">
            ยินยอมให้เก็บและใช้ข้อมูลตามวัตถุประสงค์ของแบบฟอร์มนี้
          </label>
        </div>

      </div>

      <div class="buttons">
        <button type="reset" class="btn btn-reset">Reset</button>
        <button type="submit" class="btn btn-submit">Submit</button>
      </div>

      <div id="msgError" class="msg error"></div>
      <div id="msgPass" class="msg pass"></div>
    </form>
  </div>
</div>

<script>
  const form = document.getElementById("html-form");
  const msgError = document.getElementById("msgError");
  const msgPass  = document.getElementById("msgPass");

  const el = {
    firstname: document.getElementById("firstname"),
    lastname: document.getElementById("lastname"),
    birthdate: document.getElementById("birthdate"),
    age: document.getElementById("age"),
    photo: document.getElementById("photo"),
    address: document.getElementById("address"),
    favorite_color: document.getElementById("favorite_color"),
    consent: document.getElementById("consent"),
    genderGroup: document.getElementById("genderGroup"),
    musicGroup: document.getElementById("musicGroup"),
    genderRadios: () => Array.from(document.querySelectorAll('input[name="gender"]')),
    musicRadios: () => Array.from(document.querySelectorAll('input[name="music"]')),
  };

  function clearUI(){
    msgError.style.display = "none";
    msgPass.style.display = "none";
    msgError.innerHTML = "";
    msgPass.innerHTML = "";

    document.querySelectorAll(".error-input").forEach(x => x.classList.remove("error-input"));
    el.genderGroup.classList.remove("error-group");
    el.musicGroup.classList.remove("error-group");
  }

  function calcAgeFromDOB(dobStr){
    const dob = new Date(dobStr);
    if (Number.isNaN(dob.getTime())) return null;
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) age--;
    return age;
  }

  function validate(){
    clearUI();
    const errors = [];

    const mark = (input, message) => {
      if (input) input.classList.add("error-input");
      errors.push(message);
    };

    // ชื่อ
    if (!el.firstname.value.trim()) mark(el.firstname, "กรุณากรอกชื่อ");
    // สกุล
    if (!el.lastname.value.trim()) mark(el.lastname, "กรุณากรอกสกุล");
    // วันเกิด
    if (!el.birthdate.value) mark(el.birthdate, "กรุณาเลือกวันเดือนปีเกิด");

    // อายุ
    if (el.age.value === "") {
      mark(el.age, "กรุณากรอกอายุ");
    } else if (Number(el.age.value) < 0) {
      mark(el.age, "อายุต้องไม่ติดลบ");
    }

    // เพศ
    const genderSelected = el.genderRadios().some(r => r.checked);
    if (!genderSelected) {
      el.genderGroup.classList.add("error-group");
      errors.push("กรุณาเลือกเพศ");
    }

    // รูป
    const file = el.photo.files && el.photo.files[0];
    if (!file) {
      mark(el.photo, "กรุณาอัปโหลดรูป");
    } else if (!file.type.startsWith("image/")) {
      mark(el.photo, "ไฟล์รูปต้องเป็นประเภท image เท่านั้น");
    }

    // ที่อยู่
    if (!el.address.value.trim()) mark(el.address, "กรุณากรอกที่อยู่");

    // สีที่ชอบ
    if (!el.favorite_color.value) mark(el.favorite_color, "กรุณาเลือกสีที่ชอบ");

    // แนวเพลง
    const musicSelected = el.musicRadios().some(r => r.checked);
    if (!musicSelected) {
      el.musicGroup.classList.add("error-group");
      errors.push("กรุณาเลือกแนวเพลงที่ชอบ");
    }

    // ยินยอม
    if (!el.consent.checked) errors.push("กรุณาติ๊กยินยอม");

    // (เสริม) ตรวจอายุสอดคล้องกับวันเกิด (คลาดเคลื่อน ±1 ปี)
    if (el.birthdate.value && el.age.value !== "") {
      const expected = calcAgeFromDOB(el.birthdate.value);
      if (expected !== null) {
        const a = Number(el.age.value);
        if (Math.abs(a - expected) > 1) {
          mark(el.age, `อายุไม่สอดคล้องกับวันเกิด (โดยประมาณควรเป็น ${expected})`);
        }
      }
    }

    return errors;
  }

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const errors = validate();

    if (errors.length > 0) {
      msgError.style.display = "block";
      msgError.innerHTML = `
        <b>❌ Error: กรุณากรอกข้อมูลให้ครบ</b>
        <ul>${errors.map(er => `<li>${er}</li>`).join("")}</ul>
      `;
    } else {
      msgPass.style.display = "block";
      msgPass.innerHTML = `<b>✅ Pass: กรอกข้อมูลครบทุกช่องแล้ว</b>`;
    }
  });

  form.addEventListener("reset", () => setTimeout(clearUI, 0));
</script>
</body>
</html>
