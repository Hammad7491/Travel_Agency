<!-- =======================
  SIMPLE FOOTER — Future Flight
======================= -->
<footer class="ff-simple-footer">
  <div class="ff-sf-wrap">
    <!-- Brand -->
    <section class="ff-sf-col">
      <div class="ff-sf-brand">
        <svg class="ff-sf-logo" viewBox="0 0 32 32" aria-hidden="true">
          <path fill="#0B63A3" d="M16 4c-1.1 0-2 .9-2 2v4l-8 4v2l8-2v6l-3 2v2l5-1 5 1v-2l-3-2v-6l8 2v-2l-8-4V6c0-1.1-.9-2-2-2z"/>
        </svg>
        <span class="ff-sf-title">Future <span>Flight</span></span>
      </div>
      <p class="ff-sf-tag">
        Your trusted partner for seamless flight booking and travel management.
      </p>
    </section>

    <!-- Services -->
    <section class="ff-sf-col">
      <h3 class="ff-sf-head">Services</h3>
      <ul class="ff-sf-list">
        <li><a href="#hero-search">Flight Booking</a></li>
        <li><a href="#services">Flight Changes</a></li>
        <li><a href="#services">Cancellations</a></li>
      </ul>
    </section>

    <!-- Company -->
    <section class="ff-sf-col">
      <h3 class="ff-sf-head">Company</h3>
      <ul class="ff-sf-list">
        <li><a href="#about">About Us</a></li>
        <li><a href="#privacy">Privacy Policy</a></li>
        <li><a href="#terms">Terms &amp; Conditions</a></li>
      </ul>
    </section>

    <!-- Contact -->
    <section class="ff-sf-col">
      <h3 class="ff-sf-head">Contact</h3>
      <ul class="ff-sf-list">
        <li><a href="tel:18889202503">1-888-920-2503</a></li>
        <li>Available 24/7</li>
      </ul>
    </section>
  </div>

  <hr class="ff-sf-rule"/>

  <div class="ff-sf-bottom">
    <p class="ff-sf-copy">© <span id="ffYear"></span> Future Flight. All rights reserved.</p>
    <p class="ff-sf-line">Dedicated to excellence in air travel.</p>
  </div>

  <!-- Floating call button -->
  <a href="tel:18889202503" class="ff-sf-fab" aria-label="Call 1-888-920-2503">
    <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
      <path fill="#fff" d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2L6.6 10.8Z"/>
    </svg>
    <span>1-888-920-2503</span>
  </a>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

    .ff-simple-footer {
      font-family: 'Inter', system-ui, sans-serif;
      background: #07131c; /* dark footer background only */
      color: #dfe8f2;
      padding: 40px 16px 24px;
      position: relative;
      z-index: 1;
    }

    .ff-sf-wrap {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1.2fr .8fr .8fr .8fr;
      gap: 28px;
    }

    .ff-sf-brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .ff-sf-logo {
      width: 28px;
      height: 28px;
    }

    .ff-sf-title {
      font-size: 24px;
      font-weight: 900;
      color: #ffffff;
    }

    .ff-sf-title span {
      color: #0B63A3;
    }

    .ff-sf-tag {
      margin: 10px 0 0;
      color: #b5c2d3;
      line-height: 1.6;
      max-width: 420px;
    }

    .ff-sf-head {
      margin: 0 0 10px;
      color: #ffffff;
      font-size: 17px;
      font-weight: 800;
    }

    .ff-sf-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 8px;
    }

    .ff-sf-list a {
      color: #dfe8f2;
      text-decoration: none;
      font-weight: 600;
    }

    .ff-sf-list a:hover {
      color: #ffffff;
      text-decoration: underline;
    }

    .ff-sf-rule {
      max-width: 1200px;
      margin: 22px auto;
      border: none;
      border-top: 1px solid #1a2a38;
    }

    .ff-sf-bottom {
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
      color: #b5c2d3;
    }

    .ff-sf-copy {
      margin: 0;
      font-size: 14px;
    }

    .ff-sf-line {
      margin: 4px 0 0;
      font-size: 13px;
      color: #9fb1c4;
    }

    .ff-sf-fab {
      position: fixed;
      right: 20px;
      bottom: 20px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #0B63A3;
      color: #fff;
      font-weight: 800;
      padding: 12px 16px;
      border-radius: 999px;
      text-decoration: none;
      box-shadow: 0 10px 24px rgba(0, 0, 0, .3);
      border: 1px solid rgba(255, 255, 255, .1);
      z-index: 999;
    }

    .ff-sf-fab:hover {
      background: #084f82;
    }

    @media (max-width: 1024px) {
      .ff-sf-wrap {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 640px) {
      .ff-sf-wrap {
        grid-template-columns: 1fr;
      }

      .ff-sf-fab {
        left: 50%;
        right: auto;
        transform: translateX(-50%);
      }
    }
  </style>

  <script>
    (function() {
      const y = document.getElementById('ffYear');
      if (y) y.textContent = new Date().getFullYear();
    })();
  </script>
</footer>
