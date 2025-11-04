@extends('layouts.app')

@section('title', 'Terms & Conditions | Crown Tours Reservation')

@section('content')
<section class="ff-page-wrap">
  <div class="ff-page-header">
    <h1>Terms & Conditions</h1>
    <p class="ff-updated">Last Updated: 11/04/2025</p>
  </div>

  <div class="ff-card">
    <div class="ff-card-body ff-prose">
      <p><strong>Crown Tours (Muhammad shahid  )</strong> is the owner and operator of <strong>Crowntoursreservation.com</strong> By accessing or using our Website, you agree to comply with and be bound by these Terms and Conditions, as well as our Privacy Policy. If you do not agree to these terms, please do not use the Website</p>

      <h3>1. Acceptance of Terms</h3>
      <p>By using the Website, you agree to abide by these Terms and Conditions, along with any additional terms, conditions, or policies posted on the Website. We may update or modify these Terms and Conditions at any time, and changes will be effective immediately upon posting. Continued use of the Website after such updates indicates your acceptance of the new terms.</p>

      <h3>2. Services Provided</h3>
      <p>Crowntoursreservation.com connects users with third-party agents who assist with bookings, cancellations, changes, group coordination, and related services via phone. We do not offer direct online booking or account management on the Website. All services are coordinated exclusively through affiliate partner agents via phone communication.</p>

      <h3>3. User Responsibilities</h3>
      <p>As a user of the Website, you agree to:</p>
      <ul>
        <li>Provide accurate, current, and complete information during any interaction or request.</li>
        <li>Use the Website only for lawful purposes and in a manner that complies with applicable laws and regulations.</li>
        <li>Refrain from using the Website for any fraudulent, harmful, or illegal activities.</li>
      </ul>

      <h3>4. Communication and Phone-Based Assistance</h3>
      <p>All services, including inquiries, modifications, cancellations, and support, are offered via phone through our affiliate agents. You are responsible for providing accurate and accessible contact information.</p>

      <h3>5. Booking Process and Payments</h3>
      <p>All arrangements are managed by third-party agents over the phone. Availability, conditions, and related terms are determined by the respective service providers. Crown Tours does not process payments directly through the Website.</p>

      <h3>6. Cancellations, Refunds, and Modifications</h3>
      <p>Cancellation and refund procedures are governed solely by the service provider’s policies. Our affiliate agents assist with these requests by phone, but Crown Tours is not responsible for decisions or delays related to the providers.</p>

      <h3>7. Pricing Disclaimer</h3>
      <p>While we strive to provide accurate information, final terms and availability are confirmed by the service provider during phone interaction. Crown  Tours is not liable for discrepancies or updates after publication.</p>

      <h3>8. Intellectual Property</h3>
      <p>All content on this Website, including text, graphics, logos, and brand elements, is protected by applicable intellectual property laws. Unauthorized use, reproduction, or redistribution is prohibited.</p>

      <h3>9. Limitation of Liability</h3>
      <p>To the fullest extent permitted by law, Crowntoursreservation.com disclaims liability for indirect, incidental, or consequential damages arising from the use of the Website or third-party services</p>

      <h3>10. Indemnification</h3>
      <p>You agree to indemnify and hold Crown Tours and its affiliates harmless from any claims, losses, or damages resulting from your misuse of the Website or violation of these Terms.</p>

      <h3>11. Governing Law</h3>
      <p>These Terms shall be governed by the laws of the jurisdiction where CrownTours operates. Any disputes will be resolved by the applicable local courts.</p>

      <h3>12. Termination</h3>
      <p>We reserve the right to restrict or terminate access to the Website for users who violate these Terms and Conditions.</p>

      <h3>13. Changes to Terms</h3>
      <p>These Terms may be updated at any time. Updated terms will be posted on this page. Continued use of the Website signifies acceptance of the changes</p>
    </div>
  </div>
</section>
@endsection

@push('styles')
<style>
  .ff-page-wrap{max-width:1100px;margin:28px auto;padding:0 16px}
  .ff-page-header{margin-bottom:14px;text-align:left}
  .ff-page-header h1{margin:0 0 4px;font-size:34px;font-weight:800;color:#0f1621}
  .ff-updated{margin:0;color:#6b7280;font-size:14px}
  .ff-card{background:#fff;border:1px solid #e8eef5;border-radius:16px;box-shadow:0 18px 50px rgba(16,22,35,.08)}
  .ff-card-body{padding:22px}
  .ff-prose p{color:#2a3342;line-height:1.7}
  .ff-prose h3{margin-top:14px;margin-bottom:6px;color:#0b63a3}
  .ff-prose ul{padding-left:18px}
  .ff-prose li{margin:6px 0}
  @media (max-width:640px){
    .ff-page-header h1{font-size:28px}
  }
</style>
@endpush
