<?php /*
    $name       = addslashes(strip_tags($_POST['name'])); 
    $sub 		= addslashes(strip_tags($_POST['subject']));
    $email     	= addslashes(strip_tags($_POST['email'])); 
    $message    = addslashes(strip_tags($_POST['message'])); 
 
    if(empty($name) || empty($email) || empty($message) || empty($sub)){
        header("Location:form.php?empty"); 
    }
    else{

        $mail = new PHPMailer();
        $mail->IsSMTP();                                   
        $mail->Host     = "diamant.metanet.ch"; // smtp host
        $mail->Port     = "25";  // Port
        $mail->SMTPAuth = true;    
        $mail->Username = "sinanozata44@gmail.com";  //mail address
        $mail->Password = "********"; //email password
        $mail->From     = "azo@azizozbek.ch"; // from mail address
        $mail->Fromname = "Azizullah Ozbek"; // From Name
        $mail->AddAddress("azo@azizozbek.ch","Azizullah Ozbek"); //your mail address and name
        $mail->WordWrap     = 50; 
        $mail->Subject      = $sub; // Mail Subject
        $mail->Body         = "	Name : ".$name. "
                                <br>E-mail: ".$email. "
                            <br>Message: ".$message . " 
                            <br>IP : ".$ip_adress ; 
            

        $mail->AddReplyTo($email,"Contact Form");
        $mail->AddAddress('azo@azizozbek.ch');  //mail address
        $mail->IsHTML(true); 

        if($mail->Send()) 

        echo "";

    } */
?>


<?php
     if (isset($_POST['submit'])) {

        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];

        var_dump($fname,$lname,$email,$message,$subject);

        die('sa--');
      // Set your email address where you want to receive emails. 
       $to = 'sinanozata44@gmail.com';
       $subject = 'Contact Request From Website';
       $headers = "From: ".$name." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);

       echo ($send_email) ? 'success' : 'error';

  }?>