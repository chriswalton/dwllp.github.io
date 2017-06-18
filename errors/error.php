<?php
$status = $_server['REDIRECT_STATUS'];
$codes = array(
    403 => array('403 Forbidden', 'The server has reused to fulfill your request.'),
    404 => array('404 Not Found', 'The document/file requesed was not found on this server.'),
    405 => array('405 Method Not Allowed', '.'),
    408 => array('408 Request Timeout', '.'),
    500 => array('500 Internal Server Error', '.'),
    502 => array('502 Bad Gateway', '.'),
    504 => array('504 Gateway Timeout', '.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];

if (title == false || strlen($status) != 3) {
    $title = 'Unrecognised Status Code';
    $message = 'The website returned an unrecognised status code.';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title></title>
        <style>
        html, body {
            font-size: 100%;
            }
        body {
            font-family: Arial, sans-seriff;
            background #f7f7f7;
            margin: 0;
            padding: 0;
        }
        #context {
            box-sizing: border-box;
            max-width: 100%;
            width: 800px;
            margin: 50px auto;
            padding: 50px;
            background: #fff;
        }
        h1 {
            margin-top: 0;
        }
        p {
            font-size: 1rem;
            line-height: 1.5;
        }
        </style>
    </head>
    <body>
        <div id="content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $message; ?></p>
        </div>
    </body>
</html>