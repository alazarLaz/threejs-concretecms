<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

<div id="threejs-container" style="width: 100%; height: 100%;"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.153.0/three.min.js" integrity="sha512-5ajBhKbDcvRgu2/sCvkhXAQPg6/BnfN/0te1osh0kixzCujtrosB4rmcMfqArTqyAtRpVApQbhgAxTNG26+1Bw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src=" -->
 <!-- $view->getThemePath() -->
<!-- /path/to/three.min.js"></script> --> 
<script>
    // Define your Three.js code here

    // Set up the scene
    var scene = new THREE.Scene();
    
    // Set up the camera
    var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 5;
    
    // Set up the renderer
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.getElementById('threejs-container').appendChild(renderer.domElement);
    
    // Create a cube
    var geometry = new THREE.BoxGeometry(1, 1, 1);
    var material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
    var cube = new THREE.Mesh(geometry, material);
    scene.add(cube);
    
    // Animation loop
    function animate() {
        requestAnimationFrame(animate);
        
        // Rotate the cube
        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;
        
        // Render the scene with the camera
        renderer.render(scene, camera);
    }
    
    // Start the animation loop
    animate();
</script>