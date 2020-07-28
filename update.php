<?php 
$connect = mysqli_connect("localhost","root","000325","reserve");
$array = Array(
    "pro" => $_POST['re_up_pro'],
    "name" => $_POST['re_up_name'],
    "univ" => $_POST['re_up_univ'],
    "time" => $_POST['re_up_time'],
    "num" => $_POST['re_up_num']
);
$sql = "select * from r_table where re_pro='{$array['pro']}' and re_name='{$array['name']}' and re_univ='{$array['univ']}' and re_time='{$array['time']}' and re_num='{$array['num']}'";
$result = mysqli_query($connect,$sql);
$li=array();
if($row=mysqli_fetch_array($result)){
    array_push($li,"{$row['re_name']}");
    array_push($li,"{$row['re_univ']}");
    array_push($li,"{$row['re_pro']}");
    array_push($li,"{$row['re_time']}"); 
    array_push($li,"{$row['re_idx']}");
    array_push($li,"{$row['re_num']}");
} else {
    $li = array("없음","없음","없음","없음","없음","없음");
    echo "<script>alert('예약정보가 없습니다')</script>";
    echo "<script language='javascript'>location.href='reserve.php'</script>";
}
$default=$_POST['re_up_pro'];
require_once("tool/interpret_up.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <script>
        jQuery(function($){
            $("#schema").DataTable();
        });
    </script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<style type="text/css">
.jumbotron{
    text-shadow : black 0.05em 0.05em 0.05em;
    opacity : 0.75;
}
.btn {
    background-color : black;
}
</style>

<div class="container">
      <div class="jumbotron jumbotron-sm">
        <h3 class="text-center">
          직무 멘토링
        </h3>
      </div>
</div>

<div>
<h2>변경 이전</h2>
<table>
    <tr>
        <th>이름</th><td><?= $li[0]?></td>
    </tr>
    <tr>
        <th>대학교</th><td><?= $li[1]?></td>
    </tr>
    <tr>
        <th>전화번호</th><td><?= $li[5]?></td>
    </tr>
    <tr>
        <th>강연자</th><td><?= $subject?></td>
    </tr>
    <tr>
        <th>시간</th><td><?= $li[3]?></td>
    </tr>
</table>
</div>
<br>
<div>
<form action="process/process_up.php" method="post">
<table>
    <h2>변경 이후</h2>
    <tr>
        <th>이름</th><td><input name="re_up_name" type="text" value=<?= $li[0]?>></td>
    </tr>
    <tr>
        <th>대학교</th><td><input name="re_up_univ" type="text" value=<?= $li[1]?>></td>
    </tr>
    <tr>
        <th>전화번호</th><td><input name="re_up_num" type="text" value=<?= $li[5]?>></td>
    </tr>
    <tr>
        <th>강연자</th><td><select name="re_up_pro">
            <option value="A0">IT프로그래머</option>
            <option value="B0">정보통신</option>
            <option value="C0">자동차</option>
            <option value="D0">조선</option>
            <option value="E0">기계</option>
            <option value="F0">반도체</option>
            <option value="G0">디스플레이</option>
            <option value="H0">화학</option>
            <option value="I0">전기</option>
            <option value="J0">전자</option>
            <option value="K0">제약</option>
            <option value="S0">헬스케어</option>
            <option value="M0">식품</option>
            <option value="N0">건축</option>
        </select></td>
    </tr>
    <tr>
        <th>시간</th>
        <td>
        <select name="re_up_time">
            <option value="one">13:00~14:00</option>
            <option value="two">14:00~15:00</option>
            <option value="three">15:00~16:00</option>
            <option value="four">16:00~17:00</option>
            <option value="five">17:00~18:00</option>
        </select>
        </td>
    </tr>
</table>
<input type="hidden" name="re_up_idx" value="<?= $li[4]?>">
<input type="submit" value="변경완료">
</form>
</div>

<script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
</body>
</html>
