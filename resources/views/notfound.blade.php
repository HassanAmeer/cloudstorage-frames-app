<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .red-serif {
        color: black;
        text-shadow: 1px 1px 0 indigo,
            -1px -1px 0 indigo,
            -1px 1px 0 indigo,
            1px -1px 0 indigo;
    }

    .colored-character {
        background: linear-gradient(to top, indigo 40%, black 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .shimmer {
        color: #333;
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .shimmer:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% {
            left: -100%;
            scale: 0.5;
        }

        100% {
            left: 100%;
        }
    }

    /* animation 2 */
    .shimmerVibrate {
        color: #333;
        position: relative;
        overflow: hidden;
        display: inline-block;
        animation: vibrate 0.5s infinite;
        /* Vibrate effect */
    }

    .shimmerVibrate:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes vibrate {
        0% {
            transform: translate(0);
        }

        20% {
            transform: translate(-1px, 1px);
        }

        40% {
            transform: translate(-1px, -2px);
        }

        60% {
            transform: translate(2px, 0);
        }

        80% {
            transform: translate(1px, 2px);
        }

        100% {
            transform: translate(0);
        }
    }

    /* sacel animation */
    .scaleAnimation {
        animation: scaleUpDown 2s infinite;
        /* Apply animation */
    }

    @keyframes scaleUpDown {

        0%,
        100% {
            transform: scale(1.01);
            /* Normal size */
        }

        50% {
            transform: scale(1.1);
            /* Scaled up */
        }
    }



    @media (max-width: 600px) {
        .title {
            font-size: 1.3rem;
        }
    }

    @media (min-width: 600px) {
        .title {
            font-size: 1.7rem;
        }
    }

    @media (max-width: 600px) {
        .subtitle {
            font-size: 1rem;
        }
    }

    @media (min-width: 600px) {
        .subtitle {
            font-size: 1.3rem;
        }
    }


    /* colro text */

    .redtext {
        color: black;
        text-shadow: 1px 1px 0 red,
            -1px -1px 0 red,
            -1px 1px 0 red,
            1px -1px 0 red;
    }

    .coloredText {
        background: linear-gradient(to top, var(--bgcolor) 40%, white 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    </style>
    <style>
    body {
        height: 100%;
    }

    body {
        background-image: url("{{ asset('assets/notfound.png') }}");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100vh;
    }



    @media (max-width: 600px) {
        .h {
            position: absolute;
            font-size: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.5;
        }
    }

    @media (min-width: 600px) {
        .h {
            position: absolute;
            font-size: 10em;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.5;
        }
    }
    </style>
</head>

<body>
    <h1 class="h red-serif shimmer scaleAnimation">NOT FOUND</h1>
</body>

</html>