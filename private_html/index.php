<?php
/* Metro Quadrado — v9 */
$WA    = '5519974061314';
$WATXT = urlencode('Olá! Quero um orçamento.');
$BASE = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); if ($BASE==='/'||$BASE==='\\') $BASE='';
$ASSETS = $BASE . '/assets';
$SCHEME = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$ORIGIN = $SCHEME . $_SERVER['HTTP_HOST'];
$OGIMG  = $ORIGIN . $ASSETS . '/metro-hero-lapidado-v6-1280w.jpg';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Metro Quadrado — Pisos e Revestimentos</title>
<meta name="description" content="Piso de Granilite, Concreto Polido, Pintura Epóxi, Couro Duro e Fulget. Orçamentos pelo WhatsApp.">
<meta name="theme-color" content="#0F2B5C">
<link rel="icon" href="<?= $ASSETS ?>/favicon-64.png" type="image/png">
<meta property="og:title" content="Metro Quadrado — Pisos e Revestimentos">
<meta property="og:description" content="Granilite, Concreto Polido, Epóxi, Couro Duro e Fulget.">
<meta property="og:type" content="website"><meta property="og:url" content="<?= $ORIGIN . $_SERVER['REQUEST_URI'] ?>">
<meta property="og:image" content="<?= $OGIMG ?>">
<link rel="preload" as="image"
  href="<?= $ASSETS ?>/metro-hero-lapidado-v6-640w.jpg"
  imagesrcset="<?= $ASSETS ?>/metro-hero-lapidado-v6-640w.jpg 640w,
               <?= $ASSETS ?>/metro-hero-lapidado-v6-1280w.jpg 1280w,
               <?= $ASSETS ?>/metro-hero-lapidado-v6-1920w.jpg 1920w">
