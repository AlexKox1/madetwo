<!doctype html>

<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <title>СпБ Монтаж</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">


    <!--css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar-menu" data-offset="110">


<!-- Предзагрузка -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>

<div class="coulmn">
    <!--домашняя страница-->


    <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">


        <!-- шапка -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <div class="widget_brand m-top-20">
                    <a href="" class="text-uppercase">"СПБМонтаж"</a>
                </div>
            </a>

        </div>
        <!-- меню навигации -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Домой</a></li>
                <li><a href="index.php">Главная страница</a></li>
            </ul>
        </div>
</div>
<div class="db_connection">
    <?php
    session_start();

    function Print_Table(){
        $connect = mysqli_connect('localhost', 'root', '1234', 'schema1');
        $query = "SELECT * FROM contacts";
        $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error());
        $rows = mysqli_num_rows($result);
        echo "<table border='1'><tr><th>Id</th><th>Имя</th><th>Почта</th><th>Контактный телефон</th><th>Причина обращения</th><th>Сообщение оператору</th></tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 6; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        mysqli_close($connect);
    }

    ?>
</div>
<section id="home" class="home ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="main_home">
                <div class="col-md-12">
                    <div class="hello_slid">

                        <div class="table">
                            <form method="post" name="tableform">
                                <?php Print_Table() ?>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer id="contact" class="footer action-lage bg-black p-top-0">

    <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
        <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
                Сделано на
                <a target="_blank">Boostrap</a>
                2020. Все права защищены
            </p>
        </div>
    </div>
</footer>




</div>

<!-- файлы js -->

<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/bootsnav.js"></script>



<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
