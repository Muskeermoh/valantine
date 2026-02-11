<?php
$page = 'question';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Valentine - First Question</title>
  <link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body data-page="<?php echo $page; ?>">
  <div class="bubble-hearts" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="emoji-sky" aria-hidden="true">
    <span>💖</span>
    <span>💘</span>
    <span>💝</span>
    <span>😍</span>
    <span>✨</span>
    <span>💗</span>
    <span>💞</span>
    <span>😘</span>
    <span>💋</span>
    <span>🌹</span>
    <span>🫶</span>
    <span>💓</span>
    <span>💟</span>
    <span>🥰</span>
    <span>💫</span>
    <span>❤️</span>
  </div>
  <div class="emoji-sky" aria-hidden="true">
    <span>💖</span>
    <span>💘</span>
    <span>💝</span>
    <span>😍</span>
    <span>✨</span>
    <span>💗</span>
    <span>💞</span>
    <span>😘</span>
    <span>💋</span>
    <span>🌹</span>
    <span>🫶</span>
    <span>💓</span>
    <span>💟</span>
    <span>🥰</span>
    <span>💫</span>
    <span>❤️</span>
  </div>
  <div class="emoji-sky" aria-hidden="true">
    <span>💖</span>
    <span>💘</span>
    <span>💝</span>
    <span>😍</span>
    <span>✨</span>
    <span>💗</span>
    <span>💞</span>
    <span>😘</span>
    <span>💋</span>
    <span>🌹</span>
    <span>🫶</span>
    <span>💓</span>
    <span>💟</span>
    <span>🥰</span>
    <span>💫</span>
    <span>❤️</span>
  </div>
  <main class="page page-question">
    <section class="card">
      <p class="eyebrow">Quick check</p>
      <h1>How do you call me thangame?</h1>
      <p id="feedback" class="feedback" aria-live="polite"></p>
      <div class="button-area" id="button-area" aria-label="Answer choices">
        <button class="answer wrong" type="button">Baba</button>
        <button class="answer wrong" type="button">Hubby</button>
        <button class="answer wrong" type="button">Dei</button>
        <button class="answer wrong" type="button">Sir</button>
        <a class="answer correct" href="/love.php">Ennanga ❤️</a>
      </div>
      <p class="hint">Only one answer feels right. Try your luck.</p>
    </section>
  </main>
  <script src="/assets/js/app.js"></script>
</body>
</html>
