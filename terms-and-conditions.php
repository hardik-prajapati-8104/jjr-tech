<?php
include_once('elements/header.php');
?>

<style>
  :root{
    --primary:#125D9E;
    --primary-dark:#0C4676;
    --primary-light:#E8F1FA;
    --accent:#F7941D;
    --navy:#0B2E4E;
    --text:#4A5B6B;
    --heading:#0F2A44;
    --border:#E2E9F0;
    --radius:10px;
  }
 
  /* ===== PAGE HERO ===== */
  .page-hero{
    background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);
    padding:70px 24px 64px;
    position:relative;overflow:hidden;
  }
  .page-hero::after{
    content:"";position:absolute;right:-80px;top:-80px;width:320px;height:320px;
    border-radius:50%;background:rgba(255,255,255,.06);
  }
  .page-hero::before{
    content:"";position:absolute;left:10%;bottom:-120px;width:220px;height:220px;
    border-radius:50%;background:rgba(255,255,255,.05);
  }
  .hero-inner{max-width:1180px;margin:0 auto;position:relative;z-index:2;}
  .breadcrumb{
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(255,255,255,.12);color:#fff;padding:6px 16px;border-radius:20px;
    font-size:12.5px;font-weight:600;letter-spacing:.4px;margin-bottom:20px;
  }
  .breadcrumb .dot{width:5px;height:5px;background:var(--accent);border-radius:50%;}
  .page-hero h1{color:#fff;font-size:40px;margin-bottom:12px;}
  .page-hero p{color:#D9E8F5;max-width:540px;font-size:15.5px;}
  .hero-switch{
    display:inline-flex;gap:6px;margin-top:24px;background:rgba(255,255,255,.1);
    padding:5px;border-radius:30px;flex-wrap:wrap;
  }
  .hero-switch a{
    padding:9px 20px;border-radius:24px;font-size:13.5px;font-weight:600;color:#D9E8F5;
    transition:.2s;
  }
  .hero-switch a.active{background:#fff;color:var(--primary-dark);}
  .hero-switch a:not(.active):hover{color:#fff;}

  /* ===== LAYOUT ===== */
  .content-section{padding:70px 24px 90px;}
  .layout{display:grid;grid-template-columns:270px 1fr;gap:56px;max-width:1180px;margin:0 auto;align-items:start;}

  /* Sidebar */
  .sidebar{
    position:sticky;top:100px;
    background:var(--primary-light);
    border-radius:var(--radius);
    padding:28px 24px;
  }
  .sidebar h4{font-size:14px;text-transform:uppercase;letter-spacing:.5px;color:var(--primary);margin-bottom:18px;}
  .sidebar ul li{margin-bottom:4px;}
  .sidebar ul li a{
    display:block;padding:9px 12px;border-radius:6px;font-size:14px;color:var(--heading);
    font-weight:500;transition:.2s;border-left:3px solid transparent;
  }
  .sidebar ul li a:hover, .sidebar ul li a.active{
    background:#fff;color:var(--primary);border-left-color:var(--primary);
  }
  .sidebar .updated{
    margin-top:22px;padding-top:18px;border-top:1px solid #cfe0f0;
    font-size:12.5px;color:var(--text);
  }
  .sidebar .updated strong{color:var(--heading);display:block;margin-bottom:2px;}
  .sidebar .related{
    margin-top:18px;padding-top:18px;border-top:1px solid #cfe0f0;
    display:flex;flex-direction:column;gap:8px;
  }
  .sidebar .related a{
    display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:600;color:var(--primary);
  }

  /* Main content */
  .policy-block{margin-bottom:44px;scroll-margin-top:100px;}
  .policy-block .num{
    display:inline-flex;align-items:center;justify-content:center;
    width:34px;height:34px;background:var(--primary);color:#fff;border-radius:8px;
    font-family:'Poppins',sans-serif;font-weight:700;font-size:14px;margin-right:12px;
    flex-shrink:0;
  }
  .policy-block h2{
    font-size:24px;display:flex;align-items:center;margin-bottom:16px;
  }
  .policy-block h3{font-size:17px;margin:20px 0 8px;color:var(--primary-dark);}
  .policy-block p{margin-bottom:14px;color:var(--text);}
  .policy-block ul, .policy-block ol{margin:0 0 14px 0;}
  .policy-block ul li{
    position:relative;padding-left:22px;margin-bottom:9px;color:var(--text);
  }
  .policy-block ul li::before{
    content:"";position:absolute;left:0;top:9px;width:8px;height:8px;
    background:var(--primary);border-radius:2px;
  }
  .policy-block ol{counter-reset:item;}
  .policy-block ol li{
    position:relative;padding-left:30px;margin-bottom:10px;color:var(--text);
    counter-increment:item;
  }
  .policy-block ol li::before{
    content:counter(item);position:absolute;left:0;top:0;
    width:20px;height:20px;background:var(--primary-light);color:var(--primary);
    font-size:11px;font-weight:700;border-radius:50%;display:flex;align-items:center;justify-content:center;
  }
  .policy-block a.inline-link{color:var(--primary);font-weight:600;border-bottom:1px solid var(--primary);}

  .intro-card{
    background:var(--primary-light);border-left:4px solid var(--primary);
    border-radius:8px;padding:22px 24px;margin-bottom:46px;
  }
  .intro-card p{margin-bottom:0;color:var(--navy);font-size:15px;}

  /* Notice / warning card */
  .notice-card{
    background:#FDF6EC;border-left:4px solid var(--accent);
    border-radius:8px;padding:18px 22px;margin:20px 0;
  }
  .notice-card p{margin-bottom:0;color:#7A4E10;font-size:14px;}
  .notice-card strong{color:#5C3A0B;}

  /* Contact card */
  .contact-card{
    background:var(--navy);border-radius:14px;padding:36px 40px;
    display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;
    margin-top:20px;
  }
  .contact-card h3{color:#fff;font-size:20px;margin-bottom:6px;}
  .contact-card p{color:#B9CDE0;margin-bottom:0;font-size:14px;}
  .contact-card a.btn{
    background:var(--accent);color:#fff;padding:13px 28px;border-radius:30px;
    font-weight:600;font-size:14px;white-space:nowrap;flex-shrink:0;
  }

  /* Cross-link strip */
  .cross-link-strip{
    display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;
    background:#fff;border:1px solid var(--border);border-radius:10px;
    padding:20px 24px;margin-bottom:46px;
  }
  .cross-link-strip p{margin:0;font-size:14.5px;color:var(--text);}
  .cross-link-strip p strong{color:var(--heading);}
  .cross-link-strip a{
    color:var(--primary);font-weight:600;font-size:14px;white-space:nowrap;
    border:1.5px solid var(--primary);padding:9px 18px;border-radius:24px;transition:.2s;
  }
  .cross-link-strip a:hover{background:var(--primary);color:#fff;}

  /* ===== FOOTER ===== */
  footer{background:var(--navy);color:#B9CDE0;padding:60px 24px 24px;}
  .footer-grid{
    max-width:1180px;margin:0 auto;display:grid;
    grid-template-columns:1.6fr 1fr 1fr 1.3fr;gap:40px;padding-bottom:36px;
    border-bottom:1px solid rgba(255,255,255,.1);
  }
  .footer-logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:20px;color:#fff;margin-bottom:14px;}
  .footer-logo span{color:var(--accent);}
  .footer-grid p{font-size:13.5px;line-height:1.8;color:#93AAC2;}
  .footer-grid h4{color:#fff;font-size:15px;margin-bottom:18px;}
  .footer-grid ul li{margin-bottom:11px;font-size:13.5px;}
  .footer-grid ul li a:hover{color:var(--accent);}
  .footer-bottom{
    max-width:1180px;margin:0 auto;padding-top:22px;
    display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;font-size:13px;color:#7E96AF;
  }
  .footer-bottom a:hover{color:#fff;}

  @media(max-width:900px){
    .layout{grid-template-columns:1fr;}
    .sidebar{position:static;}
    nav{display:none;}
    .footer-grid{grid-template-columns:1fr 1fr;}
    .page-hero h1{font-size:30px;}
    .cross-link-strip{flex-direction:column;align-items:flex-start;}
  }
</style>

<section class="page-hero">
  <div class="hero-inner">
    <div class="breadcrumb"><span class="dot"></span> LEGAL</div>
    <h1>Terms &amp; Conditions</h1>
    <p>The rules and guidelines that govern your use of the JJR Tech website and services.</p>
    <div class="hero-switch">
      <a href="terms-and-conditions.php" class="active">Terms &amp; Conditions</a>
      <a href="privacy-policy.php">Privacy Policy</a>
      <a href="cookie-policy.php">Cookie Policy</a>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="layout">

    <aside class="sidebar">
      <h4>On This Page</h4>
      <ul>
        <li><a href="#acceptance" class="active">Acceptance of Terms</a></li>
        <li><a href="#services">Our Services</a></li>
        <li><a href="#use-of-website">Use of Our Website</a></li>
        <li><a href="#intellectual-property">Intellectual Property</a></li>
        <li><a href="#client-obligations">Client Obligations</a></li>
        <li><a href="#payment">Payment Terms</a></li>
        <li><a href="#warranties">Warranties &amp; Disclaimers</a></li>
        <li><a href="#liability">Limitation of Liability</a></li>
        <li><a href="#termination">Termination</a></li>
        <li><a href="#governing-law">Governing Law</a></li>
        <li><a href="#changes">Changes to Terms</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      <div class="updated">
        <strong>Last Updated</strong>
        August 31, 2026
      </div>
      <div class="related">
        <a href="privacy-policy.php">→ See our Privacy Policy</a>
        <a href="cookie-policy.php">→ See our Cookie Policy</a>
      </div>
    </aside>

    <main>
      <div class="intro-card">
        <p>These Terms &amp; Conditions ("Terms") govern your access to and use of the JJR Tech website and any IT infrastructure, network, web development, cloud &amp; database, or digital platform services we provide. By accessing our website or engaging our services, you agree to be bound by these Terms. If you do not agree, please do not use our website or services.</p>
      </div>

      <div class="policy-block" id="acceptance">
        <h2><span class="num">01</span>Acceptance of Terms</h2>
        <p>By visiting our website, submitting a quote request, or entering into a service agreement with JJR Tech, you confirm that you have read, understood, and agree to be bound by these Terms, along with our Privacy Policy and Cookie Policy. These Terms apply to all visitors, clients, and users of our website and services.</p>
      </div>

      <div class="policy-block" id="services">
        <h2><span class="num">02</span>Our Services</h2>
        <p>JJR Tech provides technology solutions including but not limited to:</p>
        <ul>
          <li>IT infrastructure and network services</li>
          <li>Web development and software engineering</li>
          <li>Cloud &amp; database solutions</li>
          <li>Digital platforms and technology support</li>
          <li>Electronic chips programming and related engineering services</li>
        </ul>
        <p>The specific scope, deliverables, timelines, and fees for any engagement will be set out in a separate proposal, statement of work, or service agreement, which forms part of the binding contract between you and JJR Tech alongside these Terms.</p>
      </div>

      <div class="policy-block" id="use-of-website">
        <h2><span class="num">03</span>Use of Our Website</h2>
        <p>You agree to use our website only for lawful purposes and in a way that does not infringe the rights of, or restrict or inhibit the use and enjoyment of, the site by any third party. Prohibited activities include:</p>
        <ul>
          <li>Attempting to gain unauthorized access to our systems, servers, or networks</li>
          <li>Uploading or transmitting viruses, malware, or any other harmful code</li>
          <li>Scraping, data-mining, or harvesting content without our prior written consent</li>
          <li>Impersonating any person or entity, or misrepresenting your affiliation with any party</li>
        </ul>
      </div>

      <div class="policy-block" id="intellectual-property">
        <h2><span class="num">04</span>Intellectual Property</h2>
        <p>All content on our website — including text, graphics, logos, icons, images, and software — is the property of JJR Tech or our licensors and is protected by applicable intellectual property laws. Unless otherwise agreed in writing:</p>
        <ul>
          <li>You may not reproduce, distribute, modify, or create derivative works from our website content without prior written permission</li>
          <li>Custom deliverables built for clients (code, designs, documentation) are governed by the intellectual property terms set out in the applicable service agreement</li>
          <li>Our company name, logo, and branding may not be used without our express consent</li>
        </ul>
      </div>

      <div class="policy-block" id="client-obligations">
        <h2><span class="num">05</span>Client Obligations</h2>
        <p>When engaging JJR Tech for services, you agree to:</p>
        <ul>
          <li>Provide accurate, complete, and timely information necessary for us to deliver the agreed services</li>
          <li>Ensure you have the right to share any data, content, or materials provided to us</li>
          <li>Grant reasonable access to systems, personnel, or environments required for implementation and support</li>
          <li>Review and respond to deliverables within the timeframes outlined in the applicable service agreement</li>
        </ul>
      </div>

      <div class="policy-block" id="payment">
        <h2><span class="num">06</span>Payment Terms</h2>
        <p>Fees for services are set out in the applicable proposal or service agreement. Unless otherwise agreed:</p>
        <ol>
          <li>Invoices are payable within the timeframe stated on the invoice, typically net 15 or net 30 days</li>
          <li>Late payments may be subject to interest charges or suspension of ongoing services</li>
          <li>All fees are exclusive of applicable taxes unless stated otherwise</li>
          <li>Any project scope changes may result in revised fees, communicated and agreed in advance</li>
        </ol>
      </div>

      <div class="cross-link-strip">
        <p><strong>Want to know how we handle your data?</strong> Our Privacy Policy explains what information we collect and why.</p>
        <a href="privacy-policy.php">View Privacy Policy</a>
      </div>

      <div class="policy-block" id="warranties">
        <h2><span class="num">07</span>Warranties &amp; Disclaimers</h2>
        <p>We strive to deliver high-quality services and accurate website content, but our website and general service descriptions are provided "as is" without warranties of any kind, express or implied, except as expressly set out in a signed service agreement. We do not warrant that our website will be uninterrupted, error-free, or completely secure.</p>
        <div class="notice-card">
          <p><strong>Note:</strong> Specific service-level commitments, uptime guarantees, and support terms are defined in individual client agreements, not in this general website disclaimer.</p>
        </div>
      </div>

      <div class="policy-block" id="liability">
        <h2><span class="num">08</span>Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, JJR Tech shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of our website or services, including but not limited to loss of profits, data, or business opportunities. Our total liability for any claim arising from a service engagement shall not exceed the fees paid by you for the specific service giving rise to the claim, unless otherwise agreed in writing.</p>
      </div>

      <div class="policy-block" id="termination">
        <h2><span class="num">09</span>Termination</h2>
        <p>We reserve the right to suspend or terminate your access to our website at our discretion, without notice, for conduct that violates these Terms or is otherwise harmful to our business or other users. Termination of a service engagement is governed by the terms set out in the applicable service agreement, including any notice periods and outstanding payment obligations.</p>
      </div>

      <div class="policy-block" id="governing-law">
        <h2><span class="num">10</span>Governing Law</h2>
        <p>These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which JJR Tech is registered, without regard to its conflict of law provisions. Any disputes arising under these Terms will be subject to the exclusive jurisdiction of the courts in that jurisdiction, unless otherwise specified in a signed service agreement.</p>
      </div>

      <div class="policy-block" id="changes">
        <h2><span class="num">11</span>Changes to These Terms</h2>
        <p>We may revise these Terms from time to time to reflect changes in our services, business practices, or legal requirements. The "Last Updated" date at the top of this page reflects the most recent revision. Continued use of our website or services after changes are posted constitutes your acceptance of the updated Terms.</p>
      </div>

      <div class="policy-block" id="contact">
        <h2><span class="num">12</span>Contact Us</h2>
        <p>If you have questions about these Terms &amp; Conditions, our team is here to help.</p>
        <div class="contact-card">
          <div>
            <h3>Have a question about our terms?</h3>
            <p>Talk to our team directly — we typically respond within one business day.</p>
          </div>
          <a href="#" class="btn">Talk To A Specialist</a>
        </div>
      </div>

    </main>
  </div>
</section>
<?php
include_once('elements/footer-pages.php');
?>