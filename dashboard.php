<?php require __DIR__ . '/includes/admin-guard.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRINETRA | Website Control Center</title>
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
 <nav class="nav"><a class="active" href="dashboard.php">▦ Dashboard <small>LIVE</small></a><a href="contact-enquiries.php">✉ Contact Enquiries</a><a href="email-subscribers.php">◎ Email Subscribers</a><a href="registered-members.php">♙ Registered Website Members</a><a href="index.html" target="_blank">↗ View Website</a><a class="launch-suite-mobile" href="launch-defense-suite.html">Launch Defense Suite</a></nav><form method="post" action="admin-logout.php" style="margin-top:14px"><button type="submit" style="width:100%;padding:10px 13px;border:1px solid #684355;border-radius:9px;background:#2b1b2a;color:#ffdce4;font-weight:750;cursor:pointer">↪ Log Out</button></form><a class="launch-suite-right" href="launch-defense-suite.html">Launch Defense Suite</a>
 <div class="side-note">Changes are saved in this browser and automatically applied to the six website pages opened in the same browser.</div>
</aside>
<main>
 

 <div class="top"><div><div class="eyebrow">ADMINISTRATION / APPEARANCE</div><h1>Website Dashboard</h1><p>Customize the look and key content of every Trinetra page from one place.</p></div><div class="status">● Local settings ready</div></div>
 <div class="stats"><div class="stat"><b>06</b><span>Connected website pages</span></div><div class="stat"><b id="savedCount">00</b><span>Pages with custom content</span></div><div class="stat"><b>01</b><span>Shared design system</span></div></div>
 <div class="card" style="margin-bottom:22px"><h2 style="font-size:20px;margin-bottom:6px">Communication Center</h2><p class="hint">Open separate inboxes to manage website contact messages and newsletter subscribers.</p><div class="field-grid"><a class="stat" href="contact-enquiries.php" style="display:block;text-decoration:none"><b>✉</b><span>Manage Contact Enquiries →</span></a><a class="stat" href="email-subscribers.php" style="display:block;text-decoration:none"><b>◎</b><span>Manage Email Subscribers →</span></a></div></div>



