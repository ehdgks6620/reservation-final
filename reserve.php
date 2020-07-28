<?php 
$connect = mysqli_connect("localhost","root","000325","reserve");
$sql = "select * from r_table";
$result = mysqli_query($connect,$sql);
require_once("tool/table_a0.php");
require_once("tool/interpret.php");
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>직무 멘토링</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" />
    
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
    <link rel="stylesheet" type="text/css" href="style/table.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js" ></script>
    <script type="text/javascript">
    function check_n1(input){
        var koreanA0 = /^[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]$/;
 
        var testingA0 = koreanA0.test(input); 
        if(testingA0){
           
        }else{
        alert('한글로 입력해주세요!');
        document.getElementById("tn1").value = null;
        document.getElementById("tn2").value = null;
        document.getElementById("tn3").value = null;
        }
    }
    function check_u1(input){
        var koreanB0 = /^[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]$/;
 
        var testingB0 = koreanB0.test(input); 
        if(testingB0){
           
        }else{
        alert('한글로 입력해주세요!');
        document.getElementById("tu1").value = null;
        document.getElementById("tu2").value = null;
        document.getElementById("tu3").value = null;
        }
    }
    function check_p1(input){
        var phoneC0 = /^[0-9]{1,100}$/g;
 
        var testingC0 = phoneC0.test(input); 
        if(testingC0){
            
        }
    }
    
    function reset(){
        document.getElementById("tn1").value = null;
        document.getElementById("tn2").value = null;
        document.getElementById("tn3").value = null;

        document.getElementById("tu1").value = null;
        document.getElementById("tu2").value = null;
        document.getElementById("tu3").value = null;

        document.getElementById("tp1").value = null;  
        document.getElementById("tp2").value = null;
        document.getElementById("tp3").value = null;
    }
    
    $(function(){
        $('#t1').hide();
        $('#t2').hide();
        $('#t3').hide();
        reset();

        $('#start1').click(function(){
            $('#t1').show();
            $('#t2').hide();
            $('#t3').hide();      
            reset();

        })
        $('#update1').click(function(){
            $('#t1').hide();
            $('#t2').show();
            $('#t3').hide();
            reset();
    });
        $('#delete1').click(function(){
            $('#t1').hide();
            $('#t2').hide();
            $('#t3').show();
            reset();
        })
        $('#tn1').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
        
        $('#tu1').keypress(function(){
            var input=$(this).val();
            check_u1(input);

        })
        $('#tp1').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        $('#tn2').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
        
        $('#tu2').keypress(function(){
            var input=$(this).val();
            check_u1(input);

        })
        $('#tp2').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        $('#tn3').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
        
        $('#tu3').keypress(function(){
            var input=$(this).val();
            check_u1(input);

        })
        $('#tp3').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        
        })
</script>

</head>
<style type="text/css">
.btn-sm {
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
}
</style>
<body id = "page-top" >
<header class="masthead bg-primary1 text-green text-center" style = "padding: 170px 0px 150px;">
       <h1 style>직무멘토링</h1>
</header>

<section id="about" class="bg-primary text-white mb-0">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary mb-0" style="padding: 40px;">예약</h2>
        <div class="row" class="nav">
            <div class="col">
                <p class="text-center">
                <a class="btn1 btn-primary1 " id="start1" role="button">
                예약신청
                </a>
                <a class="btn1 btn-primary1 " id="update1" role="button">
                예약변경
                </a>
                <a class="btn1 btn-primary1 " id="delete1" role="button">
                예약취소
                </a>
                </p>
            </div>
        </div>
        <div class="row" id="t1">
            <div class="col-lg-8 mx-auto">
                <form action="process/process_re.php" id="contactForm-1" name="sentMessage" novalidate="novalidate" method="post">
                <h5>예약신청</h5>
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_name" id="tn1" type="text" class="form-control" required placeholder="이름" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label><input name="re_univ" id="tu1" type="text" class="form-control"  required placeholder="대학교" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_num" id="tp1" type="tel" class="form-control" required placeholder="전화번호" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>강좌</label>
                    <select name="re_pro" class="form-control" style="height:34px;">    
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
                </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-5 pb-2"><label>시간</label>
                    <select name="re_time" class="form-control" style="height:34px;">
                    <option value="one">13:00~14:00</option>
                    <option value="two">14:00~15:00</option>
                    <option value="three">15:00~16:00</option>
                    <option value="four">16:00~17:00</option>
                    <option value="five">17:00~18:00</option>
                    </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
        <div class="row" id="t2">
            <div class="col-lg-8 mx-auto">
                <form action="update.php" id="contactForm-2" name="sentMessage" novalidate="novalidate" method="post">
                <h5>예약변경</h5>
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_up_name" id="tn2" type="text" class="form-control"  required placeholder="이름" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label><input name="re_up_univ" id="tu2" type="text" class="form-control" required placeholder="대학교" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_up_num" id="tp2" type="tel" class="form-control" required placeholder="전화번호" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>강좌</label>
                    <select style="height:34px;" name="re_up_pro" class="form-control">
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
                </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-5 pb-2"><label>시간</label>
                    <select name="re_up_time" class="form-control" style="height:34px;">
                    <option value="one">13:00~14:00</option>
                    <option value="two">14:00~15:00</option>
                    <option value="three">15:00~16:00</option>
                    <option value="four">16:00~17:00</option>
                    <option value="five">17:00~18:00</option>
                    </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
        <div class="row" id="t3">
            <div class="col-lg-8 mx-auto">
                <form action="delete.php" id="contactForm-3" name="sentMessage" novalidate="novalidate" method="post">
                    <h5>예약취소</h5>
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_del_name" id="tn3" type="text" class="form-control" required placeholder="이름" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label><input name="re_del_univ" id="tu3" type="text" class="form-control" required placeholder="대학교" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_del_num" id="tp3" type="tel" class="form-control" required placeholder="전화번호" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>강좌</label>
                    <select name="re_del_pro" class="form-control" style="height:34px;">
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
                </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-5 pb-2"><label>시간</label>
                    <select name="re_del_time" class="form-control" style="height:34px;">
                    <option value="one">13:00~14:00</option>
                    <option value="two">14:00~15:00</option>
                    <option value="three">15:00~16:00</option>
                    <option value="four">16:00~17:00</option>
                    <option value="five">17:00~18:00</option>
                    </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>



