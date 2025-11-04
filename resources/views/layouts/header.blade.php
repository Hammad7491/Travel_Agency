<header class="ff-header">
  <div class="ff-header__inner">
    <!-- Brand -->
    <a href="#" class="ff-logo" aria-label="Future Flight - Home">
      <!-- SAME AIRPLANE SHAPE — now bigger -->
      <svg class="ff-logo__icon" viewBox="0 0 32 32" aria-hidden="true" fill="#0B63A3">
        <path d="M16 4c-1.1 0-2 .9-2 2v4l-8 4v2l8-2v6l-3 2v2l5-1 5 1v-2l-3-2v-6l8 2v-2l-8-4V6c0-1.1-.9-2-2-2z"/>
      </svg>

      <span class="ff-logo__dot" aria-hidden="true"></span>

      <span class="ff-logo__text">
        <strong>Future</strong> <span class="accent">Flight</span>
      </span>
    </a>

    <!-- Navigation -->
    <nav class="ff-nav" aria-label="Primary">
      <a href="#" class="ff-nav__link is-active">Home</a>
      <a href="#" class="ff-nav__link">About</a>
      <a href="#" class="ff-nav__link">Services</a>
      <a href="#" class="ff-nav__link">Routes</a>
    </nav>

    <!-- Call CTA -->
    <a href="tel:18889202503" class="ff-cta" aria-label="Call 1-888-920-2503">
      <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2l-2.8 2.3z" fill="#fff"/>
      </svg>
      <span class="ff-cta__text">Call 1-888-920-2503</span>
    </a>

    <!-- Burger (mobile) -->
    <button class="ff-burger" id="burgerBtn" aria-label="Open menu" aria-controls="drawer" aria-expanded="false">
      <span class="ff-burger__bar"></span>
      <span class="ff-burger__bar"></span>
      <span class="ff-burger__bar"></span>
    </button>
  </div>

  <!-- Drawer (mobile) -->
  <div class="ff-drawer" id="drawer" hidden>
    <div class="ff-drawer__panel" role="dialog" aria-label="Mobile Menu">
      <a href="#" class="ff-drawer__link">Home</a>
      <a href="#" class="ff-drawer__link">About</a>
      <a href="#" class="ff-drawer__link">Services</a>
      <a href="#" class="ff-drawer__link">Routes</a>
      <a href="tel:18889202503" class="ff-drawer__cta">Call 1-888-920-2503</a>
    </div>
    <button class="ff-drawer__overlay" type="button" aria-label="Close menu"></button>
  </div>

  <style>
    :root{
      --ff-bg:#f7fbff; --ff-text:#0f1621;
      --ff-blue:#0B63A3; --ff-blue-dark:#084f82;
      --ff-orange:#d86922; --ff-white:#fff;
      --ff-radius:20px; --ff-shadow:0 6px 18px rgba(15,22,33,.06);

      /* NEW: control logo sizes here */
      --logo-size: 44px;    /* default desktop size */
      --dot-size: 10px;
    }

    .ff-header{position:sticky;top:0;z-index:50;background:var(--ff-bg);box-shadow:var(--ff-shadow)}
    .ff-header__inner{max-width:1200px;margin:0 auto;padding:1rem 1.2rem;display:flex;align-items:center;gap:22px}

    /* LOGO */
    .ff-logo{display:flex;align-items:center;text-decoration:none;color:var(--ff-text);font-size:1.5rem;font-weight:800;letter-spacing:.2px}
    .ff-logo__icon{width:var(--logo-size);height:var(--logo-size);margin-right:10px;display:block}
    .ff-logo__dot{width:var(--dot-size);height:var(--dot-size);background:var(--ff-orange);border-radius:50%;margin:0 10px 0 2px}
    .ff-logo__text strong{color:var(--ff-blue)}
    .ff-logo__text .accent{color:var(--ff-orange)}

    /* NAV */
    .ff-nav{display:flex;align-items:center;gap:2.4rem;margin-left:auto;margin-right:auto}
    .ff-nav__link{position:relative;text-decoration:none;color:var(--ff-text);font-weight:600;transition:color .25s}
    .ff-nav__link:hover{color:var(--ff-blue)}
    .ff-nav__link.is-active::after{content:"";position:absolute;left:0;right:0;margin:auto;bottom:-10px;width:38px;height:3px;background:var(--ff-blue);border-radius:2px}

    /* CTA */
    .ff-cta{display:inline-flex;align-items:center;gap:.6rem;background:var(--ff-blue);color:var(--ff-white);padding:.7rem 1.2rem;border-radius:26px;text-decoration:none;font-weight:800;transition:transform .15s,background .2s}
    .ff-cta:hover{background:var(--ff-blue-dark);transform:translateY(-1px)}

    /* Burger */
    .ff-burger{display:none;flex-direction:column;gap:5px;background:none;border:none;cursor:pointer}
    .ff-burger__bar{width:22px;height:2px;background:var(--ff-text);border-radius:2px}

    /* Drawer */
    .ff-drawer[hidden]{display:none}
    .ff-drawer{position:fixed;inset:0;z-index:60}
    .ff-drawer__overlay{position:absolute;inset:0;background:rgba(0,0,0,.45);border:none}
    .ff-drawer__panel{position:absolute;right:0;top:0;height:100%;width:280px;max-width:85%;background:var(--ff-bg);padding:1rem;display:flex;flex-direction:column;box-shadow:-8px 0 24px rgba(15,22,33,.18);animation:ff-slide-in .28s ease}
    @keyframes ff-slide-in{from{transform:translateX(100%)}to{transform:translateX(0)}}
    .ff-drawer__link{padding:.95rem 0;border-bottom:1px solid #e8eef5;text-decoration:none;color:var(--ff-text);font-weight:600}
    .ff-drawer__link:hover{color:var(--ff-blue)}
    .ff-drawer__cta{margin-top:1rem;text-align:center;background:var(--ff-blue);color:#fff;padding:.75rem 1rem;border-radius:16px;text-decoration:none;font-weight:700}

    /* Responsive: scale logo gracefully */
    @media (min-width:1400px){
      :root { --logo-size: 48px; --dot-size: 12px; }
    }
    @media (max-width:1024px){
      .ff-nav{display:none}
      .ff-burger{display:flex;margin-left:auto}
      :root { --logo-size: 40px; --dot-size: 9px; }
    }
    @media (max-width:640px){
      :root { --logo-size: 34px; --dot-size: 8px; }
    }
    @media (max-width:420px){
      :root { --logo-size: 30px; --dot-size: 7px; }
      .ff-cta__text{display:none}
    }
  </style>

  <script>
    (function(){
      const burger = document.getElementById('burgerBtn');
      const drawer = document.getElementById('drawer');
      const overlay = drawer.querySelector('.ff-drawer__overlay');
      function openDrawer(){ drawer.hidden=false; burger.setAttribute('aria-expanded','true'); document.body.style.overflow='hidden'; }
      function closeDrawer(){ drawer.hidden=true; burger.setAttribute('aria-expanded','false'); document.body.style.overflow=''; }
      burger.addEventListener('click', openDrawer);
      overlay.addEventListener('click', closeDrawer);
      window.addEventListener('keydown', e => { if(e.key==='Escape' && !drawer.hidden) closeDrawer(); });
    })();
  </script>
</header>
