<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <style>
        /* CSS animation for the thank you message */
        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }

        /* CSS styles for the thank you page */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .thank-you {
            animation: slideIn 1s ease-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thank-you">
            <h1>Thank You</h1>
            <p>Dear {{$name}}</p>
            <p>Thank you for submitting the form. We have received your information.</p>
            <p>We will contact you at {{$email}} if necessary.</p>
            <img src="{{asset('assets/images/thanks.png')}}">
            <a href="{{route('welcome')}}">
                <p>Back To Home</p>
            </a>
        </div>
    </div>
</body>
</html>
