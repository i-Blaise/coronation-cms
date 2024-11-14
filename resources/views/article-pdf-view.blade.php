<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
    <style>
        /* Basic styling for the PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
        }

        .header-banner {
            position: relative;
            text-align: center;
            color: white;
        }

        .header-banner img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .header-title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 28px;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin-bottom: 10px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Header with Image Banner -->
    <div class="header-banner">
        <img src="" alt="Header Banner">
        <div class="header-title">{!! $caption !!}</div>
    </div>

    <!-- Article Content -->
    <div class="content">
        {!! $body !!}
    </div>
</body>
</html>
