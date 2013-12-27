<?php

if(!$_POST) exit;
 
		$name     = $_POST['name'];
        $email    = $_POST['email'];
        $subject  = $_POST['subject'];
        $comment_box = $_POST['comment_box'];
        $verify   = $_POST['verify'];

		if(trim($name) == '') {
        	echo '<div class="error_message">Attention! You must enter your name.</div>';
			exit();
        } else if(trim($email) == '') {
        	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
			exit();
        } else if(!isEmail($email)) {
        	echo '<div class="error_message">Attention! You have entered an invalid e-mail address, try again.</div>';
			exit();
        }
		
        if(trim($subject) == '') {
        	echo '<div class="error_message">Attention! Please enter a subject.</div>';
			exit();
        } else if(trim($comment_box) == '') {
        	echo '<div class="error_message">Attention! Please enter your message.</div>';
			exit();
        } else if(trim($verify) == '') {
	    	echo '<div class="error_message">Attention! Please enter the verification number.</div>';
			exit();
	    } else if(trim($verify) != '4') {
	    	echo '<div class="error_message">Attention! The verification number you entered is incorrect.</div>';
			exit();  
	    }
		
        if($error == '') {
        
			if(get_magic_quotes_gpc()) {
            	$comment_box = stripslashes($comment_box);
            }


         // Configuration option.
		 // Enter the email address that you want to emails to be sent to.
		 // Example $address = "joe.doe@yourdomain.com";
		 
         //$address = "example@themeforest.net";
         $address = "example@themeforest.net";


         // Configuration option.
         // i.e. The standard subject will appear as, "You've been contacted by John Doe."
		 
         // Example, $e_subject = '$name . ' has contacted you via Your Website.';

         $e_subject = 'You\'ve been contacted by ' . $name . '.';


         // Configuration option.
		 // You can change this if you feel that you need to.
		 // Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
					
		 $e_body = "You have been contacted by $name with regards to $subject, their additional message is as follows.\r\n\n";
		 $e_content = "\"$comment_box\"\r\n\n";
		 $e_reply = "You can contact $name via email, $email";
					
         $msg = $e_body . $e_content . $e_reply;

         if(mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n")) {


		 // Email has sent successfully, echo a success page.
				
		 echo "<div id='success_page'>";
		 echo "<h2>Email Sent Successfully.</h2>";
		 echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
		 echo "</div>";
		 		 
		 } else {
		 
		 echo 'ERROR!';
		 
		 }
                      
	}

function isEmail($email) { // Email address verification, do not edit.

return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
		
}
?>