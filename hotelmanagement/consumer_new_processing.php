<?php
    session_start();
    if(isset($_SESSION["cusno"]))
    {    
    if($_SESSION["cusno"]==session_id())
    {

    include("./include/dbconnection.php"); 
    include("./include/functions.php"); 
    //  address,email(identify @)->anything || name,distibutor->string only || alphnumeric->pan || num-phn
        $any=array();
        $strings=array();
        $alphanumeric=array();
        $number=array();
        $numbers=array();
        $any[0]=$_POST["add"];
        $strings[0]=$_POST["distributor"];
        $strings[1]=$_POST["name"];
        $any[1]=$_POST["email"];
        $alphanumeric[0]=$_POST["pan"];
        $numbers[0]=$_POST["paswd"];
        $number[0]=$_POST["phone"];
        $cusno=rand(10000000,9999999999);
        //strval ans intval are boolean,if validation is true->TRUE,false->FALSE
        $strval=  sf_apha($strings);
        $intval=sf_intval($number);
        $an=sf_alphanumeric($alphanumeric);
        
?>        
     <?php
     //escapinng incoming string avoiding sql injection
        $address=  mysqli_real_escape_string($connection,$any[0]);
         $distributor=  mysqli_real_escape_string($connection,$strings[0]);
          $name=  mysqli_real_escape_string($connection,$strings[1]);
           $email=  mysqli_real_escape_string($connection,any[1]);
            $phone=  mysqli_real_escape_string($connection,$number[0]);
             $pan=  mysqli_real_escape_string($connection,$alphanumeric[0]);
             $pass= mysqli_real_escape_string($connection,$numbers[0]);
     ?> 
     <?php
        //validation process query given to sql only when validation succeds
        if($strval && $intval && $an)
    {      
       $query="insert into client(distributor,cusadd,cusname,cusmail,cusphn,cuspan,cuspass,cusno) 
            values('$distributor','$address','$name','$email',$phone,'$pan','$pass',$cusno);";
        $result=mysqli_query($connection,$query);
        if(isset($result))
        {
            header("Location: ./new_consumer_receipt.php");
        }
        else
        {
            echo "wrong entry";
        }
    } 
    else
    {
        echo "field type mismatch";
        header("Location: ./new_consumer.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Processing</title>
    </head>
    <body>
        <?php
            
        ?>
    </body>
</html>
<?php
    mysqli_close($connection);
 }
    else
    {
        echo "get out";
    }
    }
 else 
    {
      echo "get out";
    }
?>
