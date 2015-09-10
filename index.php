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

                if (out == 'How low can fields go?') {
                    $('#title').css('color', '#420');
                    $('#title').css('font-size', '100pt');
                    $('#title').css('margin-bottom', '0.2em');
                    $('.middle').css('vertical-align', 'bottom');
            }

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67420061-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="outer">
    <div class="middle">
        <div id="title"></div>
    </div>
</div>
</body>
</html>
