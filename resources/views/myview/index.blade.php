<form method="GET">
    <label for="num">ป้อนข้อมูลแม่สูตรคูณ</label>
    <input type="number" id="num" name="num">
    <button type="submit">ส่งข้อมูล</button>
</form>

@if(!empty($num))
    <h3>แม่สูตรคูณ {{ $num }}</h3>
    @for($i = 1; $i <= 100; $i++)
        <p>{{ $num }} x {{ $i }} = {{ $num * $i }}</p>
    @endfor
@endif