<div class="card" id="fullCms">
 <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap">
  <div><h2 style="font-size:22px">Website Content Management</h2><p class="hint">Manage pages and blog posts from one workspace.</p></div>
  <span class="status">CONTENT CMS · LOCAL MODE</span>
 </div>
 <div class="page-tabs" id="cmsTabs">
  <button class="tab active" data-cms="overview">Overview</button>
  <button class="tab" data-cms="pages">Manage Pages</button>
  <button class="tab" data-cms="blogs">Manage Blogs</button>
  <button class="tab" data-cms="navigation">Navigation</button>
  <button class="tab" data-cms="backup">Backup</button>
 </div>
 <section data-cms-panel="overview">
  <div class="stats" style="margin:12px 0">
   <div class="stat"><b id="cmsPageCount">6</b><span>Built-in pages</span></div>
   <div class="stat"><b id="cmsCustomCount">0</b><span>Custom pages</span></div>
   <div class="stat"><b id="cmsBlogCount">24</b><span>Total blog posts</span></div><div class="stat"><b id="cmsActiveBlogCount">24</b><span>Active blog posts</span></div>
  </div>
  <p class="hint">Choose Manage Pages to add, edit, publish, hide or delete custom pages. Choose Manage Blogs to create and manage articles.</p>
 </section>
 <section data-cms-panel="pages" hidden>
  <h2>Manage website pages</h2><p class="hint">Create new pages or edit and remove pages created through this dashboard.</p>
  <input id="cmsPageSearch" placeholder="Search pages..." style="margin-bottom:14px">
  <div class="field-grid">
   <div class="field"><label>Page name</label><input id="cmsPageName" placeholder="e.g. Careers"></div>
   <div class="field"><label>URL slug</label><input id="cmsPageSlug" placeholder="e.g. careers"></div>
   <div class="field full"><label>Page heading</label><input id="cmsPageTitle" placeholder="Enter page heading"></div>
   <div class="field full"><label>Page content</label><textarea id="cmsPageBody" rows="6" placeholder="Write page content..."></textarea></div>
  </div>
  <div class="actions"><button class="btn" id="cmsSavePage">+ Create page</button><button class="btn secondary" id="cmsCancelPage" hidden>Cancel edit</button></div>
  <div id="cmsPagesList" style="margin-top:18px"></div>
  <p class="hint">Built-in pages (Home, About, Services, Solutions, Blog and Contact) are part of the website files. You can hide them from navigation here, but physically deleting those files requires editing the website files or using server-side CMS access.</p>
 </section>
 <section data-cms-panel="blogs" hidden>
  <h2>Manage all blog posts</h2><p class="hint">All 24 existing website articles are imported below. View full available details, edit metadata and summaries, publish, unpublish or delete posts.</p>
  <input id="cmsBlogSearch" placeholder="Search blog posts..." style="margin-bottom:14px">
  <div class="field-grid">
   <div class="field"><label>Blog title</label><input id="cmsBlogTitle" placeholder="Enter blog title"></div>
   <div class="field"><label>Category</label><input id="cmsBlogCategory" placeholder="Network Security"></div><div class="field"><label>Publish date</label><input id="cmsBlogDate" placeholder="e.g. Nov 20, 2026"></div>
   <div class="field full"><label>Short summary</label><textarea id="cmsBlogSummary" rows="2" placeholder="Short blog summary"></textarea></div>
   <div class="field full"><label>Full article</label><textarea id="cmsBlogBody" rows="7" placeholder="Write the complete blog article..."></textarea></div>
   <div class="field full"><label>Image URL (optional)</label><input id="cmsBlogImage" placeholder="assets/blog-image.jpg"></div>
  </div>
  <div class="actions"><button class="btn" id="cmsSaveBlog">+ Publish blog post</button><button class="btn secondary" id="cmsCancelBlog" hidden>Cancel edit</button></div>
  <div id="cmsBlogsList" style="margin-top:18px"></div>
 </section>
 <section data-cms-panel="navigation" hidden>
  <h2>Navigation visibility</h2><p class="hint">Choose which built-in pages appear in the public navbar.</p>
  <div id="cmsNavList"></div><div class="actions"><button class="btn" id="cmsSaveNav">Save navigation</button></div>
 </section>
 <section data-cms-panel="backup" hidden>
  <h2>Backup & restore content</h2><p class="hint">Export your page, blog, navigation and design settings to a JSON backup.</p>
  <div class="actions"><button class="btn secondary" id="cmsExport">Export backup</button><label class="btn secondary" for="cmsImport" style="cursor:pointer">Import backup</label><input type="file" id="cmsImport" accept="application/json" hidden></div>
 </section>
</div>

 <div class="layout"><section>
  
<div class="card" id="contentManager">
 <h2>Pages & Blog Content Manager</h2>
 <p class="hint">Create, edit, publish, unpublish and delete custom pages and blog posts. Changes are stored in this browser.</p>
 <div class="page-tabs">
  <button class="tab active" data-manager-tab="pages">Website pages</button>
  <button class="tab" data-manager-tab="blogs">Blog posts</button>
 </div>
 <div id="pageManagerPanel">
  <div class="field-grid">
   <div class="field"><label for="newPageName">Page name</label><input id="newPageName" placeholder="e.g. Careers"></div>
   <div class="field"><label for="newPageSlug">Page URL slug</label><input id="newPageSlug" placeholder="e.g. careers"></div>
   <div class="field full"><label for="newPageTitle">Page heading</label><input id="newPageTitle" placeholder="Enter page heading"></div>
   <div class="field full"><label for="newPageBody">Page content</label><textarea id="newPageBody" rows="5" placeholder="Write page content..."></textarea></div>
  </div>
  <div class="actions"><button class="btn" id="addCustomPage">+ Create page</button></div>
  <div id="customPageList" style="margin-top:18px"></div>
  <p class="hint" style="margin-top:12px">The six original HTML pages cannot be physically removed by a browser-only dashboard. Use navigation visibility to unpublish them. Custom pages created here can be deleted from this list.</p>
 </div>
 <div id="blogManagerPanel" style="display:none">
  <div class="field-grid">
   <div class="field"><label for="newBlogTitle">Blog title</label><input id="newBlogTitle" placeholder="Enter blog title"></div>
   <div class="field"><label for="newBlogCategory">Category</label><input id="newBlogCategory" placeholder="Network Security"></div>
   <div class="field full"><label for="newBlogSummary">Short summary</label><textarea id="newBlogSummary" placeholder="Write a short summary"></textarea></div>
   <div class="field full"><label for="newBlogBody">Full blog content</label><textarea id="newBlogBody" rows="6" placeholder="Write the full article..."></textarea></div>
   <div class="field full"><label for="newBlogImage">Image URL (optional)</label><input id="newBlogImage" placeholder="assets/blog-image.jpg"></div>
  </div>
  <div class="actions"><button class="btn" id="addBlogPost">+ Publish blog post</button></div>
  <div id="blogPostList" style="margin-top:18px"></div>
  <p class="hint" style="margin-top:12px">New posts appear in the Blog page in this same browser. For public visitors on other devices, connect a server-side CMS/database.</p>
 </div>
