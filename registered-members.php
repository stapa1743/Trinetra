<?php require __DIR__ . '/includes/admin-guard.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRINETRA | Registered Website Members</title>
<style>
:root{--ink:#eaf2ff;--muted:#91a6c7;--panel:#101d35;--panel2:#142542;--line:#263c5f;--accent:#36d7e8;--bg:#071326}
*{box-sizing:border-box}body{margin:0;background:radial-gradient(circle at 80% 0%,#173c66 0,transparent 35%),var(--bg);color:var(--ink);font:15px/1.5 Inter,Segoe UI,Arial,sans-serif}
a{color:inherit;text-decoration:none}.shell{display:grid;grid-template-columns:250px 1fr;min-height:100vh}.side{padding:28px 18px;background:#09182c;border-right:1px solid var(--line);position:sticky;top:0;height:100vh}.brand{display:flex;align-items:center;gap:12px;font-weight:800;font-size:18px;letter-spacing:2px}.brand img{width:42px;height:42px;object-fit:contain}.side p{color:var(--muted);font-size:12px;margin:7px 0 28px}.nav a{display:flex;gap:11px;padding:12px 14px;border-radius:10px;color:#a9bad4;margin:5px 0}.nav a.active,.nav a:hover{background:#173452;color:#fff}.nav small{margin-left:auto;color:var(--accent)}.side-note{position:absolute;bottom:24px;color:#7186a7;font-size:11px;max-width:205px}
main{padding:34px clamp(18px,4vw,58px);max-width:1500px;width:100%;margin:auto}.top{display:flex;justify-content:space-between;align-items:center;gap:16px;margin-bottom:26px}.eyebrow{color:var(--accent);font-size:11px;letter-spacing:2px;font-weight:800}.top h1{font-size:clamp(26px,4vw,38px);margin:5px 0}.top p{margin:0;color:var(--muted)}.status{border:1px solid var(--line);border-radius:30px;padding:9px 14px;color:#a8f4dc;font-size:12px}.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:22px}.stat,.card{background:linear-gradient(145deg,var(--panel),#0d1a30);border:1px solid var(--line);border-radius:16px}.stat{padding:17px}.stat b{display:block;font-size:24px}.stat span{color:var(--muted);font-size:12px}.layout{display:grid;grid-template-columns:minmax(0,1.45fr) minmax(280px,.75fr);gap:18px}.card{padding:22px;margin-bottom:18px}.card h2{font-size:17px;margin:0 0 5px}.hint{color:var(--muted);font-size:12px;margin:0 0 18px}.field-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}.field{display:flex;flex-direction:column;gap:6px}.field.full{grid-column:1/-1}label{font-size:12px;color:#b8c9e2;font-weight:650}input,textarea,select{width:100%;background:#09172b;border:1px solid #2b4265;border-radius:9px;padding:11px 12px;color:#edf5ff;font:inherit;outline:none}input:focus,textarea:focus,select:focus{border-color:var(--accent);box-shadow:0 0 0 3px #36d7e81c}input[type=color]{height:44px;padding:4px}input[type=file]{font-size:12px}textarea{min-height:78px;resize:vertical}.actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:18px}.btn{border:0;border-radius:9px;padding:11px 16px;background:var(--accent);color:#061526;font-weight:800;cursor:pointer}.btn.secondary{background:#1a3151;color:#eaf2ff;border:1px solid #345174}.btn.danger{background:#542b3a;color:#ffdce4}.page-tabs{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:15px}.tab{padding:8px 12px;border:1px solid var(--line);border-radius:9px;background:#0b1a30;color:#b8c9e2;cursor:pointer}.tab.active{background:#17415a;border-color:var(--accent);color:#fff}.preview{border:1px solid var(--line);border-radius:13px;overflow:hidden;background:#0a1729}.preview-head{height:120px;background:linear-gradient(120deg,#123d5d,#071326);display:flex;align-items:center;justify-content:center;text-align:center;padding:20px}.preview-head h3{font-size:22px;margin:0}.preview-body{padding:15px;color:var(--muted);font-size:12px}.toggle{display:flex;align-items:center;justify-content:space-between;padding:11px 0;border-bottom:1px solid #223653;color:#c4d2e6;font-size:13px}.toggle input{width:auto;accent-color:var(--accent)}.footer-actions{display:flex;justify-content:space-between;align-items:center;gap:12px;color:var(--muted);font-size:11px;margin-top:8px}
@media(max-width:950px){.shell{grid-template-columns:1fr}.side{position:relative;height:auto;padding:16px;border-right:0;border-bottom:1px solid var(--line)}.side-note{display:none}.nav{display:flex;overflow:auto}.nav a{white-space:nowrap}.nav small{display:none}.layout{grid-template-columns:1fr}}
@media(max-width:560px){main{padding:22px 14px}.stats{grid-template-columns:1fr}.field-grid{grid-template-columns:1fr}.field.full{grid-column:auto}.top{align-items:flex-start;flex-direction:column}.card{padding:16px}}

    .navlinks a.nav-cta{
      display:inline-flex;align-items:center;justify-content:center;
      padding:10px 15px!important;margin:0 1px;border:1px solid #ffc247;
      border-radius:999px;background:linear-gradient(120deg,#ffe7a0,#ffb52d 58%,#ff9418);
      color:#171006!important;font-weight:800!important;font-size:11px!important;
      letter-spacing:.15px;box-shadow:0 5px 18px #ffad2638;
      transition:transform .25s ease,box-shadow .25s ease,filter .25s ease;
    }
    .navlinks a.nav-cta:after{display:none!important}
    .navlinks a.nav-cta:hover{color:#100c05!important;transform:translateY(-2px);box-shadow:0 9px 24px #ffad2670;filter:brightness(1.06)}
    @media(max-width:760px){.navlinks a.nav-cta{align-self:flex-start;margin:10px 0 2px;padding:11px 17px!important}}
    

    .launch-suite-right{
      display:inline-flex;align-items:center;justify-content:center;white-space:nowrap;
      padding:11px 16px;border:1px solid #ffc247;border-radius:999px;
      background:linear-gradient(120deg,#ffe7a0,#ffb52d 58%,#ff9418);
      color:#171006!important;font-size:11px;font-weight:800;letter-spacing:.15px;
      box-shadow:0 5px 18px #ffad2638;transition:transform .25s ease,box-shadow .25s ease,filter .25s ease;
    }
    .launch-suite-right:hover{transform:translateY(-2px);box-shadow:0 9px 24px #ffad2670;filter:brightness(1.06)}
    @media(max-width:1100px){.launch-suite-right{padding:9px 11px;font-size:10px}}
    @media(max-width:760px){.launch-suite-right{display:none}}
    

            .launch-suite-mobile{display:none}
            @media(max-width:760px){.navlinks .launch-suite-mobile{display:block;color:#ffd36b;font-weight:800}}
            
</style>
<style>
#fullCms [hidden]{display:none!important}
#fullCms section[data-cms-panel]{padding-top:12px}
#fullCms .cms-row{display:flex;justify-content:space-between;align-items:center;gap:14px;flex-wrap:wrap;padding:14px 0;border-bottom:1px solid #263c5f}
#fullCms .cms-row small{color:#91a6c7}
#fullCms .cms-actions{display:flex;gap:7px;flex-wrap:wrap}
#fullCms .cms-actions button{padding:8px 11px;font-size:12px}
#fullCms .cms-empty{color:#91a6c7;padding:16px 0}
</style>

</head>
<body>
<div class="shell">
<aside class="side">
 <div class="brand"><img src="assets/trinetra-logo.png" alt="Trinetra logo">TRINETRA</div>
 <p>WEBSITE CONTROL CENTER</p>
 <nav class="nav">
  <a href="dashboard.php">▦ Dashboard</a>
  <a href="contact-enquiries.php">✉ Contact Enquiries</a>
  <a href="email-subscribers.php">◎ Email Subscribers</a>
  <a class="active" href="registered-members.php">♙ Registered Website Members <small>LIVE</small></a>
  <a href="index.html" target="_blank">↗ View Website</a>
  <a class="launch-suite-mobile" href="launch-defense-suite.html">Launch Defense Suite</a>
 </nav><form method="post" action="admin-logout.php" style="margin-top:14px"><button type="submit" style="width:100%;padding:10px 13px;border:1px solid #684355;border-radius:9px;background:#2b1b2a;color:#ffdce4;font-weight:750;cursor:pointer">↪ Log Out</button></form>
 <a class="launch-suite-right" href="launch-defense-suite.html">Launch Defense Suite</a>
 <div class="side-note">Manage visitor accounts created through the Sign In / Sign Up popup.</div>
</aside>
<main>
 <div class="top"><div><div class="eyebrow">ADMINISTRATION / MEMBERS</div><h1>Registered Website Members</h1><p>View and manage visitor accounts created on the Trinetra website.</p></div><div class="status">● Member management</div></div>
 <section class="card" id="memberAdminCard">
  <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap"><div><h2 style="font-size:22px">Member Accounts</h2><p class="hint">View registered accounts, search members, filter account status, export records and manage access. Passwords are never displayed.</p></div><span class="status" id="memberAdminStatus">ADMIN ACCESS REQUIRED</span></div>
  <div class="field-grid" style="margin-top:16px"><div class="field"><label for="memberAdminKey">Dashboard admin key</label><input id="memberAdminKey" type="password" autocomplete="off" placeholder="Enter the private key from api/config.php"></div><div class="field" style="justify-content:end"><button class="btn" id="loadMembers" type="button">Load registered members</button></div></div>
  <div class="stats" style="margin-top:14px"><div class="stat"><b id="memberTotal">—</b><span>Total registered members</span></div><div class="stat"><b id="memberActive">—</b><span>Active accounts</span></div><div class="stat"><b id="memberBlocked">—</b><span>Blocked accounts</span></div></div>
  <div class="field-grid" style="margin:14px 0"><div class="field"><label for="memberSearch">Search members</label><input id="memberSearch" type="search" placeholder="Search by name, email or ID"></div><div class="field"><label for="memberStatusFilter">Filter account status</label><select id="memberStatusFilter"><option value="all">All accounts</option><option value="active">Active only</option><option value="blocked">Blocked only</option></select></div><div class="field" style="justify-content:end"><button class="btn secondary" id="exportMembers" type="button" disabled>Export CSV</button></div></div>
  <div id="memberAdminMessage" class="hint" role="status">Enter your private admin key configured in api/config.php, then load registered members.</div>
  <div id="memberAdminList"></div>
 </section>
 <div class="footer-actions"><span>TRINETRA CONTROL CENTER · MEMBERS</span><a href="dashboard.php">← Back to Dashboard</a></div>
</main>
</div>
<script src="assets/member-admin.js"></script>
</body>
</html>
