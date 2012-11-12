<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| EMAIL CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your eamil.
|
| For complete instructions please consult the 'Email Class' page of the User Guide. http://codeigniter.com/user_guide/libraries/email.html
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|   ['useragent']       The "user agent".
|   ['protocol']        mail, sendmail, or smtp - The mail sending protocol.
|   ['mailpath']        The server path to Sendmail.
|   ['smtp_host']       SMTP Server Address.
|   ['smtp_user']       SMTP Username.
|   ['smtp_pass']       SMTP Password.
|   ['smtp_port']       SMTP Port.
|   ['smtp_timeout']    SMTP Timeout (in seconds).
|   ['wordwrap']        TRUE/FALSE - Enable word-wrap.
|   ['wrapchars']       Character count to wrap at.
|   ['mailtype']        text or html - Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
|   ['charset']
|   ['validate']        TRUE/FALSE - Whether to validate the email address.
|   ['priority']        1, 2, 3, 4, or 5 - Email Priority. 1 = highest. 5 = lowest. 3 = normal.
|   ['crlf']            "\r\n" or "\n" or "\r" - Newline character. (Use "\r\n" to comply with RFC 822).
|   ['newline']         "\r\n" or "\n" or "\r" - Newline character. (Use "\r\n" to comply with RFC 822).
|   ['bcc_batch_mode']  TRUE/FALSE - Enable BCC Batch Mode.
|   ['bcc_batch_size']  Number of emails in each BCC batch.
/
*/

$config['useragent']        = 'CodeIgniter';
$config['protocol']         = 'smtp';
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'mail.propertyboss.com';
$config['smtp_user']        = 'noreply@propertyboss.com';
$config['smtp_pass']        = 'river06!';
$config['smtp_port']        = 25;
$config['smtp_timeout']     = 5;
$config['wordwrap']         = TRUE;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';
$config['charset']          = 'utf-8';
$config['validate']         = FALSE;
$config['priority']         = 3;
$config['crlf']             = "\r\n";
$config['newline']          = "\r\n";
$config['bcc_batch_mode']   = FALSE;
$config['bcc_batch_size']   = 200;