@extends('template.default')

@section('content')
    <div class="container pt-5">
        <h1>Workshop #HTML - FORM</h1>
        <form novalidate>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="fname">
                        ชื่อ
                    </label>
                </div>
                <div class="col-6">
                    <input type="text" id="fname" class="form-control">
                    <div class="valid-feedback">
                       ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                       ไม่ได้ระบุชื่อ
                    </div>
                </div>
                <div class="col-2">

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="lname">
                        นามสกุล
                    </label>
                </div>
                <div class="col-6">
                    <input type="text" id="lname" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="bdate">
                        วัน/เดือน/ปี
                    </label>
                </div>
                <div class="col-6">
                    <input type="date" id="bdate" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="reset" class="btn btn-light">reset</button>
                </div>
                <div class="col">
                    <button type="button" onclick="checkValidate()" class="btn btn-success">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push("scripts")
    <script>
        console.log("it's work!")
        checkValidate = () =>{
            let fname = document.getElementById('fname')
            if(fname.value == ""){
                fname.classList.remove("is-valid")
                fname.classList.add("is-invalid")
            } else {
                fname.classList.remove("is-invalid")
                fname.classList.add("is-valid")
            }
        }
    </script>
@endpush
