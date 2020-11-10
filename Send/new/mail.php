<?php
function adopt($text) {
    return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$admin_email  = 'admin_email';
header('Content-Type: application/json');
$json = [];

$required_keys = ['email','name', 'message','project_name','form_subject'];

foreach($required_keys as $key) {
   if (empty($_POST[$key])) {
        $json['success'] = false;
        $json['error'] = 'Verify namne,phone,email,project_name,form_subject are passed to the form';
        break;
   }
}

if(!$json['error']) {
	$project_name = trim($_POST["project_name"]);
	$form_subject = trim($_POST["form_subject"]);

    $valid_keys = ['email','name', 'message'];

	foreach ( $valid_keys as $index => $key ) {
			$message .= "
			" . ( ($index % 2) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST[$key]}</td>
		</tr>
		";
    }

    $message = "<table style='width: 100%;'>$message</table>";

    $headers =
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Type: text/html; charset=utf-8'. "\r\n" .
    'From: SERVER EMAIL' . "\r\n" .
    'Reply-To: SERVER EMAIL' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    $result = mail($admin_email, adopt($form_subject), $message, $headers );
    $json['success']  = $result;
}

echo json_encode($json);
