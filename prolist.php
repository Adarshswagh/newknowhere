<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interactive Boxes</title>
  <style>
    /* General styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f9;
    }

    .services-section {
      display: flex;
      max-width: 1200px;
      gap: 20px;
    }

    .left-content {
      flex: 1;
    }

    .left-content h4 {
      font-size: 14px;
      color: #007bff;
      margin-bottom: 10px;
    }

    .left-content h2 {
      font-size: 28px;
      margin: 10px 0;
    }

    .left-content p {
      font-size: 16px;
      color: #555;
    }

    .left-content img {
      margin-top: 20px;
      max-width: 100%;
    }

    .right-content {
      flex: 1;
    }

    /* Box container styles */
    .box-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 10px;
      position: relative;
    }

    .box {
      background-color: #04293a;
      color: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      cursor: pointer;
      transition: all 0.4s ease;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      position: relative;
      z-index: 1;
    }

    .box h3 {
      margin: 0;
      font-size: 18px;
    }

    .box p {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.3s ease;
    }

    .box.active p {
      opacity: 1;
      transform: translateY(0);
    }

    /* Default box size */
    .box {
      width: 100%;
      height: 150px;
    }

    /* Custom expanded positions */
    .box.active {
      z-index: 2;
    }

    .box#box1.active {
      transform: translate(-50%, -50%);
      width: 300px;
      height: 300px;
      top: 0;
      left: 0;
    }

    .box#box2.active {
      transform: translate(50%, -50%);
      width: 300px;
      height: 300px;
      top: 0;
      right: 0;
    }

    .box#box3.active {
      transform: translate(-50%, 50%);
      width: 300px;
      height: 300px;
      bottom: 0;
      left: 0;
    }

    .box#box4.active {
      transform: translate(50%, 50%);
      width: 300px;
      height: 300px;
      bottom: 0;
      right: 0;
    }

    /* Hover Effects for Professional Look */
    .box:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .box-container {
        grid-template-columns: 1fr; /* Stack boxes in one column */
      }

      .box {
        height: 100px;
      }

      .box.active {
        width: 100%;
        height: 250px;
        transform: none;
      }
    }
  </style>
</head>
<body>
  <section class="services-section">
    <div class="left-content">
      <h4>OUR SERVICES</h4>
      <h2>Solutions Tailored For Your Success</h2>
      <p>
        Empowering your business with tailored technology solutions designed to
        drive growth, streamline operations, and foster innovation. Discover
        how our expertise in IT strategy, digital transformation, cloud
        services, and enterprise solutions can propel you forward.
      </p>
      <img src="placeholder.png" alt="Illustration">
    </div>
    <div class="right-content">
      <div class="box-container">
        <div class="box" id="box1">
          <h3>IT Strategy Development</h3>
          <p>
            We work closely with you to develop a robust IT strategy that
            aligns with your business objectives.
          </p>
        </div>
        <div class="box" id="box2">
          <h3>Enterprise Solutions</h3>
          <p>
            Our enterprise solutions are designed to optimize your operational efficiency.
          </p>
        </div>
        <div class="box" id="box3">
          <h3>Digital Transformation Consulting</h3>
          <p>
            Transform your business processes with cutting-edge digital tools.
          </p>
        </div>
        <div class="box" id="box4">
          <h3>Cloud Strategy and Implementation</h3>
          <p>
            Achieve scalability and flexibility with our cloud services expertise.
          </p>
        </div>
      </div>
    </div>
  </section>
  <script>
    // JavaScript to handle the box click behavior
    const boxes = document.querySelectorAll('.box');

    boxes.forEach((box) => {
      box.addEventListener('click', () => {
        // Remove 'active' class from all boxes
        boxes.forEach((b) => b.classList.remove('active'));
        // Add 'active' class to the clicked box
        box.classList.add('active');
      });
    });
  </script>
</body>
</html>
