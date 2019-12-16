<!doctype html>

<meta charset="utf-8">

<canvas id="webgl" width="512" height="512">
  Please use a browser that supports canvas.
</canvas>

<script type="text/javascript" src="./webgl-libs.js"></script>

<script>
  let canvas = document.getElementById('webgl');
  let gl = WebGLUtils.setupWebGL(canvas);

  let marsImage = new Image()
  marsImage.src = './mars.jpg';
  marsImage.onload = () => start();

  let vertexShaderSource = `
    attribute vec3 a_Position;
    attribute vec2 a_TexCoord;

    uniform mat4 u_ModelViewProjectionMatrix;

    varying vec2 v_TexCoord;

    void main() {
      // Output tex coord to frag shader.
      v_TexCoord = a_TexCoord;

      // Output the final position.
      gl_Position = u_ModelViewProjectionMatrix * vec4(a_Position, 1.0);
    }
  `;

  let fragmentShaderSource = `
    #ifdef GL_ES
      precision mediump float;
    #endif

    uniform sampler2D u_Sampler;

    varying vec2 v_TexCoord;

    void main() {
      // Get texture color for tex coord.
      gl_FragColor = texture2D(u_Sampler, v_TexCoord);
    }
  `;

  function start() {
    // Setup camera.
    let eye = [0.0, 0.0, 5.0];
    let center = [0.0, 0.0, 0.0];
    let up = [0.0, 1.0, 0.0];
    let fov = Math.PI / 3;
    let aspect = 1.0;
    let near = 0.1;
    let far = 100.0;
    let camera = new Camera(eye, center, up, fov, aspect, near, far);

    // Setup sphere with texture material.
    let sphereMaterial = new Material(gl, null, null, null, null, marsImage);
    let sphere = new Sphere(gl, 2, 250, 250, sphereMaterial);

    // Setup shader.
    let shader = new Shader(gl, vertexShaderSource, fragmentShaderSource, null, camera, sphere);

    // Set up clear color and enable depth testing.
    gl.clearColor(0.0, 0.0, 0.0, 1.0);
    gl.enable(gl.DEPTH_TEST);

    // Draw.
    shader.draw(gl, sphere);
  }
</script>