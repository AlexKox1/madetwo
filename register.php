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

        </div>

        <?php
        include ('connect.php');
        if(isset($_POST["register"])){
            if(!empty($_POST['u_name']) && !empty($_POST['u_nicename']) && !empty($_POST['u_email']) && !empty($_POST['u_pass'])) {
                $name=mysqli_real_escape_string($connect,$_POST['u_name']);
                $nicename=mysqli_real_escape_string($connect,$_POST['u_nicename']);
                $email=mysqli_real_escape_string($connect,$_POST['u_email']);
                $pass=mysqli_real_escape_string($connect,$_POST['u_pass']);
                $pass = md5($pass);
                $query=mysqli_query($connect,"SELECT * FROM `useri` WHERE nicename='{$nicename}'");
                $numr=mysqli_num_rows($query);
                if($numr==0)
                {
                    $sql_q="INSERT INTO `useri`
 (name,nicename,email,pass)
 VALUES('{$name}','{$nicename}', '${email}', '{$pass}')";
                    $res=mysqli_query($connect,$sql_q);
                    if($res){
                        echo "Аккаунт успешно создан";
                    } else {
                        echo "Не удалось добавить информацию";
                    }
                } else {
                    echo "Этот ник занятый. Попробуйте другой!";
                }
            }else {
                //$info = "Все поля обязательны для заполнения!";
                echo "Все поля обязательны для заполнения!";
            }
        }

        ?>

        <section id="home" class="home bg-black fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home">
                        <div class="col-md-12">
                            <div class="hello_slid">

                                <form action="register.php" method="post" name="registerform">
                                    <div class="col-md-6">
                                           <div class="form-group">
                                            <td>
                                                <input type="text" class="form-control element-form" name="u_name"  placeholder="Введите имя"/>
                                            </td>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <td>
                                                <input type="text" class="form-control element-form" name="u_nicename" placeholder="Введите логин"/>
                                            </td>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" class="form-control element-form" name="u_email" placeholder="Введите электронную почту">
                                                </td>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <td>
                                                        <input type="password" class="form-control element-form" name="u_pass" placeholder="Введите пароль">
                                                    </td>
                                                </div>
                                            </div>

                                    <div class="home_btns m-top-5">
                                    <button class="btn btn-primary m-top-20" type="submit" name="register">Регистрация</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>-->

            <!--Сообщение для пользователя-->
            <section id="action" class="action bg-blue roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Уже зарегистрированы?</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="author.php" class="btn btn-default">Войдите</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



			<!--Блок 6-->
            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">О нас</h5>
                                    <p class="m-top-20">Компания ООО "СПБМонтаж" на рынке с 2002 года и имеем большой опыт в работе как с частными клиентами,
														так и с крупными строительными компаниями.</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Расположение :</h6>
                                            <p>Дворцовая пл., 2, Санкт-Петербург, 190000</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Телефон :</h6>
                                            <p>+1 2345 6789</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email :</h6>
                                            <p>@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Последние новости</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-1.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>-</p>
                                            <a href="">10 Апреля 2020</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-2.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>-</p>
                                            <a href="">10 Апреля 2020</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-3.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>-</p>
                                            <a href="">10 Апреля 2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                            if (isset($_POST['emailSubmit'])) {

// Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                $conn->set_charset("utf8");
// Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $email = $_POST['emailLabel'];



                                $sql = "INSERT INTO `subscribes_email` (`email`) VALUES ('$email')";


                                if ($conn->query($sql) === TRUE) {
                                  echo "Вы успешно подписались на новости! Следите за новостями и скидками через ваш почтовый ящик!";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }


                                $conn->close();
                            }
                            ?>

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Подписаться на рассылку</h5>
                                    <form class="form-inline m-top-30" action="index.php" method="POST">

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailLabel" name= "emailLabel" placeholder="Email">
                                            <button type="submit" class="btn text-center" id="emailSubmit" name="emailSubmit" ><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a href="" class="text-uppercase">"СПБМонтаж"</a>
                                        <p>ООО "СПБМонтаж" станет лучшим выбором для тех,
										   кто ищет качественное исполнение заказа, быстрый сервис,
										   а так же отзывчивую поддержку</p>
                                    </div>
                                    <ul class="list-inline m-top-30">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a> -</li>                                       
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Сделано на                                                      
                            <a target="_blank">Bootstrap</a> 
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