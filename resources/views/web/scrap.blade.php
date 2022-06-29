<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<!-- QR Code -->
	<!-- <video id="preview" width="200px"></video> -->
	<!-- <input type="text" name="text" id="text" readonly> -->
	<!-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->
	<!-- <script type="text/javascript">
		let scanner = new Instascan.Scanner({
			video:document.getElementById('preview'),
			mirror: false
		});
		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				scanner.start(cameras[1]);
			} else{
				alert('no cameras found');
			}
		}).catch(function (e) {
			console.log(e)
		})
		scanner.addListener('scan', function (content) {
			document.getElementById('text').value = content;
		})
		
	</script> -->


	<!-- Bar COde -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/opus-recorder/6.1.1/decoderWorker.min.js"></script>

	<div style="container">
  <canvas id="qr-canvas" width="320" height="240"></canvas>    
  <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
  <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
  <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
  <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
  <a href="https://www.jqueryscript.net/tags.php?/video/">video</a>
  <script type="text/javascript">
  	$('#qr-canvas').WebCodeCam({
  ReadQRCode: true, 
  ReadBarecode: true, 
  width: 320,
  height: 240,

  Source: {
    // max Videosource resolution width
    maxWidth: 640,
    // max Videosource resolution height
    maxHeight: 480 
  },

  flipVertical: false,  
  flipHorizontal: false,  

  // if zoom = -1, auto zoom for optimal resolution else int
  zoom: -1, 

  // string, audio file location
  beep: "js/beep.mp3", 

  // functional when value autoBrightnessValue is int
  autoBrightnessValue: false, 

  brightness: 0, 
  grayScale: false, 
  contrast: 0, 
  threshold: 0, 

  // or matrix, example for sharpness ->  [0, -1, 0, -1, 5, -1, 0, -1, 0]
  sharpness: [], 

  resultFunction: function(resText, lastImageSrc) {
    // resText as decoded code, lastImageSrc as image source 
    alert(resText);
  }
});
  </script>
</div>
</body>
</html>