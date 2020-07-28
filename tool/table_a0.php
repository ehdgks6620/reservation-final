<?php
$connect = mysqli_connect("localhost","root","000325","reserve");
$default="";
if(isset($_GET['form'])){
    $default = $_GET['form'];
}else{
    $default = "A0";
}

$sql = "select * from r_table where re_pro='{$default}'";
$result = mysqli_query($connect,$sql);
$li = "";
$li_one=array();
$li_two=array();
$li_three=array();
$li_four=array();
$li_five=array();

while($row = mysqli_fetch_array($result)){
    $array= Array(
        "professor" => $row['re_pro'],
        "name" => $row['re_name'],
        "time" => $row['re_time'],
        "univ" => $row['re_univ']
    );

    if($array['time']== "one" ){
        array_push($li_one,"o");
    } else if($array['time']=="two") {
        array_push($li_two,"o");
    } else if($array['time']=="three") {
        array_push($li_three,"o");
    } else if($array['time']=="four") {
        array_push($li_four, "o" );
    } else if($array['time']=="five") {
        array_push($li_five, "o");
    }
}
//"{$array['univ']} <br> {$array['name']}"

while(count($li_one)<11){
    array_push($li_one,"x"); 
}
while(count($li_two)<11){
    array_push($li_two,"x");
}
while(count($li_three)<11){
    array_push($li_three,"x");
}
while(count($li_four)<11){
    array_push($li_four,"x");
}
while(count($li_five)<11){
    array_push($li_five,"x");
}

?>


