<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Professional Homepage</title>
  <style>
    :root {
      --bg-color: #ffffff;
      --text-color: #222;
      --primary-color: #2e7d32;
      --accent-color: #66bb6a;
    }

    body.dark-mode {
      --bg-color: #121212;
      --text-color: #f5f5f5;
      --primary-color: #66bb6a;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    header {
      background-color: var(--primary-color);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    header h1 {
      color: white;
      margin: 0;
      font-size: 1.8rem;
    }

    nav a {
      color: white;
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: 600;
      transition: opacity 0.3s;
    }

    nav a:hover {
      opacity: 0.8;
    }

    .toggle-btn {
      background: #fff;
      color: var(--primary-color);
      border: none;
      padding: 0.5rem 1rem;
      cursor: pointer;
      border-radius: 5px;
      font-weight: 600;
      margin-left: 1rem;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 75vh;
      text-align: center;
      padding: 4rem 2rem;
      background: linear-gradient(to right, #f4f4f4, #e0f7e9);
      transition: background 0.3s;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 700px;
    }

    .report-section {
      padding: 3rem 1rem;
      text-align: center;
      background-color: #fafafa;
    }

    .report-section h2 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    .report-section iframe {
      width: 100%;
      max-width: 1000px;
      height: 500px;
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    footer {
      text-align: center;
      padding: 1rem;
      background-color: #eee;
      color: #666;
    }

    body.dark-mode .hero {
      background: linear-gradient(to right, #1f1f1f, #2a2a2a);
    }

    body.dark-mode .report-section {
      background-color: #1a1a1a;
    }

    body.dark-mode footer {
      background-color: #111;
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
      <button class="toggle-btn" onclick="toggleDarkMode()">Toggle Dark Mode</button>
    </nav>
  </header>

  <section class="hero">
    <h2>Welcome to My Site!</h2>
    <p>This is a clean and professional homepage built with HTML5, CSS3, and JavaScript. Explore the embedded Power BI report below.</p>
  </section>

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
