<<<<<<< 93f4240bead15f8bc5e915901ff06d20feb55ca8
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','root') or die(mysql_error());
 mysql_select_db('lockscreen') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from login where name='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']= $name;
    header('location:index.php');
   }
   else
   {
    $msg =  'Du har skrevet feil Brukernavn eller Passord, vennligst prøv igjen. ';
	  header('location:lockscreen.php');
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

=======
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','root') or die(mysql_error());
 mysql_select_db('lockscreen') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from login where name='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']= $name;
    header('location:index.php');
   }
   else
   {
    $msg =  'Du har skrevet feil Brukernavn eller Passord, vennligst prøv igjen. ';
	  header('location:lockscreen.php');
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

>>>>>>> V2