</section>




<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary">예약 시간표</h2>
        <div class="col" style="padding: 50px 50px;">
        <p class="text-center"> 
            <a class="btn btn-primary btn-sm" href="reserve.php?form=A0" role="button">IT프로그래머</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=B0">정보통신</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=C0">자동차</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=D0">조선</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=E0">기계</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=F0">반도체</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve.php?form=G0">디스플레이</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=H0">화학</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=I0">전기</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=J0">전자</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=K0">제약</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=S0">헬스케어</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=M0">식품</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve.php?form=N0">건축</a>
        </p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <h4 class="text-center"><?= "{$subject} 강좌 예약현황"?></h4>
                    <br>
                    <div class="tavle" style="padding-left : 10%">
                     
                    <table id="schema" class="table" style="margin-left : auto; margin-right: auto;">
                        <thead>
                            <tr><th>시간</th><th>참여1</th><th>참여2</th><th>참여3</th><th>참여4</th><th>참여5</th>
                            <th>참여6</th><th>참여7</th><th>참여8</th><th>참여9</th><th>참여10</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>13:00~14:00</td><td><?= $li_one[0]?></td><td><?= $li_one[1]?></td><td><?= $li_one[2]?></td><td><?= $li_one[3]?></td><td><?= $li_one[4]?></td>
                            <td><?= $li_one[5]?></td><td><?= $li_one[6]?></td><td><?= $li_one[7]?></td><td><?= $li_one[8]?></td><td><?= $li_one[9]?></td></tr>
                            <tr><td>14:00~15:00</td><td><?= $li_two[0]?></td><td><?= $li_two[1]?></td><td><?= $li_two[2]?></td><td><?= $li_two[3]?></td><td><?= $li_two[4]?></td>
                            <td><?= $li_two[5]?></td><td><?= $li_two[6]?></td><td><?= $li_two[7]?></td><td><?= $li_two[8]?></td><td><?= $li_two[9]?></td></tr>
                            <tr><td>15:00~16:00</td><td><?= $li_three[0]?></td><td><?= $li_three[1]?></td><td><?= $li_three[2]?></td><td><?= $li_three[3]?></td><td><?= $li_three[4]?></td>
                            <td><?= $li_three[5]?></td><td><?= $li_three[6]?></td><td><?= $li_three[7]?></td><td><?= $li_three[8]?></td><td><?= $li_three[9]?></td></tr>
                            <tr><td>16:00~17:00</td><td><?= $li_four[0]?></td><td><?= $li_four[1]?></td><td><?= $li_four[2]?></td><td><?= $li_four[3]?></td><td><?= $li_four[4]?></td>
                            <td><?= $li_four[5]?></td><td><?= $li_four[6]?></td><td><?= $li_four[7]?></td><td><?= $li_four[8]?></td><td><?= $li_four[9]?></td></tr>
                            <tr><td>17:00~18:00</td><td><?= $li_five[0]?></td><td><?= $li_five[1]?></td><td><?= $li_five[2]?></td><td><?= $li_five[3]?></td><td><?= $li_five[4]?></td>
                            <td><?= $li_five[5]?></td><td><?= $li_five[6]?></td><td><?= $li_five[7]?></td><td><?= $li_five[8]?></td><td><?= $li_five[9]?></td></tr>
                        </tbody>
                    </table>
                   
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

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