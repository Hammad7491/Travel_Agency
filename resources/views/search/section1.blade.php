{{-- resources/views/search/wait.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Please Wait – Searching Flights</title>

  {{-- Same font family you’re using in other sections --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    /* ====== SCOPED: nothing leaks outside this page ====== */
    :root{
      --ff-blue:#0B63A3;
      --ff-blue-600:#094f83;
      --ok:#27ae60;
      --ink:#0f1621;
      --muted:#5b6574;
      --card:#fff;
      --ring:#e7ecf4;
      --shadow:0 18px 50px rgba(16,22,35,.18);
      --radius-xl:18px;
    }
    body{
      margin:0;
      background:#f7fbff;
      font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      color:var(--ink);
    }

    #wait-page{
      min-height:100dvh;
      display:grid;
      place-items:center;
      padding:32px 16px;
    }

    .wait-card{
      width:min(780px, 92vw);
      background:var(--card);
      border:1px solid var(--ring);
      border-radius:var(--radius-xl);
      box-shadow:var(--shadow);
      padding:40px 24px 34px;
      text-align:center;
      position:relative;
    }

    /* === Close button === */
    .close-btn{
      position:absolute;
      top:14px;
      right:16px;
      background:none;
      border:none;
      font-size:28px;
      line-height:1;
      cursor:pointer;
      color:#9aa4b2;
      transition:color .2s ease, transform .15s ease;
    }
    .close-btn:hover{
      color:var(--ff-blue);
      transform:rotate(90deg);
    }

    /* Logo row */
    .wait-logo{
      display:flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      margin-bottom:6px;
    }
    .wait-logo svg{ width:210px; height:auto }

    .wait-title{
      margin:10px 0 6px;
      font-size:34px;
      font-weight:900;
      letter-spacing:.2px;
    }
    .wait-sub{
      max-width:620px;
      margin:0 auto;
      color:#2a3342;
      opacity:.95;
      line-height:1.55;
      font-weight:600;
    }

    /* little plane illustration */
    .wait-illustration{
      margin:26px auto 26px;
      height:108px;
      display:grid;
      place-items:center;
    }
    .plane{
      width:220px;
      filter: drop-shadow(0 6px 10px rgba(0,0,0,.15));
      animation: bob 2.3s ease-in-out infinite;
    }
    @keyframes bob { 0%,100%{ transform:translateY(0) } 50%{ transform:translateY(-6px) } }

    /* Call button */
    .call-btn{
      display:inline-flex;
      align-items:center;
      gap:10px;
      border:none;
      text-decoration:none;
      cursor:pointer;
      background:var(--ok);
      color:#fff;
      font-weight:900;
      padding:14px 18px;
      border-radius:999px;
      font-size:20px;
      box-shadow:0 10px 26px rgba(39,174,96,.28);
      transition:.18s transform ease, .18s filter ease;
    }
    .call-btn:hover{ transform:translateY(-1px); filter:brightness(1.02); }

    .call-ico{
      display:grid;
      place-items:center;
      width:36px;
      height:36px;
      border-radius:999px;
      background:#fff;
      color:var(--ok);
    }

    /* small helper text */
    .wait-mini{
      margin:14px 0 0;
      font-size:12px;
      color:#6b7280;
    }

    /* progress dots */
    .dots{
      display:inline-flex;
      gap:6px;
      margin-left:6px;
      vertical-align:baseline;
    }
    .dot{
      width:6px;
      height:6px;
      border-radius:50%;
      background:#c8d4e6;
      animation: pulse 1.4s infinite ease-in-out;
    }
    .dot:nth-child(2){ animation-delay:.15s }
    .dot:nth-child(3){ animation-delay:.3s }
    @keyframes pulse { 0%,100%{ transform:scale(.8); opacity:.5 } 50%{ transform:scale(1); opacity:1 } }

    /* Responsive */
    @media (max-width:640px){
      .wait-title{ font-size:28px }
      .wait-sub{ font-size:14px }
      .call-btn{ font-size:18px }
    }
  </style>
</head>
<body>
  <main id="wait-page" aria-live="polite">
    <section class="wait-card" role="status" aria-label="Searching flights">

      <!-- Close / cross button -->
      <button class="close-btn" onclick="window.location.href='{{ url('/') }}'" aria-label="Close">&times;</button>

      <!-- Brand/logo -->
      <div class="wait-logo" aria-hidden="true">
        <svg viewBox="0 0 400 80" fill="none">
          <text x="0" y="56" font-size="52" font-weight="900" fill="#0B63A3">Future</text>
          <text x="185" y="56" font-size="52" font-weight="900" fill="#0f1621">Flight</text>
        </svg>
      </div>

      <h1 class="wait-title">
        Please Wait<span class="dots"><span class="dot"></span><span class="dot"></span><span class="dot"></span></span>
      </h1>

      <p class="wait-sub">
        While we are searching unpublished exclusive airfares for you<br>
        from over <strong>1000+ airlines</strong>.
      </p>

      <div class="wait-illustration" aria-hidden="true">
        <svg class="plane" viewBox="0 0 256 120">
          <defs>
            <linearGradient id="g1" x1="0" x2="1">
              <stop offset="0" stop-color="#ff6b6b"/><stop offset="1" stop-color="#ff9e7d"/>
            </linearGradient>
          </defs>
          <path d="M18 90c32-18 88-38 120-40l10-24 18 2-8 24c30 4 54 9 90 22l-10 14c-54-14-91-16-124-12l-50 16-46 0z" fill="url(#g1)"/>
          <circle cx="200" cy="88" r="5" fill="#fff"/>
          <circle cx="168" cy="86" r="4" fill="#fff"/>
        </svg>
      </div>

      <a class="call-btn" href="tel:{{ preg_replace('/[^0-9+]/','', $phone ?? '+1-833-387-2565') }}">
        <span class="call-ico" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2L6.6 10.8Z"/>
          </svg>
        </span>
        CALL NOW {{ $phone ?? '+1-833-387-2565' }}
      </a>

      <p class="wait-mini">Real people. Real deals. Real fast.</p>
    </section>
  </main>

  <script>
    // Optional auto-redirect example:
    // setTimeout(()=>{ window.location.href = "{{ url('/results') }}"; }, 6000);
  </script>
</body>
</html>
