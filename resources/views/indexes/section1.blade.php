<!-- =======================
  HERO + FLIGHTS SEARCH (with default dates & wait overlay)
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

        <form class="ts-form" id="flightForm" action="{{ route('search') }}" >
          <!-- Origin -->
          <div class="ts-input">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5Z"/></svg>
            </span>
            <input id="originInput" type="text" placeholder="Origin" aria-label="Origin" autocomplete="off">
          </div>

          <!-- Destination -->
          <div class="ts-input">
            <span class="ico">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5Z"/></svg>
            </span>
            <input id="destInput" type="text" placeholder="Destination" aria-label="Destination" autocomplete="off">
          </div>

          <!-- Dates -->
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
                  <div class="label" id="m1Label">—</div>
                  <div class="label" id="m2Label">—</div>
                </div>
                <button type="button" class="nav-btn" id="calNext" aria-label="Next month">❯</button>
              </div>

              <div class="cal-body">
                <div class="month" id="month1">
                  <div class="dow">
                    <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                  </div>
                  <div class="grid" id="m1Grid"></div>
                </div>
                <div class="month" id="month2">
                  <div class="dow">
                    <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                  </div>
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

          <button class="ts-search-btn" type="submit" id="searchBtn">Search</button>
        </form>
      </div>
    </div>

    <!-- Your Feature Strip stays here (unchanged) -->
  </div>

  <style>
    :root{
      --blue:#0B63A3; --blue-600:#094f83; --white:#fff; --ink:#101623; --muted:#6b7280;
      --card:#ffffff; --shadow:0 18px 50px rgba(16,22,35,.18);
      --radius-xl:14px; --range:#e9f3ff; --pick:#0B63A3; --danger:#e74c3c;
    }

    .ts-hero{position:relative;overflow:hidden;background:#003d7a;color:var(--white)}
    .ts-hero-bg{position:absolute; inset:0; background:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat; filter:saturate(105%) contrast(104%)}
    .ts-hero::after{content:""; position:absolute; inset:0; background:linear-gradient(to bottom, rgba(0,0,0,.15), rgba(0,0,0,.25))}
    .ts-hero-inner{position:relative; z-index:1; max-width:1200px; margin:0 auto; padding:72px 16px 36px}
    .ts-title{margin:0; text-align:center; font-size:44px; font-weight:800; letter-spacing:.6px; text-shadow:0 2px 12px rgba(0,0,0,.25)}
    .ts-subtitle{margin:10px 0 24px; text-align:center; font-size:20px; opacity:.95; text-shadow:0 2px 10px rgba(0,0,0,.25)}

    .ts-card{position:relative; background:var(--card); color:var(--ink);
      border-radius:var(--radius-xl); box-shadow:var(--shadow);
      margin:22px auto var(--dd-space, 28px); overflow:visible; z-index:3;}
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
    .ts-input.error{border-color:var(--danger); box-shadow:0 0 0 3px rgba(231,76,60,.12)}

    .ts-dropdown{position:relative; cursor:pointer}
    .ts-dropdown .caret{margin-left:auto; color:#54657a}

    .dd-panel{position:absolute; left:0; top:calc(100% + 10px); background:#fff; color:#111; border:1px solid #e5e9f0; border-radius:12px;
      box-shadow:0 18px 40px rgba(0,0,0,.18); padding:10px; min-width:280px; display:none; z-index:1000;}
    .dd-panel.dd-right{right:0; left:auto}
    .dd-panel.open{display:block}
    .dd-apply{margin-top:8px; background:var(--blue); color:#fff; border:none; border-radius:8px; padding:10px 14px; font-weight:800}

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

    /* Wait Overlay */
    .wait-overlay[hidden]{display:none}
    .wait-overlay{position:fixed; inset:0; background:rgba(255,255,255,.92); z-index:9999; display:grid; place-items:center; padding:16px}
    .wait-card{width:100%; max-width:720px; background:#fff; border:1px solid #e8eef5; border-radius:16px; box-shadow:0 18px 50px rgba(16,22,35,.18); padding:28px; text-align:center}
    .wait-logo{display:flex; align-items:center; justify-content:center; gap:10px; margin-bottom:10px}
    .wait-logo svg{width:40px; height:40px}
    .wait-title{font-size:32px; font-weight:900; color:#0f1621; margin:4px 0 10px}
    .wait-sub{color:#2a3342; opacity:.9; margin:0 0 14px}
    .wait-plane{width:140px; margin:12px auto 18px; opacity:.98}
    .wait-btn{display:inline-flex; align-items:center; gap:10px; background:#2eac4b; color:#fff; padding:14px 18px; border-radius:999px; text-decoration:none; font-weight:900; border:1px solid #1e7f34; box-shadow:0 10px 24px rgba(0,0,0,.15)}
    .wait-btn:hover{background:#269342}
    .wait-dots{display:inline-block; margin-left:6px}
    .wait-dot{width:6px; height:6px; background:#0B63A3; border-radius:50%; display:inline-block; margin:0 2px; animation:b .9s infinite}
    .wait-dot:nth-child(2){animation-delay:.12s}
    .wait-dot:nth-child(3){animation-delay:.24s}
    @keyframes b{0%{opacity:.25; transform:translateY(0)}50%{opacity:1; transform:translateY(-3px)}100%{opacity:.25; transform:translateY(0)}}

    /* Mobile bottom-sheet for dropdowns */
    @media (max-width:768px){
      .dd-panel{position:fixed; left:12px; right:12px; bottom:12px; top:auto; min-width:auto; max-height:70vh; overflow:auto; padding:14px;}
      .dd-calendar{min-width:auto}
      .cal-body{grid-template-columns:1fr}
      .month-labels{gap:8px; font-size:14px}
    }

    @media (max-width:1200px){ .ts-form{grid-template-columns:1fr 1fr 1fr 1fr auto} }
    @media (max-width:992px){
      .ts-title{font-size:38px}
      .ts-form{grid-template-columns:1fr 1fr}
      .ts-search-btn{grid-column:span 2}
    }
    @media (max-width:768px){
      .ts-title{font-size:32px}
      .ts-subtitle{font-size:18px}
      .ts-form{grid-template-columns:1fr}
      .ts-search-btn{grid-column:auto}
    }
    @media (max-width:480px){
      .ts-title{font-size:26px}
      .ts-subtitle{font-size:16px}
      .ts-hero-inner{padding:64px 12px 28px}
    }
  </style>

  <script>
    /* ---------- Utils ---------- */
    function fmtDate(d){ return d ? d.toLocaleDateString(undefined,{month:'short', day:'2-digit', year:'numeric'}) : ''; }
    function sameDay(a,b){return a && b && a.getFullYear()===b.getFullYear() && a.getMonth()===b.getMonth() && a.getDate()===b.getDate();}
    function addDays(d, n){ const x=new Date(d); x.setDate(x.getDate()+n); return x; }
    function addMonths(d, n){ const x=new Date(d); x.setMonth(x.getMonth()+n); return x; }
    function firstOfMonth(d){ return new Date(d.getFullYear(), d.getMonth(), 1); }

    // Push card down when dropdown is open (so it doesn't overlap features)
    (function spacingManager(){
      const card = document.getElementById('searchCard');
      const panels = document.querySelectorAll('.dd-panel');
      function updateSpace(){
        let maxH = 0;
        panels.forEach(p => { if(p.classList.contains('open')) maxH = Math.max(maxH, p.offsetHeight); });
        card.style.setProperty('--dd-space', (maxH ? maxH + 40 : 28) + 'px');
      }
      const obs = new MutationObserver(updateSpace);
      panels.forEach(p => obs.observe(p, { attributes:true, attributeFilter:['class'] }));
      window.addEventListener('resize', updateSpace);
    })();

    /* ---------- Trip type placeholder ---------- */
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

    /* ---------- Two-month Calendar (defaults to today → +4 days) ---------- */
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

      let base = firstOfMonth(new Date()); // first month visible
      let start = new Date();             // default: today
      let end   = addDays(start, 4);      // default: +4 days

      function setPickedText(){
        const oneway = document.querySelector('input[name="tripType"][value="oneway"]').checked;
        pickStart.textContent = start ? fmtDate(start) : '—';
        pickDash.textContent  = oneway ? '' : '—';
        pickEnd.textContent   = oneway ? '' : (end ? fmtDate(end) : '—');
      }

      function buildMonth(root, monthDate){
        root.innerHTML = '';
        const y = monthDate.getFullYear(), m = monthDate.getMonth();
        return {y, m};
      }

      function fillGrid(root, y, m){
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
        const m1 = buildMonth(m1Grid, base);
        const m2Date = addMonths(base, 1);
        const m2 = buildMonth(m2Grid, m2Date);

        m1Label.textContent = (new Date(m1.y, m1.m, 1)).toLocaleDateString(undefined,{month:'long', year:'numeric'});
        m2Label.textContent = (new Date(m2.y, m2.m, 1)).toLocaleDateString(undefined,{month:'long', year:'numeric'});

        fillGrid(m1Grid, m1.y, m1.m);
        fillGrid(m2Grid, m2.y, m2.m);
        setPickedText();
      }

      // Open/close handling
      field.addEventListener('click', (e)=>{ document.getElementById('travPanel').classList.remove('open'); panel.classList.add('open'); e.stopPropagation(); render(); });
      panel.addEventListener('click', (e)=>e.stopPropagation());
      document.addEventListener('click', ()=> panel.classList.remove('open'));

      // Navigation
      prevBtn.addEventListener('click', ()=>{ base = addMonths(base, -1); render(); });
      nextBtn.addEventListener('click', ()=>{ base = addMonths(base, 1); render(); });

      // Apply + prefill initial display (today → +4)
      function applyToDisplay(){
        const oneway = document.querySelector('input[name="tripType"][value="oneway"]').checked;
        display.value = oneway ? fmtDate(start) : `${fmtDate(start)} — ${fmtDate(end)}`;
      }
      applyBtn.addEventListener('click', ()=>{ if(!start){ panel.classList.remove('open'); return; } applyToDisplay(); panel.classList.remove('open'); });

      // initialize visible text with defaults
      applyToDisplay();
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

    /* ---------- Simple form validation + wait overlay ---------- */
    (function searchFlow(){
      const form = document.getElementById('flightForm');
      const origin = document.getElementById('originInput');
      const dest   = document.getElementById('destInput');
      const dates  = document.getElementById('datesDisplay');
      const trav   = document.getElementById('travDisplay');

      function setErr(el, on){ el.closest('.ts-input').classList.toggle('error', !!on); }

      function valid(){
        let ok = true;
        if(!origin.value.trim()){ setErr(origin, true); ok=false; } else setErr(origin, false);
        if(!dest.value.trim()){ setErr(dest, true); ok=false; } else setErr(dest, false);
        if(!dates.value.trim()){ document.getElementById('datesField').classList.add('error'); ok=false; } else document.getElementById('datesField').classList.remove('error');
        if(!trav.value.trim()){ document.getElementById('travField').classList.add('error'); ok=false; } else document.getElementById('travField').classList.remove('error');
        return ok;
      }

      form.addEventListener('submit', (e)=>{
        e.preventDefault();
        if(!valid()) return;

        // Show wait overlay
        document.getElementById('waitOverlay').hidden = false;

        // (Optional) you can redirect after a few seconds:
        // setTimeout(()=>{ window.location.href = '/results'; }, 2200);
      });
    })();
  </script>
</section>

<!-- =======================
  WAIT OVERLAY (appears after Search)
======================= -->
<div class="wait-overlay" id="waitOverlay" hidden>
  <div class="wait-card" role="dialog" aria-label="Searching for unpublished exclusive airfares">
    <!-- ✖ Close button -->
    <button
      class="wait-close"
      type="button"
      aria-label="Close overlay"
      onclick="document.getElementById('waitOverlay').hidden = true;"
    >&times;</button>

    <div class="wait-logo">
      <svg viewBox="0 0 32 32" aria-hidden="true" fill="#0B63A3">
        <path d="M16 4c-1.1 0-2 .9-2 2v4l-8 4v2l8-2v6l-3 2v2l5-1 5 1v-2l-3-2v-6l8 2v-2l-8-4V6c0-1.1-.9-2-2-2z"/>
      </svg>
      <span style="font-weight:900;color:#0f1621;font-size:20px">
        Future <span style="color:#d86922">Flight</span>
      </span>
    </div>

    <h3 class="wait-title">
      Please Wait
      <span class="wait-dots">
        <span class="wait-dot"></span><span class="wait-dot"></span><span class="wait-dot"></span>
      </span>
    </h3>
    <p class="wait-sub">
      We’re searching unpublished exclusive airfares for you<br>
      Call now from instant support save up to <strong>65%</strong> on Airline Reservation.
    </p>

    <img class="wait-plane" alt="" src="https://cdn.jsdelivr.net/gh/mirokariman/assets/plane-illustration.png">

    <a class="wait-btn" href="tel:+1-833-387-2565" aria-label="Call +1-833-387-2565">
      <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
        <path d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2L6.6 10.8Z" fill="#fff"/>
      </svg>
      CALL NOW +1-833-387-2565
    </a>
  </div>
</div>

<!-- ✖ Button Style -->
<style>
  .wait-close {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 36px;
    height: 36px;
    border: none;
    border-radius: 50%;
    background: #f1f5f9;
    color: #0B63A3;
    font-size: 24px;
    line-height: 1;
    cursor: pointer;
    display: grid;
    place-items: center;
    box-shadow: 0 4px 10px rgba(0,0,0,.08);
    transition: all .2s ease;
  }
  .wait-close:hover {
    background: #0B63A3;
    color: #fff;
    transform: rotate(90deg);
  }
</style>

