<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 이용 약관 동의 </title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrap">
        <div class="login__popup">
            <div class="login__inner">
                <div class="login__header">
                    <img src="../../assets/img/signin_agree_logo.png" alt="">
                    <h3>AGREEMENT</h3>
                    <div class="login-txt">
                        <p>하단에 적힌 약관을 확인해주시길 바랍니다!</p>
                        <!-- <p class="fail">약관을 동의해주세요!</p> -->
                    </div>
                    <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
                </div>
                <div class="agree__cont">
                    <form name="agree" action="join_insert.php" method="post">
                        <fieldset>
                            <legend class="ir">회원가입을 위한 약관 확인 영역</legend>
                            <section class="joinAgree">
                                <h2 class="ir">회원가입</h2>
                                    <div class="agree-desc scrollBar">
                                        <ul>
                                            <ul>
                                                <li>개인정보보호법<br>-</li>
                                            </ul>
                                            <li>1. “개인정보”란 살아 있는 개인에 관한 정보로서 다음 각 목의 어느 하나에 해당하는 정보를 말한다.</li>
                                            <ul>
                                                <li>가. 성명, 주민등록번호 및 영상 등을 통하여 개인을 알아볼 수 있는 정보</li>
                                                <li>나. 해당 정보만으로는 특정 개인을 알아볼 수 없더라도 다른 정보와 쉽게 결합하여 알아볼 수 있는 정보. 이 경우 쉽게 결합할 수 있는지 여부는 다른 정보의 입수 가능성 등 개인을 알아보는 데 소요되는 시간, 비용, 기술 등을 합리적으로 고려하여야 한다.</li>
                                                <li>다. 가목 또는 나목을 제1호의2에 따라 가명처리함으로써 원래의 상태로 복원하기 위한 추가 정보의 사용ㆍ결합 없이는 특정 개인을 알아볼 수 없는 정보(이하 “가명정보”라 한다)</li>
                                            </ul>
                                            <li>1의2. “가명처리”란 개인정보의 일부를 삭제하거나 일부 또는 전부를 대체하는 등의 방법으로 추가 정보가 없이는 특정 개인을 알아볼 수 없도록 처리하는 것을 말한다.</li>
                                            <li>2. “처리”란 개인정보의 수집, 생성, 연계, 연동, 기록, 저장, 보유, 가공, 편집, 검색, 출력, 정정(訂正), 복구, 이용, 제공, 공개, 파기(破棄), 그 밖에 이와 유사한 행위를 말한다.</li>
                                            <li>3. “정보주체”란 처리되는 정보에 의하여 알아볼 수 있는 사람으로서 그 정보의 주체가 되는 사람을 말한다.</li>
                                            <li>4. “개인정보파일”이란 개인정보를 쉽게 검색할 수 있도록 일정한 규칙에 따라 체계적으로 배열하거나 구성한 개인정보의 집합물(集合物)을 말한다.</li>
                                            <li>5. “개인정보처리자”란 업무를 목적으로 개인정보파일을 운용하기 위하여 스스로 또는 다른 사람을 통하여 개인정보를 처리하는 공공기관, 법인, 단체 및 개인 등을 말한다.</li>
                                            <li>6. “공공기관”이란 다음 각 목의 기관을 말한다.</li>
                                            <ul>
                                                <li>가. 국회, 법원, 헌법재판소, 중앙선거관리위원회의 행정사무를 처리하는 기관, 중앙행정기관(대통령 소속 기관과 국무총리 소속 기관을 포함한다) 및 그 소속 기관, 지방자치단체</li>
                                                <li>나. 그 밖의 국가기관 및 공공단체 중 대통령령으로 정하는 기관</li>
                                            </ul>
                                            <li>7. “영상정보처리기기”란 일정한 공간에 지속적으로 설치되어 사람 또는 사물의 영상 등을 촬영하거나 이를 유ㆍ무선망을 통하여 전송하는 장치로서 대통령령으로 정하는 장치를 말한다.</li>
                                            <li>8. “과학적 연구”란 기술의 개발과 실증, 기초연구, 응용연구 및 민간 투자 연구 등 과학적 방법을 적용하는 연구를 말한다.</li>
                                        </ul>
                                    </div>
                                    <div class="check">
                                        <input type="checkbox" name="agreeCheck1" id="agreeCheck1" class="agreeCheck">
                                        <label for="agreeCheck1">개인정보 제공에 동의합니다.</label>
                                    </div>
                                    <div class="agree-desc scrollBar">
                                        <ul>
                                            <ul>
                                                <li>이용약관<br>-</li>
                                            </ul>
                                            <li>1. 여러분은 본 약관을 읽고 동의하신 후 회원 가입을 신청하실 수 있으며,</li>
                                            <ul>
                                                <li>가. 꾸다는 이에 대한 승낙을 통해 회원 가입 절차를 완료하고 여러분께 꾸다 서비스 이용 계정(이하 ‘계정’)을 부여합니다</li>
                                                <li>나. 계정이란 회원이 네이버 서비스에 로그인한 이후 이용하는 각종 서비스 이용 이력을 회원 별로 관리하기 위해 설정한 회원 식별 단위를 말합니다.</li>
                                                <li>다. 가목 또는 나목을 제1호의2에 따라 가명처리함으로써 원래의 상태로 복원하기 위한 추가 정보의 사용ㆍ결합 없이는 특정 개인을 알아볼 수 없는 정보(이하 “가명정보”라 한다)</li>
                                            </ul>
                                            <li>1의2. “가명처리”란 개인정보의 일부를 삭제하거나 일부 또는 전부를 대체하는 등의 방법으로 추가 정보가 없이는 특정 개인을 알아볼 수 없도록 처리하는 것을 말한다.</li>
                                            <li>2. “처리”란 개인정보의 수집, 생성, 연계, 연동, 기록, 저장, 보유, 가공, 편집, 검색, 출력, 정정(訂正), 복구, 이용, 제공, 공개, 파기(破棄), 그 밖에 이와 유사한 행위를 말한다.</li>
                                            <li>3. “정보주체”란 처리되는 정보에 의하여 알아볼 수 있는 사람으로서 그 정보의 주체가 되는 사람을 말한다.</li>
                                            <li>4. “개인정보파일”이란 개인정보를 쉽게 검색할 수 있도록 일정한 규칙에 따라 체계적으로 배열하거나 구성한 개인정보의 집합물(集合物)을 말한다.</li>
                                            <li>5. “개인정보처리자”란 업무를 목적으로 개인정보파일을 운용하기 위하여 스스로 또는 다른 사람을 통하여 개인정보를 처리하는 공공기관, 법인, 단체 및 개인 등을 말한다.</li>
                                            <li>6. “공공기관”이란 다음 각 목의 기관을 말한다.</li>
                                            <ul>
                                                <li>가. 국회, 법원, 헌법재판소, 중앙선거관리위원회의 행정사무를 처리하는 기관, 중앙행정기관(대통령 소속 기관과 국무총리 소속 기관을 포함한다) 및 그 소속 기관, 지방자치단체</li>
                                                <li>나. 그 밖의 국가기관 및 공공단체 중 대통령령으로 정하는 기관</li>
                                            </ul>
                                            <li>7. “영상정보처리기기”란 일정한 공간에 지속적으로 설치되어 사람 또는 사물의 영상 등을 촬영하거나 이를 유ㆍ무선망을 통하여 전송하는 장치로서 대통령령으로 정하는 장치를 말한다.</li>
                                            <li>8. “과학적 연구”란 기술의 개발과 실증, 기초연구, 응용연구 및 민간 투자 연구 등 과학적 방법을 적용하는 연구를 말한다.</li>
                                        </ul>
                                    </div>
                                    <div class="check">
                                        <input type="checkbox" name="agreeCheck1" id="agreeCheck2" class="agreeCheck">
                                        <label for="agreeCheck2">이용약관에 동의합니다.</label>
                                    </div>
                                    <!-- <button type="submit" class="input__Btn">동의</button> -->
                                    <a href="join_insert.php">동의</a>
                            </section>
                        </fieldset>
                    </form>
                </div>
                <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
            </div>
        </div>
    </div>
</body>
    <script>
        //체크 표시 검사
        const isCheck= document.querySelectorAll(".agreeCheck")
        const agree = document.querySelector(".input__Btn")
        const text = document.querySelector(".login-txt p")
        //동의 버튼에 클릭 발생시
        agree.addEventListener("click", (nextPage)=>{
            //#agreeCheck1 각 요소에
            isCheck.forEach((e,i)=>{
                //각각 체크 검사시 안되어있다면
                if(e.checked == false){
                    // 체크박스를 다시 확인해달라는 메세지를 표시 및 서식 적용.
                    text.innerText = "체크박스를 다시 확인해주세요!"
                    text.classList.add("fail")
                    text.style.display="block"

                    //다음 페이지로의 이동 이벤트를 막았습니다.
                    nextPage.preventDefault()
                }
            })
        })
    </script>
</html>