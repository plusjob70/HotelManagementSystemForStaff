<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>

<body>

    <h2>Sign Up</h2>    

    <form name="HMS" method="post" action="staffSave.php">

        <div class="field">
            <label for="name">아이디</label>
            <input type="text" maxlength="20" name="id"/>
        </div>
        <div class="field">
            <label for="password">비밀번호</label>
            <input type="password" maxlength="20" name="pwd"/>
        </div>
        <div class="field">
            <label for="password2">비밀번호 재입력</label>
            <input type="password" maxlength="20" name="pwd2"/>
        </div>
        <div class="field">
            <label for="name">이름</label>
            <input type="text" maxlength="20" name="name"/>
        </div>
        <div class="field">
            <label for="phone">휴대전화 번호</label>
            <input type="text" maxlength="11" name="phone"/>
        </div>
        <div class="field">
            <label for="depart">부서선택</label>
            <select name="department">  
                <option value="roomkeeper">룸키퍼</option>    
                <option value="receptionist">접수원</option>
                <option value="manager">매니저</option>
            </select>
        </div>

        <ul class="actions">
            <input type=submit value="회원가입" />
            <input type=reset value="재작성" />
        </ul>
    </form>

</body>
</html>