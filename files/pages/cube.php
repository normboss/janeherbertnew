<canvas id="canvas"></canvas>
<!-- vertex shader -->
<script  id="3d-vertex-shader" type="x-shader/x-vertex">
attribute vec4 a_position;
attribute vec2 a_texcoord;

uniform mat4 u_matrix;

varying vec2 v_texcoord;

void main() {
  // Multiply the position by the matrix.
  gl_Position = u_matrix * a_position;

  // Pass the texcoord to the fragment shader.
  v_texcoord = a_texcoord;
}
</script>
<!-- fragment shader -->
<script  id="3d-fragment-shader" type="x-shader/x-fragment">
precision mediump float;

// Passed in from the vertex shader.
varying vec2 v_texcoord;

// The texture.
uniform sampler2D u_texture;

void main() {
   gl_FragColor = texture2D(u_texture, v_texcoord);
}
</script><!--
for most samples webgl-utils only provides shader compiling/linking and
canvas resizing because why clutter the examples with code that's the same in every sample.
See http://webglfundamentals.org/webgl/lessons/webgl-boilerplate.html
and http://webglfundamentals.org/webgl/lessons/webgl-resizing-the-canvas.html
for webgl-utils, m3, m4, and webgl-lessons-ui.
-->
<script src="../js/webgl-utils.js"></script>
<script src="../js/m4.js"></script>