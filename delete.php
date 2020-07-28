<?php
$connect=mysqli_connect("localhost","root","000325","reserve");
$array = Array(
    "name" => $_POST['re_del_name'],
    "univ" => $_POST['re_del_univ'],
    "pro" => $_POST['re_del_pro'],
    "time" => $_POST['re_del_time'],
    "num" => $_POST['re_del_num']
);
$sql = "delete from r_table where re_name='{$array['name']}' and re_univ='{$array['univ']}' and re_pro= '{$array['pro']}' and re_time='{$array['time']}' and re_num='{$array['num']}'";
$result = mysqli_query($connect,$sql);
if($result===false){
    echo "<script>alert('잘못 입력하셨습니다!!');</script>";
    echo "<script language='javascript'>location.href='reserve.php'</script>";
}else{
    echo "<script>alert('예약이 취소됐습니다!!');</script>";
    echo "<script language='javascript'>location.href='reserve.php'</script>";
}
?>
