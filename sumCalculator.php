<?php
$num= "";
$result= "";
$cookie_name1= "num";
$cookie_value1= "";
$cookie_name2= "op";
$cookie_value2= "";
if(isset($_POST['display']))
{
    $num= $_POST['display'];
}
else
{
$num= "";
}
if(isset($_POST['submit']))
{
    $num=$_POST['display']. $_POST['submit'];
}
else
{
$num= "";
}
if(isset($_POST['op']))
{

    $cookie_value1=$_POST['display'];
    setcookie($cookie_name1,$cookie_value1,time() + (85400*30),"/");

    $cookie_value2=$_POST['op'];
    setcookie($cookie_name2,$cookie_value2,time() + (86400*30),"/");
    $num= "";
}
if(isset($_POST['equals']))
{
    $num= $_POST['display'];
    switch($_COOKIE['op'])
    {
        case "+":
            $result=$_COOKIE['num']+$num;
            break;
            case "-":
                $result= $_COOKIE['num']-$num;
                break;
                    case "/":
                        $result=$_COOKIE['num']/$num;
                        break;
                        case "x":
                            $result=  $_COOKIE['num']*$num;
                            break; 



    }
    $num=$result;
}

?>
<!doctype html>
<html>
  <head>
    <title>Calculator</title>
    <br>
    <br>
</head>
<body>
    <br> </br>
    <form action="#" method="post">
    <table border ="5">
        <tr>
            <td colspan="5">
                <input type="text" name="display" area="center" value=<?php echo $num; ?>>

            </td>
      </tr>

       <tr>
           <td><input type="submit" name="submit" value="7"></td>
           <td><input type="submit" name="submit" value="8"></td>
           <td><input type="submit" name="submit" value="9"></td>
           <td><input type="submit" name="op" value="/"></td>
       </tr> 
       <tr>
           <td><input type="submit" name="submit" value="4"></td>
           <td><input type="submit" name="submit" value="5"></td>
           <td><input type="submit" name="submit" value="6"></td>
           <td><input type="submit" name="op" value="+"></td>
       </tr> 
       <tr>
           <td><input type="submit" name="submit" value="1"></td>
           <td><input type="submit" name="submit" value="2"></td>
           <td><input type="submit" name="submit" value="3"></td>
           <td><input type="submit" name="op" value="-"></td>
       </tr> 
       <tr>
           <td><input type="submit" name="submit" value="0"></td>
           <td><input type="submit" name="delete" value="C"></td>
           <td><input type="submit" name="equals" value="="></td>
           <td><input type="submit" name="op" value="x"></td>
       </tr> 
       <tr>
           <td><input type="submit" name="start" value="ac"></td>
           
       </tr> 


   </table> 
</form>
</body>
</html>
