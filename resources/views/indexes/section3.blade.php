{{-- =======================
  WHY CHOOSE SECTION
  Two-column hero with badges + icon features + image card
======================= --}}
<section class="why-ff">
  <div class="why-wrap">
    <!-- Left: Copy -->
    <div class="why-copy">
      <h2 class="why-title">
        Why Choose <span>Future Flight?</span>
      </h2>

      <p class="why-sub">
        We combine cutting-edge technology with personalized service to deliver an unmatched travel experience.
      </p>

      <!-- Badges -->
      <div class="why-badges">
        <span class="why-chip">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
            <path d="M12 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1-10 10Zm1-10V7h-2v7h6v-2Z"/>
          </svg>
          We are open & ready to help 24/7!
        </span>
        <span class="why-chip alt">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
            <path d="M21 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2ZM8 9H6v2h2V9Zm0 4H6v2h2v-2Zm10-4H10v2h8V9Zm0 4H10v2h8v-2Z"/>
          </svg>
          All major airlines available
        </span>
      </div>

      <!-- Feature bullets -->
      <ul class="why-list">
        <li class="why-item">
          <span class="why-ico">
            <!-- award -->
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
              <path d="M12 2a6 6 0 1 1-6 6 6 6 0 0 1 6-6Zm-3 14 3 6 3-6H9Z"/>
            </svg>
          </span>
          <div class="why-text">
            <div class="why-item-title">Best Quality & Service Guarantee</div>
            <div class="why-item-sub">We match or beat any competitor quality and service for the same flight.</div>
          </div>
        </li>

        <li class="why-item">
          <span class="why-ico">
            <!-- clock -->
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
              <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 6h-2v5l4 2 1-1.7-3-1.3Z"/>
            </svg>
          </span>
          <div class="why-text">
            <div class="why-item-title">24/7 Customer Support</div>
            <div class="why-item-sub">Our expert travel agents are available around the clock to assist you.</div>
          </div>
        </li>

        <li class="why-item">
          <span class="why-ico">
            <!-- shield -->
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
              <path d="M12 2 4 5v6c0 5 3.4 9.6 8 11 4.6-1.4 8-6 8-11V5l-8-3Zm-1 13-3-3 1.4-1.4L11 12.2l4.6-4.6L17 9l-6 6Z"/>
            </svg>
          </span>
          <div class="why-text">
            <div class="why-item-title">Secure & Trusted</div>
            <div class="why-item-sub">Your data and payments are protected with enterprise-grade security.</div>
          </div>
        </li>
      </ul>
    </div>

    <!-- Right: Image card -->
    <div class="why-media">
     <figure class="why-card">
  <img
    src="{{ asset('assets/images/image copy.png') }}"
    alt="Travelers at the airport terminal"
    loading="lazy">
  <figcaption class="why-caption">
    Travel made simple — every step guided by experts
  </figcaption>
  <span class="why-glow"></span>
