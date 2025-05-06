<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sample Homepage</title>
  <style>
    :root {
      --bg-color: #ffffff;
      --text-color: #333;
      --primary-color: #4CAF50;
    }

    body.dark-mode {
      --bg-color: #1e1e1e;
      --text-color: #f0f0f0;
      --primary-color: #90ee90;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      transition: background-color 0.3s, color 0.3s;
    }

    header {
      background: var(--primary-color);
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      color: #fff;
    }

    nav a {
      color: #fff;
      margin-left: 1rem;
      text-decoration: none;
      font-weight: bold;
    }

    .toggle-btn {
      background: #fff;
      color: var(--primary-color);
      border: none;
      padding: 0.5rem 1rem;
      cursor: pointer;
      border-radius: 5px;
      font-weight: bold;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 80vh;
      text-align: center;
      padding: 2rem;
      animation: fadeIn 2s ease-in-out;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
    }

    .report-section {
      padding: 4rem 2rem;
      text-align: center;
      background-color: #f9f9f9;
    }

    .report-section h2 {
      font-size: 2rem;
      margin-bottom: 2rem;
    }

    .report-section iframe {
      width: 100%;
      max-width: 1000px;
      height: 500px;
      border: none;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background: #f4f4f4;
      color: #555;
    }

    body.dark-mode footer {
      background: #333;
      color: #aaa;
    }
  </style>
</head>
<body>
  <header>
    <h1>My Homepage</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#report">Reports</a>
      <a href="#">Contact</a>
      <button class="toggle-btn" onclick="toggleDarkMode()">Dark Mode</button>
    </nav>
  </header>

  <section class="hero">
    <h2>Welcome to My Site!</h2>
    <p>This is a clean and interactive homepage built with HTML, CSS, and JavaScript.</p>
  </section>

  <!-- Power BI Report Section -->
  <section id="report" class="report-section">
    <h2>Dice Posting - Apr 2025</h2>
    <iframe 
      title="Dice posting -Apr'2025" 
      src="https://app.powerbi.com/view?r=eyJrIjoiODhhNDJhNjEtYzhmOC00YjIzLWE2NzUtZWQ3NDc1ODU2MjJlIiwidCI6Ijg1YTEyZDVhLTBlN2YtNGM3ZC1hZTYyLWUyNzhmYjY4ODhmOSJ9" 
      allowFullScreen="true">
    </iframe>
  </section>

  <footer>
    &copy; 2025 My Homepage. All rights reserved.
  </footer>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>
</body>
</html>