</div>

 <div class="card"><h2>Page content editor</h2><p class="hint">Choose a page, then customize its main heading and introductory text.</p>
   <div class="page-tabs" id="tabs"></div>
   <div class="field-grid">
    <div class="field full"><label for="pageTitle">Main page heading</label><input id="pageTitle" placeholder="Enter page heading"></div>
    <div class="field full"><label for="pageIntro">Intro / hero description</label><textarea id="pageIntro" placeholder="Enter the introductory paragraph"></textarea></div>
    <div class="field"><label for="pageButton">Main button text</label><input id="pageButton" placeholder="e.g. Explore services"></div>
    <div class="field"><label for="pageButtonUrl">Main button link</label><input id="pageButtonUrl" placeholder="e.g. contact.html"></div>
   </div>
   <div class="actions"><button class="btn" id="savePage">Save page changes</button><button class="btn secondary" id="resetPage">Reset this page</button></div>
  </div>
  <div class="card"><h2>Global design settings</h2><p class="hint">These settings apply across Home, About, Services, Solutions, Blog and Contact.</p>
   <div class="field-grid">
    <div class="field"><label for="accent">Primary accent color</label><input type="color" id="accent" value="#35d7e8"></div>
    <div class="field"><label for="surface">Page background color</label><input type="color" id="surface" value="#071326"></div>
    <div class="field"><label for="textColor">Main text color</label><input type="color" id="textColor" value="#edf5ff"></div>
    <div class="field"><label for="fontChoice">Website font</label><select id="fontChoice"><option value="Inter,Segoe UI,Arial,sans-serif">Modern / Inter</option><option value="Arial,sans-serif">Arial</option><option value="Georgia,serif">Georgia</option><option value="'Trebuchet MS',sans-serif">Trebuchet</option></select></div>
    <div class="field full"><label for="logoFile">Replace website logo (image file)</label><input type="file" id="logoFile" accept="image/*"></div>
    <div class="field full"><label for="backgroundFile">Replace shared background image (image file)</label><input type="file" id="backgroundFile" accept="image/*"></div>
    <div class="field full"><label for="footerText">Shared footer copyright text</label><input id="footerText" placeholder="© 2026 TRINETRA. All rights reserved."></div>
   </div>
   <div class="actions"><button class="btn" id="saveDesign">Apply global design</button><button class="btn secondary" id="resetDesign">Reset design</button></div>
  </div>
 </section>
 <aside>
  <div class="card"><h2>Live preview</h2><p class="hint">Preview of the selected page heading and shared colors.</p><div class="preview"><div class="preview-head" id="previewHead"><h3 id="previewTitle">Your page heading</h3></div><div class="preview-body" id="previewIntro">Your introduction will appear here.</div></div></div>
  <div class="card"><h2>Page visibility</h2><p class="hint">Hide or show a page in the main navigation.</p><div id="visibility"></div><div class="actions"><button class="btn secondary" id="saveVisibility">Save navigation</button></div></div>
  <div class="card"><h2>Backup & restore</h2><p class="hint">Export your customization settings or import a previous backup.</p><div class="actions"><button class="btn secondary" id="export">Export settings</button><label class="btn secondary" for="importFile" style="cursor:pointer">Import settings</label><input type="file" id="importFile" accept="application/json" hidden></div><div class="actions"><button class="btn danger" id="resetAll">Reset all customizations</button></div></div>
 </aside></div>
 <div class="footer-actions"><span>TRINETRA CONTROL CENTER · VERSION 1.0</span><span>Changes are stored locally in your browser.</span></div>
</main></div>

