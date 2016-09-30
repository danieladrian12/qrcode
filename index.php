<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
    </head>
    <body>
    	<h3>Simple initalization with default settings</h3>
        <hr>
        <canvas></canvas>
        <hr>
        <ul></ul>
		<script type="text/javascript" src="asset/webcodecam/js/jquery.js"></script>
        <script type="text/javascript" src="asset/webcodecam/js/qrcodelib.js"></script>
        <script type="text/javascript" src="asset/webcodecam/js/webcodecamjquery.js"></script>
        <script type="text/javascript">
            var arg = {
                resultFunction: function(result) {
                    $('body').append($('<li>' + result.code + '</li>'));
                }
            };
            $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play();
        </script>
    </body>
</html>