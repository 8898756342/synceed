<?php


if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $mailfrom= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $mailto = "info@synceedus.com";
    $headers = "From: ".$mailfrom;
    $txt="From:".$name.".\n\n".$message.".\n\n".$subject;


    mail($mailto,$mailfrom, $txt, $headers);
    header("location: thank.html?mailsend");

}
else{
    echo" fail ";
}

?>