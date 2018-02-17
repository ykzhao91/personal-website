<?php include('includes/header.php'); ?>

    <!-- Begin Text -->
    <div id="text">
    <h2>Contact Me</h2>  
    
    <p>Please contact me for more info!</p>
    
    <?php 
			
			if ( isset ($_POST['submit']) ) { // if the submit button has been clicked
				
				$mailRecipient = 'ykzhao@uw.edu'; 
				
				$mailMessage = $_POST['message']; 
				
				$mailSubject = $_POST['subject']; 
				
				$mailSender = 'From:'.$_POST['email']; 
				
				mail($mailRecipient, $mailSubject, $mailMessage, $mailSender); 
				
				print '<p>I have got your response, <strong>'.$_POST['name'].'</strong>!</p>'; 
				
			}
			
			?>
	
   	<form action="contact.php" method="post" name="contact" id="contact-form">
   		<label for="name">Name:</label>
   		<input type="text" name="name" required>
   		<label for="email">Email:</label>
		<input name="email" type="email" required>
		<label for="subject">Subject:</label>
		<select name="subject">
		<option value="General Inquiry" selected="selected">General Inquiry</option>
		<option value="Another Inquiry">Another Inquiry</option>
		<option value="Last Inquiry">Last Inquiry</option>
		</select>
		<label for="message">Message:</label>
		<textarea name="message" cols="40" rows="5"></textarea>
		<button type="submit" name="submit">Submit</button>
 
   	</form>    
   	</div>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <aside id="sidebar">
    <h2>Contact</h2>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>
    </aside>
    <!-- End Sidebar -->
    
<?php include('includes/footer.php'); ?>