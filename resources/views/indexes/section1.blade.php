<!-- =======================
  HERO + FLIGHTS SEARCH (two-month calendar + travelers dropdown)
  — spacer pushes content below while dropdowns are open
======================= -->
<section id="hero-search" class="ts-hero">
  <div class="ts-hero-bg" role="img" aria-label="Scenic mountains and lake background"></div>

  <div class="ts-hero-inner">
    <h1 class="ts-title">TRAVEL MADE SIMPLE</h1>
    <p class="ts-subtitle">Discover unbeatable flight deals to your dream destination</p>

    <!-- Search Card -->
    <div class="ts-card" id="searchCard">
      <div class="ts-tabs single">
        <button class="ts-tab is-active" disabled>Flights</button>
      </div>

      <div class="ts-panel is-visible">
        <div class="ts-trip-type">
          <label class="ts-radio">
            <input type="radio" name="tripType" value="round" checked>
            <span class="dot"></span> Round trip
          </label>
          <label class="ts-radio">
            <input type="radio" name="tripType" value="oneway">
            <span class="dot"></span> Oneway
          </label>
        </div>

        <form class="ts-form" onsubmit="return false">
          <!-- Origin -->
          <div class="ts-input">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5Z"/></svg>
            </span>
            <input type="text" placeholder="Origin" aria-label="Origin">
          </div>

          <!-- Destination -->
          <div class="ts-input">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5Z"/></svg>
            </span>
            <input type="text" placeholder="Destination" aria-label="Destination">
          </div>

          <!-- Dates (two-month calendar) -->
          <div class="ts-input ts-dropdown" id="datesField">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M7 2h2v2h6V2h2v2h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3V2Zm13 7H4v10h16V9Z"/></svg>
            </span>
            <input type="text" id="datesDisplay" placeholder="Select dates" aria-label="Dates" readonly>
            <span class="caret">▾</span>

            <!-- Calendar Panel -->
            <div class="dd-panel dd-calendar" id="calPanel" aria-label="Calendar">
              <div class="cal-header">
                <button type="button" class="nav-btn" id="calPrev" aria-label="Previous month">❮</button>
                <div class="month-labels">
                  <div class="label" id="m1Label">November 2025</div>
                  <div class="label" id="m2Label">December 2025</div>
                </div>
                <button type="button" class="nav-btn" id="calNext" aria-label="Next month">❯</button>
              </div>

              <div class="cal-body">
                <div class="month" id="month1">
                  <div class="dow"><span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span></div>
                  <div class="grid" id="m1Grid"></div>
                </div>
                <div class="month" id="month2">
                  <div class="dow"><span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span></div>
                  <div class="grid" id="m2Grid"></div>
                </div>
              </div>

              <div class="cal-footer">
                <div class="picked">
                  <span id="pickStart">—</span>
                  <span id="pickDash">—</span>
                  <span id="pickEnd">—</span>
                </div>
                <button type="button" class="dd-apply" id="applyDates">Done</button>
              </div>
            </div>
          </div>

          <!-- Travelers / Class -->
          <div class="ts-input ts-dropdown" id="travField">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5Z"/></svg>
            </span>
            <input type="text" id="travDisplay" value="1 Adult Economy" aria-label="Travelers and class" readonly>
            <span class="caret">▾</span>

            <div class="dd-panel dd-right" id="travPanel">
              <div class="row">
                <span class="lbl">Class</span>
                <div class="grow">
                  <div class="select-like" id="classSelect" data-value="Economy">Economy ▾</div>
                  <ul class="menu" id="classMenu">
                    <li data-v="Economy">Economy</li>
                    <li data-v="Premium">Premium</li>
                    <li data-v="Business">Business</li>
                    <li data-v="First">First</li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <span class="lbl">Adult</span>
                <div class="ctr">
                  <button type="button" class="btn-circle" data-t="-1" data-key="adults">−</button>
                  <span class="num" id="nAdults">1</span>
                  <button type="button" class="btn-circle" data-t="1" data-key="adults">＋</button>
                </div>
              </div>

              <div class="row">
                <span class="lbl">Children <small>(2–11)</small></span>
                <div class="ctr">
                  <button type="button" class="btn-circle" data-t="-1" data-key="children">−</button>
                  <span class="num" id="nChildren">0</span>
                  <button type="button" class="btn-circle" data-t="1" data-key="children">＋</button>
                </div>
              </div>

              <div class="row">
                <span class="lbl">Infant <small>(0–2)</small></span>
                <div class="ctr">
                  <button type="button" class="btn-circle" data-t="-1" data-key="infants">−</button>
                  <span class="num" id="nInfants">0</span>
                  <button type="button" class="btn-circle" data-t="1" data-key="infants">＋</button>
                </div>
              </div>

              <button type="button" class="dd-apply" id="applyTrav">Done</button>
            </div>
          </div>

          <button class="ts-search-btn" type="submit">Search</button>
        </form>
      </div>
    </div>

    <!-- REAL spacer that grows when any dropdown is open -->
    <div id="ddSpacer" class="dd-spacer" aria-hidden="true"></div>

    <!-- Feature Strip -->
    <div class="ts-feature-strip" id="featureStrip">
      <div class="ts-features">
        <div class="ts-feature">
          <span class="f-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24 7.46 13.97 5.82 21z"/></svg></span>
          <div class="f-title">Trusted and free</div>
        </div>
        <div class="ts-feature">
          <span class="f-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M4 6h8v2H4zm0 5h14v2H4zm0 5h10v2H4zm14-10h2v2h-2zm2 10h-2v-2h2z"/></svg></span>
          <div class="f-title">Filter for what you want</div>
        </div>
        <div class="ts-feature">
          <span class="f-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 2 9 9 2 12l7 3 3 7 3-7 7-3-7-3-3-7z"/></svg></span>
          <div class="f-title">We know travel</div>
        </div>
        <div class="ts-feature">
          <span class="f-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2l-2.8 2.3z"/></svg></span>
          <div class="f-title">Call 24/7 Support</div>
        </div>
        <div class="ts-feature">
          <span class="f-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M3 21V5a2 2 0 0 1 2-2h14v18h-2v-4H5v4H3Zm4-8h6V7H7v6Z"/></svg></span>
          <div class="f-title">Best Hotel deals</div>
        </div>
      </div>
    </div>
  </div>

  <style>
    :root{
      --blue:#0B63A3; --blue-600:#094f83; --white:#fff; --ink:#101623; --muted:#6b7280;
      --card:#ffffff; --shadow:0 18px 50px rgba(16,22,35,.18);
      --radius-xl:14px; --range:#e9f3ff; --pick:#0B63A3;
    }

    .ts-hero{position:relative;overflow:hidden;background:#003d7a;color:var(--white)}
    .ts-hero-bg{position:absolute; inset:0; background:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat; filter:saturate(105%) contrast(104%)}
    .ts-hero::after{content:""; position:absolute; inset:0; background:linear-gradient(to bottom, rgba(0,0,0,.15), rgba(0,0,0,.25))}
    .ts-hero-inner{position:relative; z-index:1; max-width:1200px; margin:0 auto; padding:72px 16px 36px}
    .ts-title{margin:0; text-align:center; font-size:44px; font-weight:800; letter-spacing:.6px; text-shadow:0 2px 12px rgba(0,0,0,.25)}
    .ts-subtitle{margin:10px 0 24px; text-align:center; font-size:20px; opacity:.95; text-shadow:0 2px 10px rgba(0,0,0,.25)}

    .ts-card{
      position:relative; background:var(--card); color:var(--ink);
      border-radius:var(--radius-xl); box-shadow:var(--shadow);
      margin:22px auto 28px;
      overflow:visible; z-index:3;
    }
    .ts-tabs.single .ts-tab{background:var(--blue); color:#fff; font-weight:800; padding:16px 26px; border:none}
    .ts-panel{padding:18px 18px 22px}

    .ts-trip-type{display:flex; align-items:center; gap:26px; padding:6px 8px 14px; color:#0b3670}
    .ts-radio{display:inline-flex; align-items:center; gap:10px; cursor:pointer; font-weight:600}
    .ts-radio input{appearance:none; width:20px; height:20px; border-radius:50%; border:2px solid var(--blue)}
    .ts-radio input:checked{background:#eaf4ff}
    .ts-radio .dot{width:10px;height:10px;border-radius:50%; background:transparent; border:2px solid transparent}
    .ts-radio input:checked + .dot{background:var(--blue); border-color:var(--blue)}

    .ts-form{display:grid; grid-template-columns:1.15fr 1.15fr 1.15fr 1fr auto; gap:14px; padding:0 6px 10px}
    .ts-input{display:flex; align-items:center; gap:10px; border:1px solid #e5e9f0; border-radius:10px; padding:12px 14px; background:#fff}
    .ts-input input{border:none; outline:none; font-size:15px; width:100%}
    .ts-input .ico{display:inline-flex; width:20px; height:20px; align-items:center; justify-content:center; color:#0b63a3}
    .ts-search-btn{background:var(--blue); color:#fff; border:none; border-radius:12px; padding:14px 28px; font-size:18px; font-weight:800; cursor:pointer; transition:.2s; min-width:160px}
    .ts-search-btn:hover{background:var(--blue-600)}

    /* Dropdown panels */
    .ts-dropdown{position:relative; cursor:pointer}
    .ts-dropdown .caret{margin-left:auto; color:#54657a}

    .dd-panel{
      position:absolute; left:0; top:calc(100% + 10px);
      background:#fff; color:#111; border:1px solid #e5e9f0; border-radius:12px;
      box-shadow:0 18px 40px rgba(0,0,0,.18);
      padding:10px; min-width:280px; display:none; z-index:1000;
    }
    .dd-panel.dd-right{right:0; left:auto}
    .dd-panel.open{display:block}
    .dd-apply{margin-top:8px; background:var(--blue); color:#fff; border:none; border-radius:8px; padding:10px 14px; font-weight:800}

    /* CALENDAR styles */
    .dd-calendar{min-width:640px}
    .cal-header{display:flex; align-items:center; justify-content:space-between; padding:6px 8px 12px}
    .nav-btn{border:none; background:transparent; font-size:20px; line-height:1; padding:6px 10px; cursor:pointer; color:#0b3670}
    .nav-btn:hover{background:#f1f5fb; border-radius:8px}
    .month-labels{display:flex; gap:24px; font-weight:800; color:#0b3670}
    .cal-body{display:grid; grid-template-columns:1fr 1fr; gap:18px; padding:0 6px 10px}
    .month .dow{display:grid; grid-template-columns:repeat(7,1fr); gap:6px; padding:0 4px 6px; color:#668; font-weight:700; font-size:12px}
    .month .grid{display:grid; grid-template-columns:repeat(7,1fr); gap:6px; padding:0 4px 6px}
    .day{height:40px; display:grid; place-items:center; border-radius:10px; cursor:pointer; font-weight:600}
    .day.muted{opacity:.35; cursor:default}
    .day.in-range{background:var(--range)}
    .day.start,.day.end{background:var(--pick); color:#fff}
    .day:hover:not(.muted){outline:2px solid #cfe6ff}
    .cal-footer{display:flex; align-items:center; justify-content:space-between; gap:14px; padding:6px}
    .picked{font-weight:700; color:#0b3670}

    /* Travelers controls */
    .row{display:flex; align-items:center; justify-content:space-between; gap:12px; padding:8px 4px}
    .row + .row{border-top:1px dashed #eef2f7}
    .row .lbl{font-weight:700; color:#0b3670}
    .row .ctr{display:flex; align-items:center; gap:10px}
    .btn-circle{width:32px; height:32px; border-radius:999px; border:none; background:#0b63a3; color:#fff; font-size:18px; display:grid; place-items:center}
    .num{min-width:18px; text-align:center; font-weight:800}
    .select-like{border:1px solid #dfe5ee; padding:8px 12px; border-radius:8px; cursor:pointer; user-select:none}
    .menu{list-style:none; margin:6px 0 0; padding:6px 0; border:1px solid #dfe5ee; border-radius:8px; display:none; background:#fff}
    .menu.show{display:block}
    .menu li{padding:8px 12px; cursor:pointer}
    .menu li:hover{background:#f2f7fb}

    /* Spacer that grows to push the features down */
    .dd-spacer{height:0; transition:height .2s ease;}

    /* Feature strip */
    .ts-feature-strip{position:relative; z-index:1; background:#0b63a3; padding:20px 8px}
    .ts-features{display:grid; grid-template-columns:repeat(5,1fr); gap:18px; max-width:1200px; margin:0 auto}
    .ts-feature{background:#fff; border-radius:16px; padding:16px 14px; display:flex; flex-direction:column; align-items:center; box-shadow:0 10px 24px rgba(0,0,0,.08)}
    .ts-feature .f-ico{display:grid; place-items:center; width:42px; height:42px; border-radius:12px; background:#eef5fb; color:#0b63a3; margin-bottom:10px}
    .ts-feature .f-title{color:#111827; font-weight:700; text-align:center}

    /* Mobile bottom-sheet for dropdowns */
    @media (max-width:768px){
      .dd-panel{
        position:fixed; left:12px; right:12px; bottom:12px; top:auto;
        min-width:auto; max-height:70vh; overflow:auto; padding:14px;
      }
      .dd-calendar{min-width:auto}
      .cal-body{grid-template-columns:1fr}
      .month-labels{gap:8px; font-size:14px}
    }

    /* Responsive grid */
    @media (max-width:1200px){ .ts-form{grid-template-columns:1fr 1fr 1fr 1fr auto} }
    @media (max-width:992px){
      .ts-title{font-size:38px}
      .ts-form{grid-template-columns:1fr 1fr}
      .ts-search-btn{grid-column:span 2}
      .ts-features{grid-template-columns:repeat(3,1fr)}
    }
    @media (max-width:768px){
      .ts-title{font-size:32px}
      .ts-subtitle{font-size:18px}
      .ts-form{grid-template-columns:1fr}
      .ts-search-btn{grid-column:auto}
      .ts-features{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:480px){
      .ts-title{font-size:26px}
      .ts-subtitle{font-size:16px}
      .ts-hero-inner{padding:64px 12px 28px}
      .ts-feature .f-title{font-size:14px}
    }
  </style>

  <script>
    /* ---------- Utility ---------- */
    function fmtDate(d){
      if(!d) return '';
      return d.toLocaleDateString(undefined,{month:'short', day:'2-digit', year:'numeric'});
    }
    function sameDay(a,b){return a && b && a.getFullYear()===b.getFullYear() && a.getMonth()===b.getMonth() && a.getDate()===b.getDate();}
    function addMonths(d, n){ const x=new Date(d); x.setMonth(x.getMonth()+n); return x; }
    function firstOfMonth(d){ return new Date(d.getFullYear(), d.getMonth(), 1); }

    /* ---------- Dynamic spacer (pushes content below) ---------- */
    (function spacingManager(){
      const spacer = document.getElementById('ddSpacer');
      const panels = document.querySelectorAll('.dd-panel');

      function updateSpace(){
        let maxH = 0;
        panels.forEach(p => { if(p.classList.contains('open')) maxH = Math.max(maxH, p.offsetHeight); });
        spacer.style.height = (maxH ? maxH + 24 : 0) + 'px';
      }
      const obs = new MutationObserver(updateSpace);
      panels.forEach(p => obs.observe(p, { attributes:true, attributeFilter:['class'] }));
      window.addEventListener('resize', updateSpace);
      setTimeout(updateSpace, 0);
    })();

    /* ---------- Trip type toggles ---------- */
    (function tripType(){
      const radios = document.querySelectorAll('input[name="tripType"]');
      const display = document.getElementById('datesDisplay');
      function apply(){
        const oneway = document.querySelector('input[name="tripType"][value="oneway"]').checked;
        display.placeholder = oneway ? 'Select date' : 'Select dates';
        if(oneway && display.value.includes('—')){
          display.value = display.value.split('—')[0].trim();
        }
      }
      radios.forEach(r=>r.addEventListener('change', apply));
      apply();
    })();

    /* ---------- Two-month Calendar ---------- */
    (function calendar(){
      const field = document.getElementById('datesField');
      const panel = document.getElementById('calPanel');
      const display = document.getElementById('datesDisplay');
      const m1Label = document.getElementById('m1Label');
      const m2Label = document.getElementById('m2Label');
      const m1Grid = document.getElementById('m1Grid');
      const m2Grid = document.getElementById('m2Grid');
      const prevBtn = document.getElementById('calPrev');
      const nextBtn = document.getElementById('calNext');
      const pickStart = document.getElementById('pickStart');
      const pickDash = document.getElementById('pickDash');
      const pickEnd = document.getElementById('pickEnd');
      const applyBtn = document.getElementById('applyDates');

      let base = firstOfMonth(new Date());
      let start = null, end = null;

      function setPickedText(){
        pickStart.textContent = start ? fmtDate(start) : '—';
        pickDash.textContent = document.querySelector('input[name="tripType"][value="oneway"]').checked ? '' : '—';
        pickEnd.textContent = end ? fmtDate(end) : (document.querySelector('input[name="tripType"][value="oneway"]').checked ? '' : '—');
      }

      function fillGrid(root, y, m){
        root.innerHTML='';
        const first = new Date(y, m, 1);
        const startIdx = first.getDay();
        const daysInMonth = new Date(y, m+1, 0).getDate();
        const prevDays = new Date(y, m, 0).getDate();
        const totalCells = 42;

        for(let i=0;i<totalCells;i++){
          const cell = document.createElement('div');
          cell.className = 'day';
          let dayNum, d;

          if(i < startIdx){
            dayNum = prevDays - (startIdx - 1 - i);
            d = new Date(y, m-1, dayNum);
            cell.classList.add('muted');
          } else if(i >= startIdx + daysInMonth){
            dayNum = (i - (startIdx + daysInMonth)) + 1;
            d = new Date(y, m+1, dayNum);
            cell.classList.add('muted');
          } else {
            dayNum = i - startIdx + 1;
            d = new Date(y, m, dayNum);
          }

          cell.textContent = dayNum;

          const oneway = document.querySelector('input[name="tripType"][value="oneway"]').checked;
          const inPickedRange = start && (oneway ? sameDay(d,start) : end ? (d >= start && d <= end) : sameDay(d,start));
          if(inPickedRange) cell.classList.add('in-range');
          if(start && sameDay(d,start)) cell.classList.add('start');
          if(!oneway && end && sameDay(d,end)) cell.classList.add('end');

          cell.addEventListener('click', () => {
            const onewayNow = document.querySelector('input[name="tripType"][value="oneway"]').checked;
            if(!start || (start && end) || onewayNow){
              start = new Date(d);
              end = onewayNow ? null : null;
            } else {
              if(d < start){ end = new Date(start); start = new Date(d); }
              else { end = new Date(d); }
            }
            render();
          });

          root.appendChild(cell);
        }
      }

      function render(){
        const m1Date = new Date(base);
        const m2Date = new Date(base); m2Date.setMonth(m2Date.getMonth()+1);

        m1Label.textContent = m1Date.toLocaleDateString(undefined,{month:'long', year:'numeric'});
        m2Label.textContent = m2Date.toLocaleDateString(undefined,{month:'long', year:'numeric'});

        fillGrid(m1Grid, m1Date.getFullYear(), m1Date.getMonth());
        fillGrid(m2Grid, m2Date.getFullYear(), m2Date.getMonth());
        setPickedText();
      }

      field.addEventListener('click', (e)=>{ document.getElementById('travPanel').classList.remove('open'); panel.classList.add('open'); e.stopPropagation(); render(); });
      panel.addEventListener('click', (e)=>e.stopPropagation());
      document.addEventListener('click', ()=> panel.classList.remove('open'));

      prevBtn.addEventListener('click', ()=>{ base.setMonth(base.getMonth()-1); render(); });
      nextBtn.addEventListener('click', ()=>{ base.setMonth(base.getMonth()+1); render(); });

      applyBtn.addEventListener('click', ()=>{
        const oneway = document.querySelector('input[name="tripType"][value="oneway"]').checked;
        if(!start){ panel.classList.remove('open'); return; }
        display.value = oneway ? fmtDate(start) : (end ? `${fmtDate(start)} — ${fmtDate(end)}` : fmtDate(start));
        panel.classList.remove('open');
      });

      render();
    })();

    /* ---------- Travelers dropdown ---------- */
    (function travDd(){
      const field = document.getElementById('travField');
      const panel = document.getElementById('travPanel');
      const display = document.getElementById('travDisplay');
      const applyBtn = document.getElementById('applyTrav');
      const nums = { adults:1, children:0, infants:0 };

      function refresh(){
        const total = nums.adults + nums.children + nums.infants;
        const cls = document.getElementById('classSelect').dataset.value;
        display.value = total === 1 ? `1 Adult ${cls}` : `${total} Travelers ${cls}`;
        document.getElementById('nAdults').textContent=nums.adults;
        document.getElementById('nChildren').textContent=nums.children;
        document.getElementById('nInfants').textContent=nums.infants;
      }

      field.addEventListener('click', (e)=>{ document.getElementById('calPanel').classList.remove('open'); panel.classList.add('open'); e.stopPropagation(); });
      panel.addEventListener('click', (e)=>e.stopPropagation());
      document.addEventListener('click', ()=> panel.classList.remove('open'));

      panel.querySelectorAll('.btn-circle').forEach(btn=>{
        btn.addEventListener('click', ()=>{
          const k = btn.dataset.key; const t = +btn.dataset.t;
          nums[k] = Math.max( (k==='adults'?1:0), nums[k] + t );
          refresh();
        });
      });

      applyBtn.addEventListener('click', ()=>panel.classList.remove('open'));
      refresh();

      const cSel = document.getElementById('classSelect');
      const cMenu = document.getElementById('classMenu');
      cSel.addEventListener('click', (e)=>{ cMenu.classList.toggle('show'); e.stopPropagation(); });
      cMenu.querySelectorAll('li').forEach(li=>{
        li.addEventListener('click', ()=>{ cSel.textContent = li.textContent+' ▾'; cSel.dataset.value = li.dataset.v; cMenu.classList.remove('show'); refresh(); });
      });
      document.addEventListener('click', (e)=>{ if(!cSel.contains(e.target) && !cMenu.contains(e.target)) cMenu.classList.remove('show'); }, true);
    })();
  </script>
</section>
