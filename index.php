<?php
          // Configure Path To Json | Choose names like passwords and configure read permissions to secure them
          $logFilePath = 'logFile.json';
          // Configure Data To Log
          $logData = array(
                    "user" => $_SERVER['HTTP_USER_AGENT'],
                    "time" => date("Y.m.d H:i:s")
          );
          // Log [Start]
          $logFile = json_decode(file_get_contents($logFilePath), true);
          array_push($logFile, json_encode($logData, JSON_FORCE_OBJECT));
          $logFile = json_encode($logFile, JSON_PRETTY_PRINT);
          file_put_contents($logFilePath, $logFile);
          // Log [End]
?>
<!-- THE REST IS JUST STYLING -->
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PHP Visitor Log</title>
          <style>
                    * {
                              margin: 0;
                              padding: 0;
                              box-sizing: border-box;
                              font-family: 'Helvetica Neue', sans-serif;
                    }
                    body {
                              min-height: 100vh;
                              display: flex;
                              flex-direction: column;
                              align-items: center;
                              justify-content: center;
                              gap: 20px;
                              color: #FFF;
                              background: #000;
                    }
                    h1 {
                              color: #CA3216;
                    }
          </style>
</head>
<body>
          <h1>No Error? So everything went right!</h1>
          <p>Don't forget: this file must have writing permission on the JSON.</p>
</body>
</html>