<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Smooth Scroll Image to Video</title>
  <style>
    body, html {
  margin: 0;
  padding: 0;
  height: 200vh; /* allow scrolling */
  background: #000;
}

.container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

#imageMask {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: translate(-50%, -50%);
  clip-path: ellipse(80px 125px at center); /* start pill shape */
  transition: clip-path 0.5s ease;
  z-index: 2;
}

#imageMask, #videoOverlay {
  backface-visibility: hidden;
  will-change: opacity, clip-path;
}


#videoOverlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  transition: opacity 0.5s ease;
  z-index: 3;
  pointer-events: none;
}

#imageMask {
  z-index: 1; /* background */
}

#videoOverlay {
  z-index: 2; /* foreground */
}


  </style>
</head>
<body>

<div class="container">
  <img id="imageMask" src="assets/img/banner/v1.png" alt="Thumbnail" />
  <video id="videoOverlay" muted autoplay loop playsinline>
    <source src="assets/video/video1.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
</div>

<script>
  const image = document.getElementById('imageMask');
  const video = document.getElementById('videoOverlay');

  let videoReady = false;
  let videoFailed = false;

  // Mark video as ready when enough data is loaded
  video.addEventListener('loadeddata', () => {
    videoReady = true;
  });

  // Handle missing/broken video
  video.addEventListener('error', () => {
    videoFailed = true;
    videoReady = false;
    console.warn('Video failed to load.');
  });

  window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const viewportHeight = window.innerHeight;
  const progress = Math.min(scrollTop / viewportHeight, 1);

  // Expand ellipse from center
  const xRadius = 80 + progress * 1000;
  const yRadius = 125 + progress * 800;
  image.style.clipPath = progress > 0.98 ? 'none' : `ellipse(${xRadius}px ${yRadius}px at center)`;

  // Smooth fade in video only
  const fadeStart = 0.9;
  const fadeEnd = 1;
  let fadeProgress = 0;

  if (progress >= fadeStart && progress <= fadeEnd) {
    fadeProgress = (progress - fadeStart) / (fadeEnd - fadeStart);
  } else if (progress > fadeEnd) {
    fadeProgress = 1;
  }

  if (videoReady && !videoFailed) {
    video.style.opacity = fadeProgress;
  } else {
    video.style.opacity = 0;
  }

  // Keep image always visible
  image.style.opacity = 1;
});

</script>



</body>
</html>
