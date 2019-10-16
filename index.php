<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="bootstrap.min.css"/>
</head>

<body>


<div class="container my-5">
    <form class="text-center">
        <input class="form-control my-2" type="number" name="num1"/>
        <input class="form-control my-2" type="number" name="num2"/>
        <button class="btn btn-danger" type="submit" name="submit">Submit</button>
    </form>
</div>



    <?php

if (isset($_GET['submit']))
 {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 * $num2; 
  
if ($_GET['num1'] <= 0 or $_GET['num2'] <= 0 )
{
 echo "Your order is error <br> Please try again";
}
elseif ($_GET['num1'] >= 1000 )
{
    $after1=$num1 * $num2 - ($sum * 0.15);
    $before1=$num1 * $num2 ;
    echo "Price After Dicount =".$after1."<br>";
    echo "Price before Dicount =".$before1."<br>";
    
}
elseif ($_GET['num1'] < 1000)
{
    $after2 = $num1 * $num2 - ($sum * 0.10);
    $before2 = $num1 * $num2;
    echo "Price After Dicount =".$after2."<br>";
    echo "Price Before Dicount =".$before2."<br>";
}

}
else {
    echo "Please enter Your price product please";
}
?>



  


</body>

</html>