<script src="assets/cms-dashboard.js"></script>
<script src="assets/member-admin.js"></script>
<script src="assets/content-manager.js"></script>
<script>
const pages=[['home','Home','index.html'],['about','About','about.html'],['services','Services','service.html'],['solutions','Solutions','solutions.html'],['blog','Blog','blog.html'],['contact','Contact','contact.html']];
const defaults={}; let active='home';
const $=id=>document.getElementById(id);
function read(){try{return JSON.parse(localStorage.getItem('trinetraSiteConfig')||'{}')}catch(e){return {}}}
function write(data){localStorage.setItem('trinetraSiteConfig',JSON.stringify(data))}
function pageData(){return read().pages||{}}
function renderTabs(){ $('tabs').innerHTML=pages.map(p=>`<button class="tab ${p[0]===active?'active':''}" data-page="${p[0]}">${p[1]}</button>`).join('');document.querySelectorAll('.tab').forEach(b=>b.onclick=()=>selectPage(b.dataset.page));}
function selectPage(key){active=key;renderTabs();let d=pageData()[key]||{};$('pageTitle').value=d.title||'';$('pageIntro').value=d.intro||'';$('pageButton').value=d.button||'';$('pageButtonUrl').value=d.buttonUrl||'';preview();}
function preview(){ $('previewTitle').textContent=$('pageTitle').value||'Your page heading';$('previewIntro').textContent=$('pageIntro').value||'Your introduction will appear here.'; }
['pageTitle','pageIntro'].forEach(id=>$(id).addEventListener('input',preview));
$('savePage').onclick=()=>{let c=read();c.pages=c.pages||{};c.pages[active]={title:$('pageTitle').value, intro:$('pageIntro').value,button:$('pageButton').value,buttonUrl:$('pageButtonUrl').value};write(c);updateCount();alert('Page customization saved. Open or refresh the website in this browser to view it.');};
$('resetPage').onclick=()=>{let c=read();if(c.pages)delete c.pages[active];write(c);selectPage(active);updateCount();};
async function fileData(file){return new Promise((resolve,reject)=>{if(!file)return resolve('');let r=new FileReader();r.onload=()=>resolve(r.result);r.onerror=reject;r.readAsDataURL(file);});}
$('saveDesign').onclick=async()=>{let c=read();c.design={accent:$('accent').value,surface:$('surface').value,text:$('textColor').value,font:$('fontChoice').value,footer:$('footerText').value,logo:await fileData($('logoFile').files[0])||c.design?.logo||'',background:await fileData($('backgroundFile').files[0])||c.design?.background||''};write(c);applyPreview();alert('Global design settings saved.');};
function applyPreview(){let d=read().design||{};$('previewHead').style.background=d.surface||'#071326';$('previewHead').style.color=d.text||'#edf5ff';$('previewHead').style.borderBottom='4px solid '+(d.accent||'#35d7e8');}
$('resetDesign').onclick=()=>{let c=read();delete c.design;write(c);$('accent').value='#35d7e8';$('surface').value='#071326';$('textColor').value='#edf5ff';$('fontChoice').selectedIndex=0;$('footerText').value='';$('logoFile').value='';$('backgroundFile').value='';applyPreview();};
function renderVisibility(){let c=read(),hidden=c.hiddenPages||[];$('visibility').innerHTML=pages.map(p=>`<label class="toggle"><span>${p[1]}</span><input type="checkbox" data-visible="${p[0]}" ${hidden.includes(p[0])?'':'checked'}></label>`).join('');}
$('saveVisibility').onclick=()=>{let c=read();c.hiddenPages=[...document.querySelectorAll('[data-visible]')].filter(x=>!x.checked).map(x=>x.dataset.visible);write(c);alert('Navigation visibility saved.');};
$('export').onclick=()=>{let blob=new Blob([JSON.stringify(read(),null,2)],{type:'application/json'}),a=document.createElement('a');a.href=URL.createObjectURL(blob);a.download='trinetra-customization-backup.json';a.click();URL.revokeObjectURL(a.href);};
$('importFile').onchange=async e=>{let f=e.target.files[0];if(!f)return;try{write(JSON.parse(await f.text()));init();alert('Settings imported.');}catch(err){alert('Invalid backup file.');}};
$('resetAll').onclick=()=>{if(confirm('Reset every saved customization?')){localStorage.removeItem('trinetraSiteConfig');init();}};
function updateCount(){$('savedCount').textContent=Object.keys(pageData()).length.toString().padStart(2,'0');}
function init(){let d=read().design||{};$('accent').value=d.accent||'#35d7e8';$('surface').value=d.surface||'#071326';$('textColor').value=d.text||'#edf5ff';$('fontChoice').value=d.font||'Inter,Segoe UI,Arial,sans-serif';$('footerText').value=d.footer||'';renderVisibility();selectPage(active);applyPreview();updateCount();}
init();
</script>


</body></html>