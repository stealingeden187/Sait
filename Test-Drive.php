<!DOCTYPE html>
<html>
<head>
    <!-- ссылка bootstrap  на -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link rel="stylesheet"
           href="style.css">

<title>
    Автомобили Тойота
    </title>
    </head>
<body>


  <div class="btn-group">
  <a class="hr" href="Menu.php"><button class="btn dropdown-toggle">Главная Страница</button></a>
  <a class="hr" href="Test-Drive.php"><button class="btn dropdown-toggle">Тест-драйв</button></a>
  <a class="hr" href=""><button class="btn dropdown-toggle">Кредитование</button></a>
  <a class="hr" href=""><button class="btn dropdown-toggle">Контакты</button></a>
  <p class="qwe">тел: +7(495) 933-40-33	Тойота Центр Балабаново</p></div>

    <h1 align="center"> Регестрация на Тест-Драйв</h1>
    <p>Пожайлуйста введите свои данные на регестрацию на тест-драйв</p>
    <form   action="testd1.php" method="post" >
    <tr><td>Ваше имя</td>
    <td><input class="input-medium"  type="text" name="Lname"  ></td></tr><br>
    <tr><td>Ваша фамилия</td>
    <td><input class="input-medium"  type="text" name="family"  ></td></tr><br>
    <tr><td>Адресс электронной  почты </td>
    <td><input class="input-medium"  type="text" name="address"  ></td></tr><br>
       <tr><td>Номер паспорта </td>
    <td><input class="input-medium"  type="text" name="seria"  maxlength="4" ></td></tr><br>
     <tr><td>Серия паспорта </td>
         <td><input class="input-medium"  type="text" name="nomer" maxlength="6"  ></td></tr><p></p> <!--maxlenght -это позволяющие огранничить ввод символов  -->
       <button type="submit" class="btn">Подтвердить</button></div>




    </body>
</html>
