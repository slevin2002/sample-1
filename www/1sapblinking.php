<!DOCTYPE html>
          <html>

          <head>
              <title>
                  Blinking with JavaScript
              </title>

              <style>
              /*    #blink {
                    font-size: 20px;
                    font-weight: bold;
                    font-family: sans-serif;
                  }*/
              </style>
          </head>

          <body>
              <p id="abc">
              <style="color:blue;font-size: 100px;font-weight: bold;font-family: jockerman;"> Hello Geeks let'sss</p>

              <script type="text/javascript">
                  var bli =
                    document.getElementById('abc');

                setInterval(function () {
                    bli.style.opacity =
                    (bli.style.opacity == 0 ? 1 : 0);
                  }, 100);
              </script>
          </body>

          </html>
