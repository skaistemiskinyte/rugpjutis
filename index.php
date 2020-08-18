<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bomba</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .bomb {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .bomba {
            background-image: url("1.jpg");
            background-size: cover;
            width: <?php print 10 * date('s'); ?>px;
            height: <?php print 10 * date('s'); ?>px;
        }
        span {
            text-align: center;
            color: aqua;
            font-size: 25px;
            font-weight: bold;
            border: 1px solid red;
        }
    </style>
</head>
<body>
<div class="bomb">
    <div class="bomba"></div>
    <span><?php print date('s'); ?></span>
</div>
</div>

</body>
</html>