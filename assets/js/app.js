(() => {
  const page = document.body.dataset.page;

  if (page === 'question') {
    const buttonArea = document.getElementById('button-area');
    const feedback = document.getElementById('feedback');
    const wrongButtons = Array.from(document.querySelectorAll('.answer.wrong'));
    const messages = [
      'Wrong answer 😌',
      'Try again cutie',
      'Think properly 👀',
      'Nope, not that one',
    ];

    const setFeedback = () => {
      const message = messages[Math.floor(Math.random() * messages.length)];
      feedback.textContent = message;
    };

    const cacheOrigin = (button) => {
      if (button.dataset.ready) {
        return;
      }

      const areaRect = buttonArea.getBoundingClientRect();
      const btnRect = button.getBoundingClientRect();
      const left = btnRect.left - areaRect.left;
      const top = btnRect.top - areaRect.top;

      button.dataset.ready = 'true';
      button.dataset.originX = `${left}`;
      button.dataset.originY = `${top}`;
    };

    const moveButton = (button) => {
      const areaRect = buttonArea.getBoundingClientRect();
      const btnRect = button.getBoundingClientRect();
      const padding = 8;
      const originX = Number(button.dataset.originX || 0);
      const originY = Number(button.dataset.originY || 0);
      const maxX = Math.max(0, areaRect.width - btnRect.width - padding);
      const maxY = Math.max(0, areaRect.height - btnRect.height - padding);
      const targetX = padding + Math.random() * maxX;
      const targetY = padding + Math.random() * maxY;
      const deltaX = targetX - originX;
      const deltaY = targetY - originY;

      button.style.transform = `translate3d(${deltaX}px, ${deltaY}px, 0)`;
    };

    wrongButtons.forEach((button) => {
      ['mouseenter', 'click', 'touchstart'].forEach((eventName) => {
        button.addEventListener(eventName, (event) => {
          event.preventDefault();
          setFeedback();
          cacheOrigin(button);
          moveButton(button);
        }, { passive: false });
      });
    });
  }

  if (page === 'video') {
    const localVideo = document.getElementById('romantic-video');
    const fallback = document.querySelector('.fallback-video');

    if (fallback) {
      fallback.style.display = 'none';
    }

    if (localVideo && fallback) {
      localVideo.addEventListener('error', () => {
        localVideo.style.display = 'none';
        fallback.style.display = 'block';
      });
    }
  }

  if (page === 'landing') {
    const giftCard = document.querySelector('.gift-card');
    if (giftCard) {
      giftCard.addEventListener('click', () => {
        giftCard.classList.add('is-open');
      }, { once: true });
    }
  }
})();
