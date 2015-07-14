<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BuzzField</title>
    <link href="//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $.getJSON('/text.json', function (data) {
                //console.log(data);
                var rand = data[Math.floor(Math.random() * data.length)];

                var out = rand.replace('[#]', Math.floor(Math.random() * (21 - 10 + 1)) + 10);

                $('#title').html(out);
            })
        });
    </script>
    <style>
        html {
            background: url(field.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            margin: 0;
        }
        .outer {
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .middle {
            display: table-cell;
            vertical-align: middle;
            margin: 0;
            padding: 0;
        }

        #title {
            margin-left: 1em;
            margin-right: 1em;
            font-family: 'Love Ya Like A Sister', fantasy;
            font-size: 80pt;
            color: #2e3192;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="outer">
    <div class="middle">
        <div id="title"></div>
    </div>
</div>
</body>
</html>
