<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>마이페이지</title>
        <link rel="stylesheet" type="text/css" href="../bars/css/side_bar.css">
        <link rel="stylesheet" type="text/css" href="../bars/css/top_bar.css">
        <link rel="stylesheet" type="text/css" href="./css/my_page.css">
    </head> 
    <body>
        <!-- <div class="cont"> -->
            <div class="sidebar">
                <?php include '../bars/side_bar.php'; ?>
            </div>
<<<<<<< HEAD:mypage/mypage.php
            <div class="header-wrapper">
                <?php include '../header.php'; ?>
                <hr class="my-hr">
            </div>
=======
            
            <?php include '../bars/top_bar.php'; ?>
            
>>>>>>> 76537d27912d612d1ff05c3fd78892fa7c56e9bf:my_info/my_page.php
                <div class="container">
                    <h1>마이페이지</h1>
                    <!-- <hr class="my-hr"> -->
                    <div class="user-infom">
                        <p>사용자 이름 : 심유정</p>
                        <p>아이디 : YJ</p>
                        <!-- <hr class="my-hr"> -->
                        <form action="" method="post">
                            <label for="current_password">현재 비밀번호:</label>
                            <input type="password" id="current_password" name="current_password"><br><br>
                            <label for="new_password">새 비밀번호:</label>
                            <input type="password" id="new_password" name="new_password"><br><br>
                            <label for="confirm_new_password">새 비밀번호 확인:</label>
                            <input type="password" id="confirm_new_password" name="confirm_new_password">
                            <input type="submit" value="변경">
                        </form>
                        <!-- <hr class="my-hr"> -->
                        <p>등록 문제 : 3</p>  
                        <p>푼 문제 : 3</p>
                    </div>
                </div>
        <!-- </div> -->
    </body>
</html>
