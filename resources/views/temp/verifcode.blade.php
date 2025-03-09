<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            /*background-color: #6738ff;*/
            background-color: #eedc82;
            /* Indigo theme */
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
        }

        .email-header img {
            max-height: 70px;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            flex-grow: 1;
            text-align: left;
            padding-left: 10px;
        }

        .email-body {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }

        .email-body h2 {
            margin-top: 0;
            color: #4B0082;
        }

        .email-footer {
            text-align: center;
            padding: 15px;
            background: #f9f9f9;
            color: #555555;
            font-size: 14px;
        }

        .email-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4B0082;
            /* Indigo theme */
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .email-button:hover {
            background-color: #3A006F;
        }
          @media (min-width: 768px) {
            .appname {
                padding-left: 20%;
                margin-left: 20px;
                margin-top: 10px;
            }
        }
        
         @media (max-width: 768px) {
            .appname {
                padding-left: 2%;
                margin-left: 5px;
                margin-top: 15px;
            }
        }
        
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="email-header"
            style="display:flex; flex-direction:row; justify-content:space-between; align-items:center;">
            <img src="{{$url}}/storage/{{ $settings->appLogo }}" alt="Logo" style="margin-right:20px;">
            <h3 class="appname"> {{ $settings->appName }} </h3>
        </div>

        <!-- Body Section -->
        <div class="email-body" style="text-align: center;">
            <!--<h2 style="color: silver;"></h2>-->
            <h3 style="color: silver;">Verification Code</h3>
            <h1 style="letter-spacing:10px;">{{ $body }}</h1>
            
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            <p>Thank you for using our service!</p>
        </div>
    </div>
</body>

</html>