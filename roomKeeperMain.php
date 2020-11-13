<!DOCTYPE html>
<?php include 'roomKeeper.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 로그인시 직원이름 표시 -->
    <header>
        <h1> 객실관리인 메인페이지 </h1>
        <p><strong><?= $staff_name ?></strong> 관리인님 환영합니다. <a href="logout.php">로그아웃</a></p>
    </header>

    <!-- 출퇴근 기능 -->
    <!-- 매니저는 출근한 직원을 대상으로 일을 부여할 수 있음 -->
    <section>
        <h2> 출퇴근 </h2>
        <?php
        if ($result_s[0]['attendance'] == 0) { ?>
            <form action='staffAttendance.php' method='POST'>
                <button type='submit' name='attendance' value='t'>출근하기</button>
            </form>
        <?php } else { ?>
            <form action='staffAttendance.php' method='POST'>
                <button type='submit' name='attendance' value='f'>퇴근하기</button>
            </form>
        <?php } ?>
        <hr />
    </section>

    <!-- 자신에게 할당된 청소를 해야하는 방 -->
    <!-- 청소가 완료되면 완료 버튼을 클릭 -> 방은 체크인이 가능하게 됨 -->
    <section>
        <h2> 청소 </h2>
        <table style='border: solid 1px black;'>
            <tr>
                <th>접수시간</th>
                <th>방번호</th>
                <th>업무구분</th>
                <th>세부사항</th>
                <th>완료</th>
            </tr>
            <?php
            for ($i = 0; $i < count($result); $i++) { ?>
                <tr>
                    <th><?= $result[$i]["ttime"] ?></th>
                    <th><?= $result[$i]["rnumber"] ?></th>
                    <th>청소</th>
                    <th>없음</th>
                    <th>
                        <form action='cleaningComplete.php' method='POST'>
                            <input type='hidden' name='rnumber' value='<?= $result[$i]['rnumber'] ?>'></input>
                            <button type='submit' name='complete' value='<?= $result[$i]['code'] ?>'>완료</button>
                        </form>
                    </th>
                </tr>
            <?php } ?>
        </table>
        <hr />
    </section>

    <!-- 자신에게 할당된 고객 불만사항 -->
    <!-- 불만사항을 해결하면 완료 버튼을 클릭 -->
    <section>
        <h2> 고객 불만사항 </h2>
        <table style='border: solid 1px black;'>
            <tr>
                <th>접수시간</th>
                <th>방번호</th>
                <th>유형</th>
                <th>세부사항</th>
                <th>완료</th>
            </tr>
            <?php
            for ($i = 0; $i < count($result2); $i++) { ?>
                <tr>
                    <th><?= $result2[$i]["ttime"] ?></th>
                    <th><?= $result2[$i]["rnumber"] ?></th>
                    <th><?= $result2[$i]["complainment"] ?></th>
                    <th><?= $result2[$i]["detail"] ?></th>
                    <th>
                        <form action='complainComplete.php' method='POST'>
                            <input type='hidden' name='rnumber' value='<?= $result2[$i]['rnumber'] ?>'></input>
                            <button type='submit' name='recept' value='<?= $result2[$i]['code'] ?>'>완료</button>
                        </form>
                    </th>
                </tr>
            <?php } ?>
        </table>
        <hr />
    </section>

    <div>
        <?php if ($error == true) { ?>
            <p>Sorry, a database error occurred. Please try again later.</p>
            <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php } ?>
    </div>


</body>

</html>