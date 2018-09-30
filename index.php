<?php

use Twilio\Rest\Client;
  function sendSMS() {
      require_once 'vendor/autoload.php';

      $sid    = "################################"; //add sid from the twilio account
      $token  = "################################"; //add auth token from the twilio account
      $twilio = new Client($sid, $token);

      $message = $twilio->messages
          ->create("############", // add number to send message to
              array(
                  "from" => "###########", // add twilio given number
                  "body" => "Hello from Kinnari Jasoliya CS 643 Fall 2018"
              )
          );

      print("SMS API response=====>"+$message->sid);
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }
    </style>
</head>
<body>

<h2>SMS with Heroku</h2>
<p>SMS Details</p>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-50">
                        <h3>SMS details</h3>
                        <label for="to"><i class="fa fa-comments"></i> To : </label>
                        <label for="from"><i class="fa fa-comments-o"></i> From : </label>
                        <label for="email"><i class="fa fa-list"></i> Body : Hello from Kinnari Jasoliya CS 643 Fall 2018</label>
                    </div>
                </div>
                <input onclick="<?php sendSMS(); ?>" type="submit" value="SMS sent" class="btn" disabled>
            </form>
        </div>
    </div>
</div>

</body>
</html>