</figure>

    </div>
  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

    :root{
      --ink:#0f1621; --muted:#5b6574;
      --blue:#0B63A3; --blue-50:#ecf5fc;
      --chip:#fff; --chip-br:#d9e6f4;
      --card:#ffffff; --ring:#cee5ff;
      --shadow:0 14px 40px rgba(16,22,33,.10);
      --radius-xl:20px; --radius-lg:14px; --radius-md:12px;
      --bg-start:#f7fbff; --bg-end:#eef5fb;
    }

    .why-ff{
      font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      background: linear-gradient(180deg,var(--bg-start),var(--bg-end));
      padding: 72px 16px;
    }

    .why-wrap{
      max-width: 1200px; margin: 0 auto;
      display: grid; grid-template-columns: 1.05fr 1fr; gap: 42px;
      align-items: center;
    }

    .why-title{
      font-size: 48px; line-height: 1.05; margin: 0 0 12px; color: var(--ink); font-weight: 900;
      letter-spacing:.2px;
    }
    .why-title span{ color: var(--blue) }

    .why-sub{
      color:#2a3342; opacity:.92; margin: 6px 0 18px; max-width: 720px;
    }

    /* chips */
    .why-badges{display:flex; gap:10px; flex-wrap:wrap; margin-bottom: 18px}
    .why-chip{
      display:inline-flex; align-items:center; gap:8px;
      background:var(--chip); border:1px solid var(--chip-br);
      color:var(--blue); padding:7px 12px; border-radius:999px; font-weight:700; font-size:13px;
      box-shadow:0 4px 10px rgba(11,99,163,.06);
    }
    .why-chip.alt{ color:#164e63 }

    /* list */
    .why-list{list-style:none; padding:0; margin: 4px 0 0; display:grid; gap:16px}
    .why-item{display:flex; align-items:flex-start; gap:12px}
    .why-ico{
      width:38px; height:38px; display:grid; place-items:center;
      border-radius:12px; background:var(--blue-50); color:var(--blue);
      border: 1px solid #dcecff;
      box-shadow:0 8px 20px rgba(11,99,163,.08);
      flex:0 0 auto;
    }
    .why-item-title{font-weight:800; color:#0e1826; margin-bottom:4px}
    .why-item-sub{color:var(--muted); font-size:14px; line-height:1.55}

    /* media card */
    .why-media{position:relative}
    .why-card{
      position:relative; margin:0; border-radius: var(--radius-xl); overflow:hidden;
      border:1px solid var(--ring); background:var(--card); box-shadow: var(--shadow);
      isolation:isolate;
    }
    .why-card img{
      width:100%; height: 520px; object-fit: cover; display:block; filter:saturate(104%) contrast(102%);
    }
    .why-card::after{
      /* soft top-right vignette like the reference */
      content:""; position:absolute; inset:0;
      background:linear-gradient(180deg, rgba(255,255,255,.08), rgba(248,252,255,.55));
      pointer-events:none;
    }
    .why-caption{
      position:absolute; left:18px; bottom:16px;
      background:#ffffffd6; color:#0b2a45; font-weight:700; font-size:13px;
      padding:8px 12px; border-radius:10px; border:1px solid #e7f2ff;
      box-shadow:0 10px 26px rgba(11,99,163,.12);
      backdrop-filter: blur(2px);
    }
    .why-glow{
      position:absolute; inset:auto -25% -25% auto; width:300px; height:300px; border-radius:50%;
      background: radial-gradient(closest-side, rgba(11,99,163,.18), transparent 70%);
      filter: blur(6px); pointer-events:none;
    }

    /* hover polish */
    .why-item:hover .why-ico{ transform: translateY(-2px); transition: .2s }
    .why-card:hover img{ transform: scale(1.01); transition: transform .45s ease }

    /* responsive */
    @media (max-width: 1024px){
      .why-wrap{ grid-template-columns: 1fr; gap:32px }
      .why-card img{ height: 420px }
      .why-title{ font-size: 40px }
    }
    @media (max-width: 640px){
      .why-title{ font-size: 34px }
      .why-chip{ font-size:12px; padding:6px 10px }
      .why-card img{ height: 340px }
    }
  </style>

  <script>
    // Subtle fade-up on view (no libs)
    (function(){
      const els = document.querySelectorAll('.why-copy, .why-card');
      const set = (el, v) => { el.style.opacity=v; el.style.transform = v==='1' ? 'none' : 'translateY(12px)'; el.style.transition='opacity .4s ease, transform .4s ease'; };
      els.forEach(el=>set(el,'0'));
      const obs = new IntersectionObserver((entries)=>{
        entries.forEach(({isIntersecting,target})=>{
          if(isIntersecting){ set(target,'1'); obs.unobserve(target); }
        });
      },{threshold:.18});
      els.forEach(el=>obs.observe(el));
    })();
  </script>
</section>