<style>
:root{ --navy:#0F2B5C; --yellow:#F6C000; --ink:#111; --bg:#fff; --text:#fff; --muted:#444; --header-h:78px; }
*{box-sizing:border-box} html,body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;background:#fff;color:#111}
a{color:inherit;text-decoration:none}
.bar{position:sticky;top:0;z-index:100;background:var(--navy);color:#fff;height:var(--header-h);box-shadow:0 4px 18px rgba(0,0,0,.1);overflow:visible}
.container{max-width:1200px;margin:0 auto;padding:0 18px}
.nav{height:var(--header-h);display:flex;align-items:center;justify-content:space-between;gap:16px}
.brand{display:flex;align-items:center;gap:12px}

/* --- LOGO GRANDE, ALINHADO PRA BAIXO (sem cortar no topo) --- */
.bar{ overflow: visible; }           /* garante que pode “vazar” pro hero */

.brand img{
  height: 106px;                     /* tamanho igual ao mock (ajuste fino 104–108px) */
  width: auto;
  margin-top: 0;                     /* remove o empurrão pra cima */
  transform: translateY(14px);       /* desce ~14px para dentro do hero */
  filter: drop-shadow(0 2px 6px rgba(0,0,0,.25));
}

.menu{display:flex;align-items:center;gap:22px}.menu a{opacity:.95}.menu a:hover{opacity:1}

/* HERO (inalterado) */
.hero{position:relative;min-height:86vh;display:grid;align-items:center;color:#fff;
  background:#000 center/cover no-repeat url('<?= $ASSETS ?>/metro-hero-lapidado-v6-640w.jpg');background-position:center 72%}
.hero::before{content:"";position:absolute;inset:0;background:linear-gradient(180deg, rgba(0,0,0,.18) 0%, rgba(0,0,0,.08) 45%, rgba(0,0,0,.18) 100%)}
.hero::after{content:"";position:absolute;inset:0;pointer-events:none;background:linear-gradient(180deg, rgba(150,110,40,.06), rgba(80,60,30,.08) 70%, rgba(50,40,20,.10));mix-blend-mode:soft-light}
.hero .wrap{position:relative;z-index:1;max-width:1200px;margin:0 auto;padding:calc(var(--header-h) + 14px) 18px 64px}
.hero h1{font-size:clamp(30px,7.4vw,64px);line-height:1.06;margin:0 0 14px;font-weight:900;text-shadow:0 8px 30px rgba(0,0,0,.24)}
.hero p{font-size:clamp(16px,2.2vw,22px);opacity:.95;margin:0 0 26px}
.cta{display:inline-block;background:var(--yellow);color:#1a1a1a;padding:14px 22px;border-radius:999px;font-weight:900;box-shadow:0 14px 32px rgba(246,192,0,.25)}
.cta:hover{filter:brightness(.98)}

/* Seções */
section{padding:50px 18px}
.section{max-width:1200px;margin:0 auto}

/* Texto preto nas seções (sem contorno) */
h2,h3,p,li,.muted{color:#111}
.outlined { -webkit-text-stroke: 0; text-shadow: none; }
.hero h1,.hero p{ -webkit-text-stroke: 0 !important; text-shadow: 0 8px 30px rgba(0,0,0,.24); }

h2{font-size:clamp(22px,3.4vw,32px);margin:0 0 12px}
.muted{color:#111;opacity:.9}

/* GRID DE SERVIÇOS — com fotos, 2 colunas no mobile, sem sombra */
.grid{display:grid;gap:16px}
.services-grid{grid-template-columns:repeat(2,1fr)}
@media (min-width:760px){.services-grid{grid-template-columns:repeat(3,1fr)}}
@media (min-width:1100px){.services-grid{grid-template-columns:repeat(5,1fr)}}

.card{
  background:#fafafa;
  border:2px solid #f6c000;       /* borda amarela firme */
  border-radius:14px;
  box-shadow:none;                 /* sem sombra para look flat */
  overflow:hidden;
  display:flex;flex-direction:column;
  min-height:240px;
  transition:transform .15s ease;
}
.card:hover{transform:translateY(-2px)}
.card .thumb{height:120px;background:#eee;overflow:hidden}
.card .thumb img{width:100%;height:100%;object-fit:cover;display:block}
.card .body{padding:12px;text-align:center;display:flex;flex-direction:column;gap:6px}
.card h3{margin:4px 0 0;font-size:16px}
.card p{margin:0;font-size:13px;color:#333}

footer{border-top:1px solid #e5e7eb;background:#fafafa;color:#111;padding:28px 0;text-align:center}

/* mobile: mantém proporcional e sem deslocar */
@media (max-width:560px){
  .brand img{ height:60px; transform:none; }
}
</style>
</head>
<body>
<div class="bar">
  <div class="container nav">
    <a class="brand" href="#home" aria-label="Início">
      <!-- volta a usar o arquivo de logo antigo -->
      <img src="<?= $ASSETS ?>/logo-metro.png"
           alt="Metro Quadrado"
           onerror="this.onerror=null;this.src='<?= $ASSETS ?>/metro-logo-512.png'">
    </a>
    <nav class="menu" aria-label="Menu principal">
      <a href="#servicos">Serviços</a>
      <a href="<?= $BASE ?>/portfolio.php">Portfólio</a>
      <a href="#sobre">Sobre</a>
      <a href="#contato">Contato</a>
    </nav>
  </div>
</div>

<section id="home" class="hero">
  <div class="wrap">
    <h1>PISOS INDUSTRIAIS<br>E LAPIDAÇÃO</h1>
    <p>Execução, recuperação e acabamento com padrão M2</p>
    <a class="cta" href="https://wa.me/<?= $WA ?>?text=<?= $WATXT ?>" target="_blank" rel="noopener">Orçamento pelo WhatsApp</a>
  </div>
</section>

<section id="servicos">
  <div class="section">
    <h2 class="outlined">Nossos Serviços</h2>

    <!-- ORDEM: Fulget, Couro Duro, Epóxi, Concreto Polido, Granilite -->
    <div class="grid services-grid">

      <!-- Fulget -->
      <a class="card" href="<?= $BASE ?>/portfolio.php#fulget" aria-label="Ver portfólio de Piso Fulget">
        <div class="thumb">
          <img src="<?= $ASSETS ?>/servicos/piso-fulget-card.jpg" alt="Piso Fulget">
        </div>
        <div class="body">
          <h3 class="outlined">Piso Fulget</h3>
          <p class="outlined">Antiderrapante</p>
        </div>
      </a>

      <!-- Couro Duro -->
      <a class="card" href="<?= $BASE ?>/portfolio.php#couro-duro" aria-label="Ver portfólio de Piso de Couro Duro">
        <div class="thumb">
          <img src="<?= $ASSETS ?>/servicos/piso-couro-duro-card.jpg" alt="Piso de Couro Duro">
        </div>
        <div class="body">
          <h3 class="outlined">Piso de Couro Duro</h3>
          <p class="outlined">Resistência superior</p>
        </div>
      </a>

      <!-- Pintura Epóxi -->
      <a class="card" href="<?= $BASE ?>/portfolio.php#pintura-epoxi" aria-label="Ver portfólio de Pintura Epóxi">
        <div class="thumb">
          <img src="<?= $ASSETS ?>/servicos/pintura-epoxi-card.jpg" alt="Pintura Epóxi">
        </div>
        <div class="body">
          <h3 class="outlined">Pintura Epóxi</h3>
          <p class="outlined">Acabamento técnico</p>
        </div>
      </a>

      <!-- Concreto Polido -->
      <a class="card" href="<?= $BASE ?>/portfolio.php#concreto-polido" aria-label="Ver portfólio de Concreto Polido">
        <div class="thumb">
          <img src="<?= $ASSETS ?>/servicos/concreto-polido-card.jpg" alt="Concreto Polido">
        </div>
        <div class="body">
          <h3 class="outlined">Concreto Polido</h3>
          <p class="outlined">Alto desempenho</p>
        </div>
      </a>

      <!-- Granilite -->
      <a class="card" href="<?= $BASE ?>/portfolio.php#granilite" aria-label="Ver portfólio de Granilite">
        <div class="thumb">
          <img src="<?= $ASSETS ?>/servicos/piso-granilite-card.jpg" alt="Piso de Granilite">
        </div>
        <div class="body">
          <h3 class="outlined">Piso de Granilite</h3>
          <p class="outlined">Clássico e durável</p>
        </div>
      </a>

    </div>
  </div>
</section>

<section id="sobre">
  <div class="section">
    <h2 class="outlined">Sobre nós</h2>
    <p class="outlined">Especialistas em pisos e revestimentos com padrão técnico. Atendemos obras industriais e comerciais com foco em segurança, desempenho e acabamento.</p>
  </div>
</section>

<section id="contato">
  <div class="section">
    <h2 class="outlined">Orçamento</h2>
    <p class="outlined">WhatsApp: <a href="https://wa.me/<?= $WA ?>?text=<?= $WATXT ?>" target="_blank" rel="noopener"><strong>(19) 97406-1314</strong></a></p>

    <!-- Instagram e endereço re-adicionados -->
    <p class="outlined">Instagram: <a href="https://instagram.com/metro.quadradoo" target="_blank" rel="noopener"><strong>@metro.quadradoo</strong></a></p>
    <p class="outlined">Endereço: <strong>Rua do Rayon, 781 — Jardim Esmeralda, Santa Bárbara d'Oeste — SP</strong></p>

    <p><a class="cta" href="https://wa.me/<?= $WA ?>?text=<?= $WATXT ?>" target="_blank" rel="noopener">Chamar no WhatsApp</a></p>
  </div>
</section>

<footer>© <span id="y"></span> Metro Quadrado — todos os direitos reservados.</footer>

<script>
document.getElementById('y').textContent = new Date().getFullYear();
// mantém o hero igual ao seu original (carrega a maior após o onload)
(function(){
  const hero = document.querySelector('.hero');
  const big='<?= $ASSETS ?>/metro-hero-lapidado-v6-1920w.jpg?v=9';
  const img=new Image(); img.decoding='async';
  img.onload=()=>{ hero.style.backgroundImage=`url('${big}')`; };
  img.src=big;
})();
</script>
</body></html>
