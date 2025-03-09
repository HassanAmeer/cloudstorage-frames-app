<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frames Shop Email</title>
    <!-- ------------------------ -->
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F4F4F4FF;
    }

    .email-container {
        max-width: 600px;
        margin: 20px auto;
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .email-header {
        /*background-color: #6738ff;*/
        /* Indigo theme */
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 5px 10px;
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
        color: indigo;
    }

    .email-footer {
        text-align: center;
        padding: 2px;
        background: black;
        color: white;
        font-size: 14px;
    }

    .themetext {
        background: linear-gradient(to top, #006f8bde 30%, rgb(41, 186, 215) 0%, rgba(0, 0, 0, 0.768) 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
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
    <!-- ----------------------------------- -->
  
    
</head>

<body>

    <div class="email-container">
        <div class="email-header"
            style="display:flex; flex-direction:row; justify-content:space-between; align-items:center;">
            <img src="{{$url}}/storage/{{ $settings->appLogo }}" alt="Logo" style="margin-right:20px;">
            <h3 class="appname"> {{ $settings->appName }} </h3>
        </div>
        <br>

        <div>{{ $body }}</div>
        
        <br>
        <!-- Footer Section -->
        <div class="email-footer">
            <p style="color:silver;">Thank you for using our service!</p>
        </div>
    </div>

</body>
        <!-- <div style="white-space: pre-wrap; word-wrap: break-word;">! $body !!</div> -->
</html>