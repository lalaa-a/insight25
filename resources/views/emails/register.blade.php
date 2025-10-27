<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - Insight 2024</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #037ef3;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 30px;
            font-size: 16px;
        }
        .signature-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
        .signature-item {
            flex-basis: calc(33.333% - 20px);
            margin-bottom: 20px;
            font-size: 12px;
        }
        .signature-name {
            font-weight: bold;
            color: #037ef3;
            margin-bottom: 5px;
        }
        .signature-title {
            font-style: italic;
            color: #666;
            margin-bottom: 5px;
        }
        .signature-contact {
            color: #333;
        }
        .signature-contact a {
            color: #037ef3;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .signature-item {
                flex-basis: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Registration Successful</h1>
    </div>
    <div class="content">
        <p>Dear delegate,</p>
        <p>We are thrilled to see your registration for Insight 2024. Get ready to embark on a journey of insightful sessions which will surely help you keep that next step in your corporate journey.</p>
        <p>We'll see you soon.</p>
        <p>Until then stay excited.</p>


        <div class="signature-container">
            <div class="signature-item">
                <p class="signature-name">Lihini Jayawardene</p>
                <p class="signature-title">Organizing Committee Vice President<br>Delegates, Insight 2024<br>AIESEC in Colombo Central</p>
                <p class="signature-contact">
                    <a href="tel:+94706864050">+94 706 864 050</a><br>
                    <a href="http://www.linkedin.com/in/lihini-jayawardene-30a0442a3">LinkedIn</a><br>
                    <a href="mailto:lihini.jayawardene@aiesec.net">lihini.jayawardene@aiesec.net</a>
                </p>
            </div>

            <div class="signature-item">
                <p class="signature-name">Sharvika Jeyaseelan</p>
                <p class="signature-title">Organizing Committee Vice President<br>Delegates, Insight 2024<br>AIESEC in Colombo Central</p>
                <p class="signature-contact">
                    <a href="tel:+94762855404">+94 762 855 404</a><br>
                    <a href="https://www.linkedin.com/in/sharvika-jeyaseelan-529970265">LinkedIn</a><br>
                    <a href="mailto:jaysharvika@aiesec.net">jaysharvika@aiesec.net</a>
                </p>
            </div>

            <div class="signature-item">
                <p class="signature-name">Pravesha De Silva</p>
                <p class="signature-title">Organizing Committee Vice President<br>Delegates, Insight 2024<br>AIESEC in Colombo Central</p>
                <p class="signature-contact">
                    <a href="tel:+94775277290">+94 775 277 290</a><br>
                    <a href="https://www.linkedin.com/in/pravesha-de-silva-6744a7208/">LinkedIn</a><br>
                    <a href="mailto:pravesha@aiesec.net">pravesha@aiesec.net</a>
                </p>
            </div>
        </div>

{{--        <img style="height: 100px" src="/images/emails/aiesec.png" alt="AIESEC Logo">--}}
        <img style="height: 100px" src="{{$message->embed(public_path() . '/images/emails/aiesec.png')}}" alt="AIESEC Logo">

    </div>
</div>
</body>
</html>
