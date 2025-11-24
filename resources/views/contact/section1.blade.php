{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Us | Crown Tours Reservation')

@section('content')
<style>
  :root{--blue:#0B63A3;--blue-600:#094f83;--ink:#101623;--muted:#6b7280;--card:#fff;--shadow:0 18px 50px rgba(16,22,35,.08);--radius:16px}
  .ff-page-wrap{max-width:1100px;margin:28px auto;padding:0 16px}
  .ff-page-header h1{margin:0 0 4px;font-size:34px;font-weight:800;color:#0f1621}
  .ff-sub{margin:0;color:#6b7280}
  .ff-grid{display:grid;grid-template-columns:1.2fr .8fr;gap:16px;margin-top:14px}
  .ff-card{background:var(--card);border:1px solid #e8eef5;border-radius:var(--radius);box-shadow:var(--shadow)}
  .ff-card.side{display:flex}
  .ff-card-body{padding:20px}
  .ff-form{padding:20px}
  .ff-field{display:flex;flex-direction:column;margin-bottom:12px}
  .ff-field label{font-weight:700;color:#0f1621;margin-bottom:6px}
  .ff-field .req{color:#ef4444}
  .ff-field input,.ff-field textarea{
    border:1px solid #dfe5ee;border-radius:10px;padding:12px 14px;font-size:15px;outline:none;transition:.15s;background:#fff
  }
  .ff-field input:focus,.ff-field textarea:focus{border-color:#b9d6f6; box-shadow:0 0 0 3px rgba(11,99,163,.12)}
  .is-invalid{border-color:#ef4444!important; box-shadow:0 0 0 3px rgba(239,68,68,.12)!important}
  .ff-btn-primary{background:#0B63A3;color:#fff;border:none;border-radius:12px;padding:12px 18px;font-weight:800;cursor:pointer}
  .ff-btn-primary:hover{background:#094f83}
  .ff-recap{margin-top:10px;color:#6b7280;font-size:13px}
  .ff-alert{padding:12px 14px;border-radius:12px;margin:10px 0}
  .ff-alert.success{background:#e8f7ee;color:#0a7a2d;border:1px solid #b7ebc7}
  .ff-alert.danger{background:#fff2f2;color:#b42318;border:1px solid #ffd6d6}
  .ff-error{color:#b42318;font-size:13px;margin-top:6px}
  .ff-prose p{color:#2a3342;line-height:1.6}
  .ff-info{display:grid;gap:8px;margin-top:10px}
  .ff-info svg{width:18px;height:18px;margin-right:8px;fill:#0B63A3}
  .ff-info > div{display:flex;align-items:center;color:#0f1621}
  @media (max-width:992px){ .ff-grid{grid-template-columns:1fr} }
  @media (max-width:640px){ .ff-page-header h1{font-size:28px} }
</style>

<section class="ff-page-wrap">
  <div class="ff-page-header">
    <h1>Contact Us</h1>
    <p class="ff-sub">Drop us a line!</p>
  </div>

  @if(session('ok'))
    <div class="ff-alert success">{{ session('ok') }}</div>
  @endif

  @if ($errors->any())
    <div class="ff-alert danger">
      <strong>Please fix the errors below.</strong>
    </div>
  @endif

  <div class="ff-grid">
    <!-- Form -->
    <div class="ff-card">
      <form class="ff-form" action="" method="POST" novalidate>
        @csrf

        <div class="ff-field">
          <label for="name">Name</label>
          <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Your full name"
                 class="@error('name') is-invalid @enderror">
          @error('name')<p class="ff-error">{{ $message }}</p>@enderror
        </div>

        <div class="ff-field">
          <label for="email">Email <span class="req">*</span></label>
          <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com"
                 class="@error('email') is-invalid @enderror" required>
          @error('email')<p class="ff-error">{{ $message }}</p>@enderror
        </div>

        <div class="ff-field">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="6" placeholder="How can we help?"
                    class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
          @error('message')<p class="ff-error">{{ $message }}</p>@enderror
        </div>

        <button class="ff-btn-primary" type="submit">Send</button>

        <p class="ff-recap">
          This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
        </p>
      </form>
    </div>

    <!-- Helpful text / hours -->
    <div class="ff-card side">
      <div class="ff-card-body ff-prose">
        <p>If you need any assistance or would like to report a problem, feel free to reach out to us anytime —</p>
        <p><strong>We love our customers, so feel free to visit during normal business hours.</strong></p>

        <div class="ff-info">
          
          <div>
            <svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.6 3.1 4.1 5.6 7.2 7.2l2.4-2.4c.3-.3.8-.4 1.2-.3 1.3.4 2.7.6 4.1.6.7 0 1.2.6 1.2 1.2V22c0 .7-.6 1.2-1.2 1.2C9.5 23.2.8 14.5.8 3.2.8 2.6 1.3 2 2 2h4.9c.7 0 1.2.6 1.2 1.2 0 1.4.2 2.8.6 4.1.1.4 0 .9-.3 1.2L6.6 10.8Z"/></svg>
            602-888-1396
          </div>
          <div>
            <svg viewBox="0 0 24 24"><path d="M2 4h20v14H2V4Zm2 2v2l8 5 8-5V6H4Zm16 10V9l-8 5-8-5v7h16Z"/></svg>
            info@dreamtoursreservation.com
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
