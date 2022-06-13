<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차 목록 관리</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
차량번호<input type="text" name="carnum">
</div>
<div>
차량명<input type="text" name="name"><br>
</div>
<div>
차종
<input type="radio" name="type" value="소형">소형
<input type="radio" name="type" value="중형">중형
<input type="radio" name="type" value="대형">대형
</div>
<div>
제조사
<select name="Produce">
    <option value="벤츠">벤츠</option>
    <option value="아우디">아우디</option>
    <option value="기아">기아</option>
    <option value="현대">현대</option>
</select>
</div>
<div>
<input type="submit">
</div>
</form>

</body>
</html>