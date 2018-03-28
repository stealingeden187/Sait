
<?php
@$Lname=$_POST['Lname'];
@$family=$_POST['family'];
@$address=$_POST['address'];
@$seria=$_POST['seria'];
@$nomer=$_POST['nomer'];
 $dbc=mysqli_connect('localhost','Admin1','admin1','testdrive')
            or die('ошибка соеденение с Mysql-сервером');
        mysqli_query($dbc, 'set names utf8'); // кириллица базы данных


if (is_numeric($seria))  // is_numeric Проверяет, является ли данная переменная числом
{

    if(is_numeric($nomer))
    {
        echo "Данные приняты";


       $id=rand(1, 100);
        $number=array(1,2,4,5,6,7,9,10,34,345,56,54,34,23,35,56,78,54,89,21,43,56,76,87,45,89,23,34);
        shuffle($number);// функция  shuffle перетасовывает массив
        $id=$id*$number[1];


        $query="INSERT INTO `testdr` (`ID`,`Name`, `Family`,`Email`,`Nomer`,`Seria`)".
            "VALUES ('$id','$Lname','$family','$address','$nomer','$seria')";

      $result=mysqli_query($dbc,$query)
          or die('Ошибка выполнения запроса к базе данных 1');





            }
    }



else  {
    echo "серия или номер  паспорта неправильно введены";
}
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
