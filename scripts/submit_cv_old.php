<?php
/*
 * submit_cv.php - Alex Mattelaer 20151012
 * 
 * Used as a generic POST destination for html forms that submit data and an uploaded file
 * The results will be emailed to the address specified below ("TargetEmailAddress")
 * 
 * Fields on the form can be called anything you like, but the document upload field
 * MUST be called FileUpload and must have a type of file:
 * 
 * <input type="file" name="FileUpload" id="FileUpload" required=" />
 * 
 * The HTML form itself must ahve the following attributes (at least):
 * <form method="post" enctype="multipart/form-data" action="../scripts/submit_cv.php">
 */

// -------------- Settings you can customise --------------------------------------------------------------------------

// Email address to send the information to
$strTargetEmailAddress = 'yvette@adogreen.com';

// Default subject for the email
$strEmailSubject = 'File uploaded on '.$_SERVER['HTTP_HOST'].' from page: '.basename(__FILE__);

// Permitted file name extensions
$arrValidExtensions = array('doc', 'docx', 'pdf', 'odt');

// Maximum file size (in Megabytes)   
$intMaxFileSizeMb = 50;

// Temporary folder to store uploaded documents - path must end with /
$strFileUploadPath = '/var/www/vhosts/adogreen.koneqt.com/uploads/';

// URL to redirect to if the upload was successful
$strRedirectUrlSuccess = '../index.html';

// URL to redirect to if the upload failed
$strRedirectUrlFailure = '../index.html';

// -----------------------------------------------------------------------------------------------------------------

// Uncomment the next 2 lines for debugging info
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// ini_set('display_errors', '1');

if (isset($_POST)) {

    $arrTemp = explode('.', $_FILES['FileUpload']['name']);
    $strExtension = strtolower(end($arrTemp));
    $strProcessError = '';
    if ($_FILES['FileUpload']['size'] > $intMaxFileSizeMb * 1000000) {
        $strProcessError.= 'This file is too large to be processed (maximum '.$intMaxFileSizeMb.'Mb)';
    }
    if (!in_array($strExtension, $arrValidExtensions)) {
        $strProcessError.= 'This type of file cannot be processed (must be: ' . implode(',', $arrValidExtensions) . ')';
    }
    // Save file if valid
    if ($strProcessError == '') {
        $strInputFileName = GenerateRandomString(8) . '.' . $strExtension;
        $strTargetPath = $strFileUploadPath . $strInputFileName;
        if (move_uploaded_file($_FILES['FileUpload']['tmp_name'], $strTargetPath)) {
            $strEmailBody = "The following form was submitted:\r\n\r\n";            
            
            foreach ($_POST as $key => $value){
                 $strEmailBody.= $key . ' => '.filter_input(INPUT_POST, $key,FILTER_SANITIZE_STRING)."\r\n";    
            }
            $strEmailBody.="\r\n\r\nThe physical uploaded file name is: ".$strInputFileName;
            
            if (SendEmail($strTargetEmailAddress,$strEmailSubject,$strEmailBody,$strTargetPath,$_FILES['FileUpload']['name'])){
                header('Location:' . $strRedirectUrlSuccess);
                die;
            } else {
                $strProcessError.= 'Could not send email';
            }
        } else {
            $strProcessError.='Could not process file';
        }
    }
    // If we got this far, there must have been a problem ...
    header('Location:' . $strRedirectUrlFailure.'?message='.$strProcessError);
    
} 

// END //

// General functions -------------------------------------------------------------------------------

function GenerateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// $strTargetEmailAddress,$strEmailSubject,$strEmailBody,$strTargetPath


function SendEmail($strTargetEmailAddress,$strEmailSubject,$strEmailBody,$strTargetPath,$strFileName) {
    $file = $strTargetPath;
    $mailto = $strTargetEmailAddress;
    $subject = $strEmailSubject;
    $message = $strEmailBody;
    $from_mail = 'noreply@koneqt.com';
    $replyto = 'noreply@koneqt.com';    
    $filename = $strFileName;
    
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
    if (mail($mailto, $subject, "", $header)) {
        //echo "mail send ... OK"; // or use booleans here
        return TRUE;
    } else {
        // echo "mail send ... ERROR!";
        return FALSE;
    }
}




