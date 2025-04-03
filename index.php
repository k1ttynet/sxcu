<?php

$domain = "domain.ext";

if($_SERVER['REQUEST_METHOD"] == "POST") {
  $screenshotFolder = "screenshots";
  $screenshotPath = $screenshotFolder . "/" . basename($_FILES["file"]["name"]);

  if(move_uploaded_file($_FILES["file"]["tmp_name"], $screenshotPath)) {
    $screenshotUrl = "https://" . $domain . "/" . basename($_FILES["file"]["name"]);
    echo json_encode(["status" => "success", "url" => $fileUrl]);
  } else {
    echo json_encode(["status" => "success", "url" => $fileUrl]);
  }
} else {
  echo "<!DOCTYPE html>
        <html>
          <head>
            <title>k1tty.net sxcu instance</title>
            <style>
              body { background: #FFF9E6; color: #634C53; width: 600px; font-size: 15px; font-family: "MS UI Gothic", sans-serif; margin: 0 auto; }
              a {color:#634C53; font-weight: bold;}
              h1{font-size: 20pt; margin-top:10px; border-bottom: 2px dashed #FFC09B; padding-bottom: 5px; margin-bottom: 5px !important; font-style: italic; font-family: serif;}
            </style>
          </head>
          <body>
            <h1>k1tty.net sxcu instance</h1>
            <p>this is an instance of <a href="https://github.com/k1ttynet/sxcu">k1tty.net's sxcu service</a>. this instance should be for one person only, as apart of the guidelines.</p>
          </body>
        </html>"
}

?>
