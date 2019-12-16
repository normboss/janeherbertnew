<!DOCTYPE html>
<!--   *** wheel ***
/**
 * @author hofk
*/
-->
<html lang="de">
<head>
	<title> numberwheel  </title>
	<meta charset="utf-8" />
</head>
<body> 	

</body>
	<!-- <script src="three.min.88.js"></script>
	<script src="OrbitControls.js"></script>
	<script src="THREEx.WindowResize.js"></script> -->
	<!-- <script src="THREE.js"></script> -->
    <script src="https://threejs.org/build/three.js"></script>
<script>

var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 20000 );
camera.position.set( 250, 100, 60 );
var renderer = new THREE.WebGLRenderer( { antialias: true } );
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.setClearColor( 0xdddddd, 1 );	
var container = document.createElement( 'div' );
document.body.appendChild( container );
container.appendChild( renderer.domElement ); 
// THREEx.WindowResize( renderer, camera );
// var controls = new THREE.OrbitControls( camera, renderer.domElement );
// controls.enableZoom = true;
var clock  = new THREE.Clock( true );	
var time;

// material
var uvTex	= new THREE.TextureLoader().load( "../images/uvgrid_w_0_9 .jpg" );
var material = new THREE.MeshBasicMaterial( { map: uvTex, side: THREE.DoubleSide } );
var geometry = new THREE.CylinderGeometry(80, 80, 80, 10, 1, true);

// mesh
var mesh1 = new THREE.Mesh( geometry, material );
scene.add( mesh1 );
mesh1.rotation.x = 1.57;

animate();

function animate() {

	requestAnimationFrame( animate );	
	time = clock.getElapsedTime();

	mesh1.rotation.y = 0.4 * time;

	renderer.render( scene, camera );
	// controls.update();
	
}
</script>

</html>