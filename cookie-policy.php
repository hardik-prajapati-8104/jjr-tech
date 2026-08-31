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

  /* Table (cookie types) */
  .cookie-table{width:100%;border-collapse:collapse;margin:18px 0 22px;border-radius:8px;overflow:hidden;border:1px solid var(--border);}
  .cookie-table th{
    background:var(--primary);color:#fff;text-align:left;padding:13px 16px;font-size:13.5px;
    font-family:'Poppins',sans-serif;font-weight:600;
  }
  .cookie-table td{padding:13px 16px;border-top:1px solid var(--border);font-size:14px;vertical-align:top; color: #000;}
  .cookie-table tr:nth-child(even) td{background:#F8FBFE;}
  .tag{
    display:inline-block;padding:3px 10px;border-radius:20px;font-size:11.5px;font-weight:600;
  }
  .tag.essential{background:#E8F1FA;color:var(--primary);}
  .tag.analytics{background:#FDF0E1;color:#B96A0A;}
  .tag.marketing{background:#F1E6FB;color:#7A3FBD;}
  .tag.functional{background:#E4F5EA;color:#1E8F52;}

  /* Browser guide chips */
  .browser-grid{
    display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin:18px 0 22px;
  }
  .browser-card{
    border:1px solid var(--border);border-radius:8px;padding:16px 18px;
  }
  .browser-card h4{font-size:14.5px;color:var(--heading);margin-bottom:4px;}
  .browser-card p{font-size:13px;color:var(--text);margin-bottom:0;}

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
    .browser-grid{grid-template-columns:1fr;}
    .cross-link-strip{flex-direction:column;align-items:flex-start;}
  }
</style>

<section class="page-hero">
  <div class="hero-inner">
    <div class="breadcrumb"><span class="dot"></span> LEGAL</div>
    <h1>Cookie Policy</h1>
    <p>What cookies we use on our website, why we use them, and how you can manage your preferences.</p>
    <div class="hero-switch">
      <a href="terms-and-conditions.php">Terms &amp; Conditions</a>
      <a href="privacy-policy.php">Privacy Policy</a>
      <a href="cookie-policy.php" class="active">Cookie Policy</a>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="layout">

    <aside class="sidebar">
      <h4>On This Page</h4>
      <ul>
        <li><a href="#what-are-cookies" class="active">What Are Cookies</a></li>
        <li><a href="#why-we-use">Why We Use Cookies</a></li>
        <li><a href="#cookie-types">Types of Cookies</a></li>
        <li><a href="#third-party">Third-Party Cookies</a></li>
        <li><a href="#managing-cookies">Managing Cookies</a></li>
        <li><a href="#do-not-track">Do Not Track</a></li>
        <li><a href="#changes">Policy Changes</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      <div class="updated">
        <strong>Last Updated</strong>
        August 31, 2026
      </div>
      <div class="related">
        <a href="privacy-policy.php">→ See our Privacy Policy</a>
        <a href="terms-and-conditions.php">→ See our Terms & Conditions</a>
      </div>
    </aside>

    <main>
      <div class="intro-card">
        <p>This Cookie Policy explains how JJR Tech uses cookies and similar tracking technologies when you visit our website. It should be read alongside our Privacy Policy, which explains more broadly how we collect and use your personal information.</p>
      </div>

      <div class="policy-block" id="what-are-cookies">
        <h2><span class="num">01</span>What Are Cookies</h2>
        <p>Cookies are small text files that a website stores on your computer or mobile device when you visit it. They are widely used to make websites work more efficiently, remember your preferences, and provide information to the site owners. Cookies do not typically contain information that personally identifies you, but personal information we store about you may be linked to information stored in and obtained from cookies.</p>
      </div>

      <div class="policy-block" id="why-we-use">
        <h2><span class="num">02</span>Why We Use Cookies</h2>
        <p>We use cookies for a few key reasons:</p>
        <ul>
          <li>To keep our website secure and functioning correctly as you navigate between pages</li>
          <li>To remember choices you've made, such as cookie preferences or form inputs</li>
          <li>To understand how visitors use our services and portfolio pages, so we can identify improvements</li>
          <li>To measure the performance of our content and outreach</li>
        </ul>
      </div>

      <div class="policy-block" id="cookie-types">
        <h2><span class="num">03</span>Types of Cookies We Use</h2>
        <table class="cookie-table">
          <tr>
            <th>Cookie Type</th>
            <th>Purpose</th>
            <th>Typical Duration</th>
          </tr>
          <tr>
            <td><span class="tag essential">Essential</span></td>
            <td>Required for core site functionality such as page navigation, secure areas, and form submission. These cannot be switched off.</td>
            <td>Session</td>
          </tr>
          <tr>
            <td><span class="tag functional">Functional</span></td>
            <td>Remember choices you make, such as language or region, to provide a more personalized experience</td>
            <td>Up to 6 months</td>
          </tr>
          <tr>
            <td><span class="tag analytics">Analytics</span></td>
            <td>Help us understand how visitors interact with our site, including pages visited and time spent, so we can improve performance</td>
            <td>Up to 24 months</td>
          </tr>
          <tr>
            <td><span class="tag marketing">Marketing</span></td>
            <td>Used to deliver relevant content and measure the effectiveness of our outreach and campaigns</td>
            <td>Up to 12 months</td>
          </tr>
        </table>
      </div>

      <div class="policy-block" id="third-party">
        <h2><span class="num">04</span>Third-Party Cookies</h2>
        <p>Some cookies on our site are placed by third-party services we use, such as analytics providers and embedded content tools. These third parties may use cookies to collect information about your online activities across different websites. We do not control these third-party cookies, and we recommend reviewing their respective privacy policies for more information.</p>
      </div>

      <div class="cross-link-strip">
        <p><strong>Want to know more about your data?</strong> How we collect, use, and protect personal information overall is covered in our Privacy Policy.</p>
        <a href="privacy-policy.php">View Privacy Policy</a>
      </div>

      <div class="policy-block" id="managing-cookies">
        <h2><span class="num">05</span>Managing Cookies</h2>
        <p>You can control and manage cookies in several ways. Most browsers let you review, block, or delete cookies directly through their settings menu.</p>
        <div class="browser-grid">
          <div class="browser-card">
            <h4>Chrome</h4>
            <p>Settings → Privacy and Security → Cookies and other site data</p>
          </div>
          <div class="browser-card">
            <h4>Safari</h4>
            <p>Preferences → Privacy → Manage Website Data</p>
          </div>
          <div class="browser-card">
            <h4>Firefox</h4>
            <p>Settings → Privacy &amp; Security → Cookies and Site Data</p>
          </div>
          <div class="browser-card">
            <h4>Edge</h4>
            <p>Settings → Cookies and site permissions → Manage cookies</p>
          </div>
        </div>
        <p>Please note that disabling non-essential cookies will not affect your ability to browse the site, but blocking essential cookies may impact core functionality such as form submission and secure navigation.</p>
      </div>

      <div class="policy-block" id="do-not-track">
        <h2><span class="num">06</span>Do Not Track</h2>
        <p>Some browsers offer a "Do Not Track" signal. Because there is currently no industry-standard way to respond to these signals, our website does not currently alter its data collection practices when it detects a Do Not Track signal from your browser. You can still manage cookies directly through your browser settings as described above.</p>
      </div>

      <div class="policy-block" id="changes">
        <h2><span class="num">07</span>Changes to This Policy</h2>
        <p>We may update this Cookie Policy from time to time to reflect changes in the cookies we use or for legal and regulatory reasons. The "Last Updated" date at the top of this page will always reflect the most recent revision. We encourage you to review this page periodically.</p>
      </div>

      <div class="policy-block" id="contact">
        <h2><span class="num">08</span>Contact Us</h2>
        <p>If you have questions about this Cookie Policy or how we use tracking technologies, our team is here to help.</p>
        <div class="contact-card">
          <div>
            <h3>Have a question about cookies?</h3>
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