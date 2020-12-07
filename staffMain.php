    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel</title>
    <title>Martine</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
</head>
<style>
    body {
        background-color : #f5f6f7;
    }
</style>
<body>
    <section class="login section_padding">
            <div class="container">
                <form action="login.php" method="POST">
                 <div class ="row justify-content-center" style="margin-left:100px">
                    <a href = "staffMain.php"><h1>B Hotel</h1></a> <h2>for Staff</h2>
                </div>
                 <div class ="row justify-content-center">
                    <input type="text" id="id" name="ID" class ="input_row" placeholder = "ID">
                </div>
                 <div class ="row justify-content-center">
                    <input type="PASSWORD" id="pw" name="PW" class = "input_row" placeholder="password">
                </div>
                <div class ="row justify-content-center">
                    <button class ="btn_1" id="login"> Sign in </button>
                </div>
                </form>
            <div class ="row justify-content-center">
            <p>For new registers, click&nbsp;<a href="signUp.php">here.</a></p>
    </section>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/sign.js"></script>


</body>

</html>