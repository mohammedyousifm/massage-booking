<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SplashWash Email</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

        body {
            font-family: 'Tajawal', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f7ff;
            color: #333333;
            direction: rtl;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #1d4ed8;
            /* Blue 600 */
            padding: 20px 30px;
            text-align: center;
            color: #ffffff;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .email-body {
            padding: 30px;
            background-color: #ffffff;
        }

        .email-footer {
            background-color: #1d4ed8;
            /* Blue 600 */
            color: #ffffff;
            padding: 20px 30px;
            text-align: center;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            background-color: #1d4ed8;
            /* Blue 600 */
            color: #ffffff;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 500;
            margin-top: 20px;
        }

        .button-outline {
            display: inline-block;
            background-color: #ffffff;
            color: #1d4ed8;
            /* Blue 600 */
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: 500;
            border: 2px solid #1d4ed8;
            margin-top: 20px;
            margin-right: 10px;
        }

        .booking-info {
            background-color: #eff6ff;
            /* Blue 50 */
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
        }

        .booking-info p {
            margin: 8px 0;
        }

        .highlight {
            color: #1d4ed8;
            /* Blue 600 */
            font-weight: bold;
        }

        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 20px 0;
        }

        .contact-info {
            display: flex;
            margin-top: 20px;
            justify-content: center;
        }

        .contact-item {
            margin: 0 10px;
            color: #ffffff;
            text-decoration: none;
        }

        .social-links {
            margin-top: 15px;
        }

        .social-link {
            display: inline-block;
            margin: 0 5px;
            color: #ffffff;
            text-decoration: none;
        }

        h1,
        h2,
        h3 {
            color: #1d4ed8;
            /* Blue 600 */
        }

        p {
            line-height: 1.6;
            margin: 10px 0;
        }

        .wave-top {
            height: 10px;
            background-color: #1d4ed8;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,96C960,96,1056,96,1152,122.7C1248,149,1344,203,1392,229.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: top;
        }

        .wave-bottom {
            height: 20px;
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%231d4ed8' fill-opacity='1' d='M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,218.7C672,235,768,245,864,234.7C960,224,1056,192,1152,181.3C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: bottom;
        }

        .message-box {
            text-align: center;
            padding: 20px;
            background-color: #f0f9ff;
            border-radius: 6px;
            margin: 20px 0;
            border-right: 4px solid #1d4ed8;
        }

        .message-title {
            font-weight: bold;
            color: #1d4ed8;
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1 class="logo">SplashWash</h1>
        </div>

        <div class="wave-top"></div>

        <div class="email-body">
            <h2>مرحباً أحمد،</h2>

            <p><strong>الاسم: </strong>{{ $data['name'] }}</p>
            <p><strong>البريد الاكتروني: </strong>{{ $data['email'] }}</p>
            <p><strong>رقم الهاتف: </strong>{{ $data['phone'] }}</p>
            <p><strong>الرساله: </strong>{{ $data['message'] }}</p>

        </div>

        <div class="wave-bottom"></div>

        <div class="email-footer">
            <p style="margin-top: 20px;">© 2025 SplashWash. جميع الحقوق محفوظة.</p>
        </div>
    </div>
</body>

</html>