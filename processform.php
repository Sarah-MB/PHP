

<?php
             
 if(isset($_POST['first_name']
 ))
{
    $gender = $_POST['gender'];
    $term = $_POST['terms'];
$data=$_POST['first_name'] . ' , ' . $_POST['last_name']. ' , ' . $_POST['email']. ' , ' . $_POST['department']. ' , ' . $gender . ' , ' . $_POST['message']. ' , ' . $term . "\n";
$fp = fopen('contact.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>

