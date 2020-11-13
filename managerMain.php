<!DOCTYPE html>
<?php include 'manager.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="selectStaffId.js"></script>
</head>

<body>
    <!-- 로그인시 직원이름 표시 -->
    <header>
        <h1> 매니저 메인페이지 </h1>
        <p><strong><?= $staff_name ?></strong> 매니저님 환영합니다. <a href="logout.php">로그아웃</a></p>
    </header>

    <!-- 출퇴근 기능 -->
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

    <!-- 직원들의 출근현황을 파악할 수 있음 -->
    <section>
        <h2> 출근 현황 </h2>
        <h3> 접수원 </h3>
        <table style='border: solid 1px black;'>
            <tr>
                <th>ID</th>
                <th>직원명</th>
                <th>휴대전화</th>
            </tr>
            <?php
            foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) { ?>
                <?= $v ?>
            <?php } ?>
        </table>


        <h3> 룸키퍼 </h3>
        <table style='border: solid 1px black;'>
            <tr>
                <th>ID</th>
                <th>직원명</th>
                <th>휴대전화</th>
            </tr>
            <?php
            foreach (new TableRows(new RecursiveArrayIterator($stmt2->fetchAll())) as $k => $v) { ?>
                <?= $v ?>
            <?php } ?>
        </table>

        <hr />
    </section>

    <!-- 직원선택 : 출근한 룸키퍼만 나타남 -->
    <!-- 청소배정 : 직원을 선택하고 해당 방 번호를 클릭하면 해당 직원에게 청소가 배정 됨 -->
            <!-- 클릭할 수 있는 버튼은 청소를 해야하는 방 -->
            <!-- 클릭할 수 없는 버튼은 이미 청소되었거나 청소가 할당이 된 방 -->
    <!-- 불만조치 배정 : 직원을 선택하고 배정을 누르게 되면 해당 직원에게 고객 불만사항이 넘어감 -->
            <!-- 불만조치는 접수원으로부터 받은 내용으로 매니저가 룸키퍼에게 조치하도록 할당 -->
    <section>
        <h2> 청소배정 및 고객 불만사항 </h2>

        <h3> 직원선택 </h3>
        <select id='staff_list'>
            <?php for ($i = 0; $i < count($result2); $i++) { ?>
                <option value='<?= $result2[$i]['id'] ?>'> <?= $result2[$i]['id'] ?> </option>
            <?php } ?>
        </select>

        <h3> 청소배정 </h3>
        <form action='cleaning.php' method='POST'>
            <table>
                <?php foreach ($room as $floor => $bundle) { ?>
                    <tr>
                        <?php foreach ($room[$floor] as $seq => $rnumber) { ?>
                            <?php if ($result3[$seq]['clean'] == 0 && $result3[$seq]['isEmpty'] == 1) { ?>
                                <td>
                                    <input type='hidden' name='selected_staff' value='staff'></input>
                                    <button type='submit' name='rnumber' value='<?= $rnumber ?>'> <?= $rnumber ?> </button>
                                </td>
                            <?php } else { ?>
                                <td><button type='submit' name='rnumber' disabled> <?= $rnumber ?> </button></td>
                            <?php } ?>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </form>

        <h3> 불만조치를 위한 직원배정 </h3>
        <form action='complainRecept.php' method='POST'>
            <table style='border: solid 1px black;'>
                <tr>
                    <th>접수시간</th>
                    <th>방번호</th>
                    <th>접수직원</th>
                    <th>유형</th>
                    <th>세부사항</th>
                    <th>배정</th>
                </tr>
                <?php
                for ($i = 0; $i < count($result); $i++) {
                    if ($result[$i]['recept'] == 0) { ?>
                        <tr>
                            <th><?= $result[$i]["ttime"] ?></th>
                            <th><?= $result[$i]["rnumber"] ?></th>
                            <th><?= $result[$i]["staff_id"] ?></th>
                            <th><?= $result[$i]["complainment"] ?></th>
                            <th><?= $result[$i]["detail"] ?></th>
                            <th>
                                <input type='hidden' name='selected_staff' value='staff'></input>
                                <button type='submit' name='recept' value='<?= $result[$i]['code'] ?>'>배정</button>
                            </th>
                        </tr>
                <?php }
                } ?>
            </table>
        </form>
        <hr />
    </section>

    <!-- 오늘로부터 이틀 전까지의 직원들(객실관리인, 접수원)의 모든 업무 로그 출력 -->
    <section>
        <h2> 업무 현황</h2>
        <table style='border: solid 1px black;'>
            <tr>
                <th>시간</th>
                <th>방번호</th>
                <th>담당직원</th>
                <th>업무내용</th>
            </tr>
            <?php
            foreach (new TableRows(new RecursiveArrayIterator($stmt5->fetchAll())) as $k => $v) { ?>
                <?= $v ?>
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