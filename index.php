<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href='//fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON('/text.json', function(data) {
                //console.log(data);
                var rand = data[Math.floor(Math.random() * data.length)];

                var out = rand.replace('[#]', Math.floor(Math.random() * (21 - 10 + 1)) + 10);

                $('#title').html(out);
            });
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
        #title {
            font-family: "Coming Soon";
            font-size: 48pt;
            //color: white;
            margin: 0 auto;
            text-align: center;
            margin-top: 20%;
        }
    </style>
</head>
<body>
<div id="title"></div>
</body>
</html>
