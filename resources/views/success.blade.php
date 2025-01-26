<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>

<body>
    <style>
        **/ @font-face {
            font-family: 'Poppins';
            src: url("../fonts/Poppins-Bold.eot");
            src: local("Poppins Bold"), local("Poppins-Bold"), url("../fonts/Poppins-Bold.eot?#iefix") format("embedded-opentype"), url("../fonts/Poppins-Bold.woff2") format("woff2"), url("../fonts/Poppins-Bold.woff") format("woff"), url("../fonts/Poppins-Bold.ttf") format("truetype");
            font-weight: bold;
            font-style: normal
        }

        @font-face {
            font-family: 'Poppins';
            src: url("../fonts/Poppins-Light.eot");
            src: local("Poppins Light"), local("Poppins-Light"), url("../fonts/Poppins-Light.eot?#iefix") format("embedded-opentype"), url("../fonts/Poppins-Light.woff2") format("woff2"), url("../fonts/Poppins-Light.woff") format("woff"), url("../fonts/Poppins-Light.ttf") format("truetype");
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Poppins';
            src: url("../fonts/Poppins-SemiBold.eot");
            src: local("Poppins SemiBold"), local("Poppins-SemiBold"), url("../fonts/Poppins-SemiBold.eot?#iefix") format("embedded-opentype"), url("../fonts/Poppins-SemiBold.woff2") format("woff2"), url("../fonts/Poppins-SemiBold.woff") format("woff"), url("../fonts/Poppins-SemiBold.ttf") format("truetype");
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: 'Poppins';
            src: url("../fonts/Poppins-Medium.eot");
            src: local("Poppins Medium"), local("Poppins-Medium"), url("../fonts/Poppins-Medium.eot?#iefix") format("embedded-opentype"), url("../fonts/Poppins-Medium.woff2") format("woff2"), url("../fonts/Poppins-Medium.woff") format("woff"), url("../fonts/Poppins-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Poppins';
            src: url("../fonts/Poppins-Regular.eot");
            src: local("Poppins Regular"), local("Poppins-Regular"), url("../fonts/Poppins-Regular.eot?#iefix") format("embedded-opentype"), url("../fonts/Poppins-Regular.woff2") format("woff2"), url("../fonts/Poppins-Regular.woff") format("woff"), url("../fonts/Poppins-Regular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../fonts/Roboto-Light.eot");
            src: local("Roboto Light"), local("Roboto-Light"), url("../fonts/Roboto-Light.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto-Light.woff2") format("woff2"), url("../fonts/Roboto-Light.woff") format("woff"), url("../fonts/Roboto-Light.ttf") format("truetype");
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../fonts/Roboto-Regular.eot");
            src: local("Roboto"), local("Roboto-Regular"), url("../fonts/Roboto-Regular.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto-Regular.woff2") format("woff2"), url("../fonts/Roboto-Regular.woff") format("woff"), url("../fonts/Roboto-Regular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../fonts/Roboto-Medium.eot");
            src: local("Roboto Medium"), local("Roboto-Medium"), url("../fonts/Roboto-Medium.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto-Medium.woff2") format("woff2"), url("../fonts/Roboto-Medium.woff") format("woff"), url("../fonts/Roboto-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../fonts/Roboto-Bold.eot");
            src: local("Roboto Bold"), local("Roboto-Bold"), url("../fonts/Roboto-Bold.eot?#iefix") format("embedded-opentype"), url("../fonts/Roboto-Bold.woff2") format("woff2"), url("../fonts/Roboto-Bold.woff") format("woff"), url("../fonts/Roboto-Bold.ttf") format("truetype");
            font-weight: bold;
            font-style: normal
        }

        html,
        body {
            font-family: "Roboto", sans-serif;
            color: #4b2578;
            font-size: 14px;
            line-height: 1.86;
            font-weight: 300;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: relative
        }

        * {
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            background: #6624b7;

        }

        .container-item {
            padding: 40px;
            background-color: rgb(249, 252, 254);
            box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
            border-radius: 10px;
            margin-left: 15px;
            margin-right: 15px;
        }

        .container-item,
        h3,
        p {
            text-align: center;
        }

        .logo img {
            height: 36px;
            transition: all .4s;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: left;
            padding-right: 20px;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
    <div class="nav">

        <div style="margin-top: 6px" class="logo" data-animate="fadeInDown" data-delay=".65"
            style="visibility: visible; animation-delay: 0.65s;"><a href="/" class="logo-link"><img
                    class="logo-dark" src="img/logo-symbol-v2.svg" srcset="img/logo-symbol-v2.svg 2x"
                    alt="logo"></a></div>
    </div>

    <div class="container">
        <div class="container-item">
            <h3 style="color: #49d137;padding: 8px;">Sign-Up Successful!</h3>
            <p style="color: #000;font-size: 1.3rem;
    font-weight: 300;padding: 10px;">Congratulations! Your sign-up
                was
                successful, and you will be contacted soon
                regarding
                your spin prize
                win.</p>
            <a href="{{ route('home') }}" class="btn">Go to Homepage</a>

        </div>
    </div>
</body>

</html>
