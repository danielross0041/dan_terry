<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
    </head>
    <body>
        <h3>Simple initialization with default settings</h3>
        <h4 id="result"></h4>
        <hr>
        <canvas></canvas>
        <hr>
        <ul></ul>
       <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
       <div id="qr-reader" style="width: 600px"></div>
       <script type="text/javascript">
       	function onScanSuccess(decodedText, decodedResult) {
		    alert(`Code scanned = ${decodedText}`, decodedResult);
		}
		var html5QrcodeScanner = new Html5QrcodeScanner(
			"qr-reader", { fps: 10, qrbox: 250 });
		html5QrcodeScanner.render(onScanSuccess);
       </script>
    </body>
</html>