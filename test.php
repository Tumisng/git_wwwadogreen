Get application info
Load Job info into an array

Create Candidate = FALSE
Create Application = FALSE
Upload CV = FALSE
Duplicate Application Email = FALSE

Check for duplicate email
If (No duplicate Email) {
    Create Candidate = TRUE
    Create Application = TRUE
    Successful Application Email = TRUE
}
if (Duplicate Email) {
    Check for Duplicate Application
    If (duplicate Application) {
        Do nothing.
        Duplicate Application Email = TRUE
    } elseif (no duplication application) {
        Copy current fields to Description field - Update Current Fields
        Create application = TRUE
        Upload CV = TRUE
        Successful Application Email = TRUE
        
    }
}
if (UploadCV == TRUE) {
   Test Doc
   Upload Doc 
   Convert Doc 
}


Register CV
check for duplicate
if no duplicate - create candidate
if duplicate - update CV

 <?php
 include_once("class.emailer.php"); 
 include_once("class.extendedemailer.php"); 
 $xemailer = new ExtendedEmailer(); 
 $xemailer->setSender("hasin@pageflakes.com"); 
 $xemailer->addRecipients("hasin@somewherein.net");
 $xemailer->setSubject("Just a Test"); 
 $xemailer->setBody("Hi Hasin, How are you?");
 $xemailer->sendEmail();
 ?>