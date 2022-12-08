<!DOCTYPE html>
<html>

<head>
    <title>
        Blinking with JavaScript
    </title>
<style>
  /*   #blink { font-size: 20px; font-weight: bold;            font-family: Algerian;        }*/
    </style>
</head>
<body>
    <p id="blink";
     style="font-size: 20px;
    font-weight: bold;
    font-family: Algerian;">
    <h1 style="color:blue;">  Hello , Mr. slevin Varghees</h1>

          </p>

    <script type="text/javascript">
        var blinks=
            document.getElementById("hello ");

        setInterval(function () {
            blink.style.opacity =
            (blink.style.opacity == 0 ? 1 : 0);
        },500);
    </script>
</body>

</html>
