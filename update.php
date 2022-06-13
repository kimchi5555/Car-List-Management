<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM car where snum=".$no;
// echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $carnumprt = $row["scarnum"]; 
    $nameprt =$row["sname"];
    $typeprt = $row["stype"];
    $Produceprt = $row["sProduce"];


  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="snum" value="<?php echo $no; ?>">    
<div>
차량번호<input type="text" name="scarnum" value='<?php echo $carnumprt; ?>'>
</div>
<div>
차량명<input type="text" name="sname" value="<?php echo $nameprt; ?>">
</div>
<div> 
차종
<input type="radio" name="stype" value="소형" <?php if($typeprt =="소형") echo "checked";?> >소형
<input type="radio" name="stype" value="중형" <?php if($typeprt =="중형") echo "checked";?>  >중형 
<input type="radio" name="stype" value="대형" <?php if($typeprt =="대형") echo "checked";?>  >대형
</div>
<div>
제조사
<select name="sProduce">
    <option value="벤츠" <?php if($Produceprt =="벤츠") echo "selected";?> >벤츠</option>
    <option value="아우디" <?php if($Produceprt =="아우디") echo "selected";?> >아우디</option>
    <option value="기아" <?php if($Produceprt =="기아") echo "selected";?> >기아</option>
    <option value="현대" <?php if($Produceprt =="현대") echo "selected";?> >현대</option>
</select>
</div>
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>