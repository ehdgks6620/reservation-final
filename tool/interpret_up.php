<?php
$subject = "";
$time = "";
if($array['pro']=="A0"){
    $subject = "IT프로그래머";
}else if($array['pro'] =="B0"){
    $subject = "정보통신";
}else if($array['pro'] =="C0"){
    $subject = "자동차";
}else if($array['pro'] =="D0"){
    $subject = "조선";
}else if($array['pro'] =="E0"){
    $subject = "기계";
}else if($array['pro'] =="F0"){
    $subject = "반도체";
}else if($array['pro'] =="G0"){
    $subject = "디스플레이";
}else if($array['pro'] =="H0"){
    $subject = "화학";
}else if($array['pro'] =="I0"){
    $subject = "전기";
}else if($array['pro'] =="J0"){
    $subject = "전자";
}else if($array['pro'] =="K0"){
    $subject = "제약";
}else if($array['pro'] =="S0"){
    $subject = "헬스케어";
}else if($array['pro'] =="M0"){
    $subject = "식품";
}else if($array['pro'] =="N0"){
    $subject = "건축";
}

if($array['time']=="one"){
    $time="13:00~14:00";
}else if($array['time']=="two"){
    $time="14:00~15:00";
}else if($array['time']=="three"){
    $time="15:00~16:00";
}else if($array['time']=="four"){
    $time="16:00~17:00";
}else if($array['time']="five"){
    $time="17:00~18:00";
}
?>