<?php
$meme_dir = './uploads';
$memes = array_diff(scandir($meme_dir), array('..', '.'));
shuffle($memes);
?>
<html>
	<head>
		<script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
		<script src="modules/aframe-gamepad-controls/dist/aframe-gamepad-controls.js"></script>
	</head>
	<body>
		<a-scene>
			<a-assets>
				<video id="trololo" autoplay loop="true" src="trololo.mp4"></video>
				<img id="wall" src="assets/white.png">
				<img id="floor" src="assets/marble.jpg">
				<img id="ceiling" src="assets/adamadam.png">

				<img id="ayy" src="pepekalei.gif">
				<img id="orb" src="assets/orb.png">
				<img id="jeb" src="assets/jeb.jpg">
				<img id="pepe_grenouille" src="assets/pepe_grenouille.jpg">
				<img id="pepe01" src="assets/wat.png">
				<img id="keksikus" src="assets/keksikus.jpg">
				<img id="harold" src="assets/harold.jpg">

				<img id="tf1" src="<?php echo $meme_dir . '/' . $memes[0]; ?>">
				<img id="tf2" src="<?php echo $meme_dir . '/' . $memes[1]; ?>">
				<img id="tf3" src="<?php echo $meme_dir . '/' . $memes[2]; ?>">
				<img id="tb1" src="<?php echo $meme_dir . '/' . $memes[3]; ?>">
				<img id="tb2" src="<?php echo $meme_dir . '/' . $memes[4]; ?>">
				<img id="tl1" src="<?php echo $meme_dir . '/' . $memes[5]; ?>">
				<img id="tl2" src="<?php echo $meme_dir . '/' . $memes[6]; ?>">
				<img id="tl3" src="<?php echo $meme_dir . '/' . $memes[7]; ?>">
				<img id="tr1" src="<?php echo $meme_dir . '/' . $memes[8]; ?>">
				<img id="tr2" src="<?php echo $meme_dir . '/' . $memes[9]; ?>">
				<img id="tr3" src="<?php echo $meme_dir . '/' . $memes[10]; ?>">
<script id="meme_medium" type="text/html">

</script>
			</a-assets>
			<a-box depth="40" height="1" width="40" position="0 0 0" rotation="0 90 0" material="side: bottom; src: #floor; repeat: 8 8"></a-box>
			<!-- <a-box depth="40" height="1" width="40" position="0 9 0" rotation="0 90 0" material="side: double; src: #ceiling;"></a-box> -->
			<a-plane height="10" width="80" material="src: #wall;" position="-11.2 4.5 -20"></a-plane>
			<a-plane height="10" width="80" material="src: #wall;" position="-11.2 4.5 20" rotation="0 180 0"></a-plane>
			<a-plane height="10" width="80" material="src: #wall;" position="20 4.5 -11.2" rotation ="0 -90 0"></a-plane>
			<a-plane height="10" width="80" material="src: #wall;" position="-20 4.5 -11.2" rotation="0 90 0"></a-plane>
			<!-- <a-box depth="40" height="10" width="40" position="0 5 0" rotation="0 0 0" material="side: double; src: #wall; repeat: 2 2"></a-box> -->

			<a-sphere position="5 4.5 -5" radius="1.25" color="#EF2D5E" material="shader: flat; src: assets/pepe_grenouille.jpg"></a-sphere>
			<a-sphere position="0 0 10" radius="40" color="#FFFFFF" material="side: double; shader: flat; src: #ceiling"></a-sphere>
			<a-sphere position="5 1 -5" radius="3" color="#79BA7F" material="shader: flat; src: assets/orb.png"></a-sphere>

			<!-- Picture on front Wall -->
			<a-plane height="6" width="4" material="src: #tf1;" position="11.2 4.5 -19.99"></a-plane>
			<a-plane height="6" width="4" material="src: #tf2;" position="0 4.5 -19.99"></a-plane>
			<a-plane height="6" width="4" material="src: #tf3;" position="-11.2 4.5 -19.99"></a-plane>

			<!-- Picture on back Wall -->
			<a-plane height="6" width="4" material="src: #tb1;" position="11.2 4.5 19.99" rotation="0 180 0"></a-plane>
			<a-video src="#trololo" width="16" height="9" position="0 4 19.75"></a-video>
			<a-plane height="6" width="4" material="src: #tb2;" position="-11.2 4.5 19.99" rotation="0 180 0"></a-plane>

			<!-- Picture on left Wall -->
			<a-plane height="6" width="4" material="src: #tl1;" position="19.99 4.5 11.2" rotation ="0 -90 0"></a-plane>
			<a-plane height="6" width="4" material="src: #tl2;" position="19.99 4.5 0" rotation ="0 -90 0"></a-plane>
			<a-plane height="6" width="4" material="src: #tl3;" position="19.99 4.5 -11.2" rotation ="0 -90 0"></a-plane>

			<!-- Picture on right Wall -->
			<a-plane height="6" width="4" material="src: #tr1;" position="-19.99 4.5 11.2" rotation="0 90 0"></a-plane>
			<a-plane height="6" width="4" material="src: #tr2;" position="-19.99 4.5 0" rotation="0 90 0"></a-plane>
			<a-plane height="6" width="4" material="src: #tr3;" position="-19.99 4.5 -11.2" rotation="0 90 0"></a-plane>

			<a-entity position="1 1 1" text="width:2;lineHeight:50;letterSpacing:5;color:white;black: Memopolitan Museum;"></a-entity>
			<a-entity look-controls camera gamepad-controls position="0 2 0"></a-entity>
		</a-scene>
	</body>
</html>
