<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aplikasi Peduli Diri| Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="assets/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="d6134a11-a347-4522-ae66-fb6bf7f6ab81">(function(w,d){!function(Z,_,ba,bb){Z.zarazData=Z.zarazData||{};Z.zarazData.executed=[];Z.zaraz={deferred:[],listeners:[]};Z.zaraz.q=[];Z.zaraz._f=function(bc){return function(){var bd=Array.prototype.slice.call(arguments);Z.zaraz.q.push({m:bc,a:bd})}};for(const be of["track","set","debug"])Z.zaraz[be]=Z.zaraz._f(be);Z.zaraz.init=()=>{var bf=_.getElementsByTagName(bb)[0],bg=_.createElement(bb),bh=_.getElementsByTagName("title")[0];bh&&(Z.zarazData.t=_.getElementsByTagName("title")[0].text);Z.zarazData.x=Math.random();Z.zarazData.w=Z.screen.width;Z.zarazData.h=Z.screen.height;Z.zarazData.j=Z.innerHeight;Z.zarazData.e=Z.innerWidth;Z.zarazData.l=Z.location.href;Z.zarazData.r=_.referrer;Z.zarazData.k=Z.screen.colorDepth;Z.zarazData.n=_.characterSet;Z.zarazData.o=(new Date).getTimezoneOffset();Z.zarazData.q=[];for(;Z.zaraz.q.length;){const bl=Z.zaraz.q.shift();Z.zarazData.q.push(bl)}bg.defer=!0;for(const bm of[localStorage,sessionStorage])Object.keys(bm||{}).filter((bo=>bo.startsWith("_zaraz_"))).forEach((bn=>{try{Z.zarazData["z_"+bn.slice(7)]=JSON.parse(bm.getItem(bn))}catch{Z.zarazData["z_"+bn.slice(7)]=bm.getItem(bn)}}));bg.referrerPolicy="origin";bg.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Z.zarazData)));bf.parentNode.insertBefore(bg,bf)};["complete","interactive"].includes(_.readyState)?zaraz.init():Z.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href=""><b>Aplikasi Peduli Diri</b></a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Login Aplikasi</p>


<form action="config/proses_login.php" method="post">
<div class="input-group mb-3">
<input type="nomor" nama="NIK"class="form-control" placeholder="Masukkan NIK" required>

<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-Alamat-card"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="text" nama="Nama_Lengkap"class="form-control" placeholder="Masukkan Nama Lengkap" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">MASUK</button>
</div>
</div>
</form>
<p class="mb-0">
<a href="register.php" class="text-center">Belum Punya Akun? Klik Disini!</a>
</p>
</div>

</div>
</div>


<script src="assets/plugins/jquery/jquery.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>