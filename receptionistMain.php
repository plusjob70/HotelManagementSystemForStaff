<!DOCTYPE html>
<?php include 'receptionist.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 로그인시 직원이름 표시 -->
    <header>
        <h1> 접수원 메인페이지 </h1>
        <p><strong><?= $staff_name ?></strong> 접수원님 환영합니다. <a href="logout.php">로그아웃</a></p>
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

    <main>

        <!-- 고객의 예약현황을 출력 -->
        <!-- 체크인이 오늘안 예약부터 모든 예약정보를 보여줌 -->
        <section>
            <h2>예약현황</h2>
            <table style='border: solid 1px black;'>
                <tr>
                    <th>예약번호</th>
                    <th>고객명</th>
                    <th>고객아이디</th>
                    <th>호실</th>
                    <th>어른</th>
                    <th>어린이</th>
                    <th>전화번호</th>
                    <th>체크인</th>
                    <th>체크아웃</th>
                </tr>
                <?php
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) { ?>
                    <?= $v ?>
                <?php } ?>
            </table>
            <hr />
        </section>

        <!-- 접수원은 오늘 예정 되어있는 체크인을 확인할 수 있음 -->
        <!-- 체크인 버튼을 누르면 해당 예약정보에 있는 방을 체크인할 수 있음 -->
        <section>
            <h2>예정된 체크인</h2>
            <table style='border: solid 1px black;'>
                <tr>
                    <th>예약번호</th>
                    <th>고객명</th>
                    <th>고객아이디</th>
                    <th>호실</th>
                    <th>룸타입</th>
                    <th>어른</th>
                    <th>어린이</th>
                    <th>전화번호</th>
                    <th>체크인</th>
                    <th>체크아웃</th>
                    <th>체크인하기</th>
                </tr>
                <?php
                for ($i = 0; $i < count($result2); $i++) { ?>
                    <tr>
                        <th><?= $result2[$i]['code'] ?></th>
                        <th><?= $result2[$i]['cname'] ?></th>
                        <th><?= $result2[$i]['id'] ?></th>
                        <th><?= $result2[$i]['rnumber'] ?></th>
                        <th><?= $result2[$i]['rtype'] ?></th>
                        <th><?= $result2[$i]['nAdults'] ?></th>
                        <th><?= $result2[$i]['nKids'] ?></th>
                        <th><?= $result2[$i]['phone'] ?></th>
                        <th><?= $result2[$i]['checkIn'] ?></th>
                        <th><?= $result2[$i]['checkOut'] ?></th>

                        <?php
                        if ($result2[$i]['isEmpty'] == 1 && $result2[$i]['clean'] == 1) { ?>
                            <th>
                                <form action='checkin.php' method='POST'>
                                    <button type='submit' name='checkin' id='checkin' value='<?= $result2[$i]['rnumber'] ?>'>체크인</button>
                                </form>
                            </th>

                        <?php } else { ?>
                            <th><button type='submit' name='checkin' id='checkin' disabled>체크인</button></th>
                        <?php } ?>
                    </tr>

                <?php } ?>

            </table>
            <hr />
        </section>

        <!-- 오늘 예정된 체크아웃을 확인할 수 있음 -->
        <!-- 얼리 체크아웃을 고려하여 체크아웃이 예정되어 있지 않은 날도 체크아웃 가능 -->
        <!-- 체크아웃 버튼을 누르면 방을 체크아웃할 수 있음-->
        <section>
            <h2>예정된 체크아웃</h2>
            <table style='border: solid 1px black;'>
                <tr>
                    <th>예약번호</th>
                    <th>고객명</th>
                    <th>고객아이디</th>
                    <th>호실</th>
                    <th>룸타입</th>
                    <th>어른</th>
                    <th>어린이</th>
                    <th>전화번호</th>
                    <th>체크인</th>
                    <th>체크아웃</th>
                    <th>체크아웃하기</th>
                </tr>
                <?php
                for ($i = 0; $i < count($result3); $i++) {
                    if ($result3[$i]["isEmpty"] == 0) { ?>
                        <tr>
                            <th><?= $result3[$i]["code"] ?></th>
                            <th><?= $result3[$i]["cname"] ?></th>
                            <th><?= $result3[$i]["id"] ?></th>
                            <th><?= $result3[$i]["rnumber"] ?></th>
                            <th><?= $result3[$i]["rtype"] ?></th>
                            <th><?= $result3[$i]["nAdults"] ?></th>
                            <th><?= $result3[$i]["nKids"] ?></th>
                            <th><?= $result3[$i]["phone"] ?></th>
                            <th><?= $result3[$i]["checkIn"] ?></th>
                            <th><?= $result3[$i]["checkOut"] ?></th>
                            <th>
                                <form action='checkout.php' method='POST'>
                                    <input type='hidden' name='code' value='<?= $result3[$i]["code"] ?>'></input>
                                    <input type='hidden' name='cname' value='<?= $result3[$i]["cname"] ?>'></input>
                                    <input type='hidden' name='id' value='<?= $result3[$i]["id"] ?>'></input>
                                    <input type='hidden' name='rnumber' value='<?= $result3[$i]["rnumber"] ?>'></input>
                                    <input type='hidden' name='phone' value='<?= $result3[$i]["phone"] ?>'></input>
                                    <input type='hidden' name='checkIn' value='<?= $result3[$i]["checkIn"] ?>'></input>
                                    <input type='hidden' name='checkOut' value='<?= $result3[$i]["checkOut"] ?>'></input>
                                    <button type='submit' value='checkout'>체크아웃</button>
                                </form>
                            </th>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
            <hr />
        </section>
    </main>

    <!-- 고객의 불만을 접수할 수 있는 섹션 -->
    <!-- 방번호 입력후 불만유형을 선택하고 불만에 대한 세부내용을 쓰면 됨 -->
    <!-- 접수된 불만사항은 매니저에게 넘어감 -->
    <footer>
        <h2>불만접수</h2>
        <form action='complain.php' method='POST'>
            <p>방번호</p><input type='text' id='rnumber' name='rnumber'>
            <p>유형</p>
            <div class='field'>
                <select name='complainment'>
                    <option value='더러움'>더러움</option>
                    <option value='소음'>씨끄러움</option>
                    <option value='고장'>고장남</option>
                    <option value='기타'>기타</option>
                </select>
            </div>
            <p>세부내용</p><input type='text' id='detail' name='detail'>
            <button id='register'> 등록 </button>
        </form>
        <hr />
    </footer>

    <div>
        <?php if ($error == true) { ?>
            <p>Sorry, a database error occurred. Please try again later.</p>
            <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php } ?>
    </div>
</body>

</html>