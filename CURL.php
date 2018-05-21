<?php 

if(isset($_POST['submit']))
{
?>

<?php $ch=curl_init('api.com/?number='.$_POST['number'].'&message='.$_POST['message'].';');

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_POSTFIELDS,"");

curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);

$data = curl_exec($ch);

?><center>
<font color="red"><font color="red"><?php  echo $data;?></font><br></center><hr>
<?php
} 


<form action="" method="POST">Enter Phone Number<br><input type="text" name="number" placeholder="e.g 03xxxxxxx"><br>
  Enter Message<br><textarea  name="message"></textarea><br> 
  
  <input type="submit" value="Send  SMS" name="submit"></form>
