<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <?php include "../../include/link.php" ?>

</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
    <?php include "../../include/header.php" ?>

            <!-- <div class="hamburger_menu">
                <img class="header_menu_close" src="../assets/img/login_cross.png" alt="">
                <p>공지사항</p>
                <p>이벤트</p>
                <p>이달의 순위</p>
                <p>일기쓰기</p>
                <p>꾸미기</p>
                <p>정보</p>
                <p>고객센터</p>
            </div>
            <div class="header">
                <div class="header_inner">
                    <img src="../assets/img/site_header_logo.png" alt="logo">
                    <p>공지사항</p>
                    <p>이벤트</p>
                    <p>이달의 순위</p>
                    <p>일기쓰기</p>
                    <p>꾸미기</p>
                    <p>정보</p>
                    <p>고객센터</p>
                    <div class="profile_cont">
                        <img src="../assets/img/site_header_profile.png" alt="logo">
                        <img src="../assets/img/site_header_profile_heart.png" alt="logo">
                    </div>
                    <img class="hamburger_menu_open" src="../assets/img/hamburger_btn.png" alt="">
                </div>
            </div> -->
            <div class="board">
                <a class="write_btn" href="board_write.html">글쓰기</a>
                <div class="board_info">
                    <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt="">
                    <h2>NOTICE</h2>
                    <p>공지사항은 이곳에서 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.html">공지사항</a>
                        <a href="board.html">이벤트</a>
                    </div>
                    <a class="section_search_button" href="#">
                        <img src="../../assets/img/search_btn.png" alt="">
                    </a>
                </div>
                <form action="boardSearch.php" name="boardSearch" method="get" id="board_search">
                    <fieldset>
                        <legend class="ir">게시판 검색 영역</legend>
                        <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!"
                            aria-label="search" class="board_search" required>
                    </fieldset>
                </form>
                <div class="board_list">
                    <div class="board_list_inner">
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                        <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    //검색창 표시
    const searchBtn = document.querySelector(".section_search_button")
    let i = 0;

    searchBtn.addEventListener("click", ()=>{
        if(i==0){
            document.querySelector(".board_search").style.display="block";
            i++;
        } else{
            document.querySelector(".board_search").style.display="none";
            i--;
        }
    })


    //모바일시 햄버거 메뉴 구현
    const menuOpen = document.querySelector(".hamburger_menu_open");
    menuOpen.addEventListener("click", ()=>{
        document.querySelector(".hamburger_menu").style.display="flex"
        document.querySelector("body").style.overflow="hidden"
    })
    const menuClose = document.querySelector(".header_menu_close");
    menuClose.addEventListener("click", ()=>{
        document.querySelector(".hamburger_menu").style.display="none"
        document.querySelector("body").style.overflow="auto"
    })
</script>
</html>