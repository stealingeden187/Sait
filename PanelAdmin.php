
<?php

 $dbc=mysqli_connect('localhost','Admin1','admin1','testdrive')
            or die('ошибка соеденение с Mysql-сервером');
        mysqli_query($dbc, 'set names utf8'); // кириллица базы данных


// запрос на отображение  данных из таблицы в будущем панель администратора
 $query="SELECT * FROM `testdr`";
 $result=mysqli_query($dbc,$query)
          or die('Ошибка выполнения запроса к базе данных');
while($row = mysqli_fetch_array($result)) //  mysqli_fetch_array  формирует и выдает массив по выборке из таблицы БД
{
echo "Номер: ".$row['ID']."<br>\n";
    echo "Имя: ".$row['Name']."<br>\n";
    echo "Фамилия: ".$row['Family']."<br>\n";
    echo "Почта mail: ".$row['Email']."<br>\n";
    echo "Номер паспорта: ".$row['Nomer']."<br>\n";
    echo "Серия паспорта: ".$row['Seria']."<br>\n";
};

mysqli_close($dbc);
?>
