 <!-- <?php
    $connect = mysqli_connect("localhost","root", "", "search-1") or die("error");
    $query = mysqli_query($connect, "SELECT * FROM test");
    while($row = mysqli_fetch_assoc($query)) echo "<h1>".$row['img']."</h1><p>".$row['text']."</p><br>";
?>  -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Document</title>
 </head>
 <body>

 
                    <form method="post">
                    <input type="text" name ="search" class="header__input" placeholder="Книга или автор">
                    <button name="submit" type="submit">Поиск</button>
                    </form>
                   
                  
 <?php
 if(isset($_POST['submit'])){
    //  $search = explode(" ",$_POST['search-1']) ;
    //  $count = count($search);
    //  $array = array();
    //  $i = 0;
    //  foreach($search as $key) echo $key."<br>";
    //  $query = mysqli_query($connect, "SELECT * FROM `test` WHERE `title` LIKE '%$search%' OR `test` LIKE '%$search%' ");
    //  while($row = mysqli_fetch_assoc($query)) echo "<h1>".$row['img']."</h1><p>".$row['text']."</p><br>";
 }
 ?> 
   
 </body>
 </html>
 
 
