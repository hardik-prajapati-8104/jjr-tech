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
  }
  .policy-block h2{
    font-size:24px;display:flex;align-items:center;margin-bottom:16px;
  }
  .policy-block h3{font-size:17px;margin:20px 0 8px;color:var(--primary-dark);}
  .policy-block p{margin-bottom:14px;color:var(--text);}
  .policy-block ul{margin:0 0 14px 0;}
  .policy-block ul li{
    position:relative;padding-left:22px;margin-bottom:9px;color:var(--text);
  }
  .policy-block ul li::before{
    content:"";position:absolute;left:0;top:9px;width:8px;height:8px;
    background:var(--primary);border-radius:2px;
  }
  .policy-block a.inline-link{color:var(--primary);font-weight:600;border-bottom:1px solid var(--primary);}

  .intro-card{
    background:var(--primary-light);border-left:4px solid var(--primary);
    border-radius:8px;padding:22px 24px;margin-bottom:46px;
  }
  .intro-card p{margin-bottom:0;color:var(--navy);font-size:15px;}

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

  /* Cookie note strip (cross-link) */
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
    <h1>Privacy Policy</h1>
    <p>How JJR Tech collects, uses, and protects your information across our website and services.</p>
    <div class="hero-switch">
      <a href="terms-and-conditions.php">Terms &amp; Conditions</a>
      <a href="privacy-policy.php"  class="active">Privacy Policy</a>
      <a href="cookie-policy.php">Cookie Policy</a>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="layout">

    <aside class="sidebar">
      <h4>On This Page</h4>
      <ul>
        <li><a href="#info-collect" class="active">Information We Collect</a></li>
        <li><a href="#how-we-use">How We Use Information</a></li>
        <li><a href="#sharing">Sharing Your Information</a></li>
        <li><a href="#data-security">Data Security</a></li>
        <li><a href="#your-rights">Your Rights</a></li>
        <li><a href="#retention">Data Retention</a></li>
        <li><a href="#children">Children's Privacy</a></li>
        <li><a href="#changes">Policy Changes</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      <div class="updated">
        <strong>Last Updated</strong>
        August 31, 2026
      </div>
      <div class="related">
        <a href="cookie-policy.php">→ See our Cookie Policy</a>
        <a href="terms-and-conditions.php">→ See our Terms & Conditions</a>
        
      </div>
    </aside>

    <main>
      <div class="intro-card">
        <p>JJR Tech ("we," "our," or "us") is committed to protecting your privacy. This policy explains what information we collect when you visit our website or use our IT infrastructure, network, and digital platform services, how we use it, and the choices you have. By using our website, you agree to the practices described below.</p>
      </div>

      <div class="policy-block" id="info-collect">
        <h2><span class="num">01</span>Information We Collect</h2>
        <p>We collect information that you provide directly to us, information gathered automatically as you browse our site, and information from third parties who help us deliver our services.</p>
        <h3>Information You Provide</h3>
        <ul>
          <li>Contact details such as your name, email address, phone number, and company name submitted through our quote request or contact forms</li>
          <li>Project requirements you share when requesting IT infrastructure, web development, or cloud &amp; database consultations</li>
          <li>Any documents, correspondence, or feedback you send us in the course of a service engagement</li>
        </ul>
        <h3>Information Collected Automatically</h3>
        <ul>
          <li>Device and browser type, IP address, and general location</li>
          <li>Pages viewed, time spent on site, referring pages, and click activity</li>
          <li>Cookies and similar tracking technologies — see our dedicated Cookie Policy for full details</li>
        </ul>
      </div>

      <div class="policy-block" id="how-we-use">
        <h2><span class="num">02</span>How We Use Information</h2>
        <p>We use the information we collect to operate, secure, and improve our services, and to communicate with you effectively.</p>
        <ul>
          <li>Responding to quote requests and providing the IT, cloud, and digital platform services you ask for</li>
          <li>Maintaining and securing our network infrastructure and website</li>
          <li>Improving our services, website performance, and user experience</li>
          <li>Sending project updates, support communications, and, where you've opted in, occasional newsletters</li>
          <li>Meeting legal, regulatory, and contractual obligations</li>
        </ul>
      </div>

      <div class="policy-block" id="sharing">
        <h2><span class="num">03</span>Sharing Your Information</h2>
        <p>We do not sell your personal information. We may share it in the following limited circumstances:</p>
        <ul>
          <li>With trusted vendors and hosting or cloud partners who support our infrastructure, bound by confidentiality obligations</li>
          <li>With professional advisors such as legal or accounting firms, where necessary</li>
          <li>If required by law, regulation, legal process, or governmental request</li>
          <li>In connection with a merger, acquisition, or sale of business assets, with notice to you where required</li>
        </ul>
      </div>

      <div class="cross-link-strip">
        <p><strong>Looking for cookie details?</strong> Browser cookies and tracking preferences are covered in our separate Cookie Policy.</p>
        <a href="cookie-policy.php">View Cookie Policy</a>
      </div>

      <div class="policy-block" id="data-security">
        <h2><span class="num">04</span>Data Security</h2>
        <p>As a technology company, we apply the same standards to your data that we build into our clients' infrastructure — including encryption in transit, access controls, and regular security reviews. While we work hard to protect your information, no method of transmission or storage is completely secure, and we encourage you to take precautions when sharing sensitive information online.</p>
      </div>

      <div class="policy-block" id="your-rights">
        <h2><span class="num">05</span>Your Rights</h2>
        <p>Depending on your location, you may have the right to:</p>
        <ul>
          <li>Access the personal information we hold about you</li>
          <li>Request correction of inaccurate or incomplete data</li>
          <li>Request deletion of your data, subject to legal or contractual limits</li>
          <li>Withdraw consent to marketing communications at any time</li>
          <li>Object to or restrict certain processing of your information</li>
        </ul>
        <p>To exercise any of these rights, please reach out using the contact details below.</p>
      </div>

      <div class="policy-block" id="retention">
        <h2><span class="num">06</span>Data Retention</h2>
        <p>We retain personal information only as long as necessary to fulfil the purposes described in this policy, including any legal, accounting, or reporting requirements. Once information is no longer needed, we securely delete or anonymize it.</p>
      </div>

      <div class="policy-block" id="children">
        <h2><span class="num">07</span>Children's Privacy</h2>
        <p>Our website and services are intended for businesses and are not directed at children. We do not knowingly collect personal information from anyone under the age of 16. If you believe a child has provided us with personal information, please contact us so we can remove it.</p>
      </div>

      <div class="policy-block" id="changes">
        <h2><span class="num">08</span>Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for legal, operational, or regulatory reasons. The "Last Updated" date at the top of this page will always reflect the most recent revision. We encourage you to review this page periodically.</p>
      </div>

      <div class="policy-block" id="contact">
        <h2><span class="num">09</span>Contact Us</h2>
        <p>If you have questions about this policy or how we handle your data, our team is here to help.</p>
        <div class="contact-card">
          <div>
            <h3>Have a question about your data?</h3>
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