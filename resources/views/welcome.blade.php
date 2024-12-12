<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Little Sunshine</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #1b2e3d;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      text-align: center;
    }
  
    .header {
      width: 100%;
      max-width: 1100px; 
      background-color: #1b2e3d;
      color: #f2f2f2;
      padding: 20px 20px; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 5px solid #d95c5c;
      margin: 0 auto; 
    }
    .header .title {
      font-size: 3em; 
      font-weight: bold;
    }
    .header .title .highlight {
      color: #d95c5c;
    }
    .header .buttons {
      display: flex;
      gap: 10px;
    }
    .header .buttons button {
      padding: 8px 20px;
      background-color: white;
      color: #1b2e3d;
      border: none;
      border-radius: 15px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }
    .header .buttons .login {
      color: #d95c5c;
    }
    .header .buttons button:hover {
      background-color: #d1d1d1;
      color: #1b2e3d;
    }
    
    .carousel {
      position: relative;
      background-color: #d1d1d1;
      width: 100%;
      height: 60vh;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 20px 0;
      overflow: hidden; /* Hide overflow images */
    }
    .carousel-images {
      display: flex;
      transition: transform 0.5s ease; /* Smooth transition */
      width: 100%; /* Full width for correct alignment */
    }
    .carousel-images img {
      min-width: 100%; /* Each image takes full width */
      border-radius: 10px;
    }
    .carousel .arrow {
      position: absolute;
      top: 50%;
      font-size: 2em;
      color: #333;
      cursor: pointer;
      transform: translateY(-50%);
      user-select: none;
      z-index: 10; /* Ensure arrows are above images */
    }
    .carousel .arrow.left {
      left: 10px;
    }
    .carousel .arrow.right {
      right: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="title">
        <span class="highlight">Little</span> Sunshine
      </div>
      <div class="buttons">
        <a href="Enroll page.html"><button class="login">Enroll</button></a>
        <a href="/login"><button class="login">Login</button></a>
      </div>
    </div>
    
    <div class="carousel">
      <div class="arrow left">&#9664;</div>
      <div class="carousel-images">
        <img src="img/proxy-image.jfif">
        <img src="img/proxy-image.jfif">
      </div>
      <div class="arrow right">&#9654;</div>
    </div>
  </div> 
  <script>
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel-images img');
    const totalImages = images.length;

    document.querySelector('.arrow.right').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % totalImages; // Move to next image
      updateCarousel();
    });

    document.querySelector('.arrow.left').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Move to previous image
      updateCarousel();
    });

    function updateCarousel() {
      const offset = -currentIndex * 100; // Calculate offset
      document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
    }
  </script>
</body>
</html>
