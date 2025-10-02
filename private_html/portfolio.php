<?php
/* Metro Quadrado — Portfólio (limpo, sem legendas) */
$BASE = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\'); if ($BASE==='/'||$BASE==='\\') $BASE='';
$ASSETS = $BASE . '/assets';
$WA    = '5519974061314';
$WATXT = urlencode('Olá! Quero um orçamento.');

/* Carrega imagens da pasta assets/portfolio */
$dir_fs = __DIR__ . '/assets/portfolio';
$files = [];
if (is_dir($dir_fs)) {
  $files = glob($dir_fs . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
  usort($files, function($a,$b){ return filemtime($b) - filemtime($a); }); // mais novas primeiro
}
function alt_from_filename($path){
  $name = pathinfo($path, PATHINFO_FILENAME);
  $name = preg_replace('/[_-]+/', ' ', $name);
  return ucwords(trim($name));
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Portfólio — Metro Quadrado</title>
<meta name="description" content="Obras executadas pela Metro Quadrado. Pisos e revestimentos industriais com padrão técnico.">
<link rel="icon" href="<?= $ASSETS ?>/favicon-64.png" type="image/png">

<style>
:root{
  --navy:#0F2B5C;
  --ink:#111;        /* textos pretos */
  --muted:#606978;
  --bg:#fff;
  --radius:14px;
  --header-h:76px;
}
*{box-sizing:border-box} html,body{margin:0;background:var(--bg);color:var(--ink);font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial}
a{color:inherit;text-decoration:none}
img{display:block;max-width:100%;height:auto}

/* Topbar igual ao site */
.topbar{position:sticky;top:0;z-index:10;background:var(--navy);height:var(--header-h);color:#fff}
.wrap{max-width:1200px;margin:0 auto;padding:0 18px}
.nav{height:var(--header-h);display:flex;align-items:center;justify-content:space-between;gap:16px}
.brand{display:flex;align-items:center;gap:12px}
.brand img{height:40px;width:auto}
.menu{display:flex;gap:24px;font-weight:600;opacity:.95}
.menu a:hover{opacity:1}

/* Página */
header.page{padding:26px 0}
h1{margin:0;font-size:clamp(22px,3.2vw,32px);font-weight:900;color:var(--ink)} /* preto */
.note{display:none} /* removida a faixa amarela */
.tiles{display:grid;gap:16px;grid-template-columns:1fr}
@media (min-width:640px){.tiles{grid-template-columns:repeat(2,1fr)}}
@media (min-width:980px){.tiles{grid-template-columns:repeat(3,1fr)}}
@media (min-width:1200px){.tiles{grid-template-columns:repeat(4,1fr)}}

.tile{position:relative;border-radius:var(--radius);overflow:hidden;background:#f2f4f7;border:1px solid #e6e8ec}
.tile img{width:100%;height:100%;object-fit:cover;aspect-ratio:4/3;transition:transform .25s ease, filter .25s ease}
.tile:hover img{transform:scale(1.02)}
/* Sem legendas — nada abaixo das imagens */

footer{border-top:1px solid #ececec;margin-top:32px}
footer .wrap{padding:18px}
</style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
  <div class="wrap nav">
    <a class="brand" href="<?= $BASE ?>/index.php" aria-label="Início">
      <img src="<?= $ASSETS ?>/metro-logo-512.png" alt="Metro Quadrado" onerror="this.style.display='none'">
      <strong>METRO QUADRADO</strong>
    </a>
    <nav class="menu" aria-label="Menu principal">
      <a href="<?= $BASE ?>/index.php#servicos">Serviços</a>
      <a href="<?= $BASE ?>/portfolio.php" aria-current="page">Portfólio</a>
      <a href="https://wa.me/<?= $WA ?>?text=<?= $WATXT ?>" target="_blank" rel="noopener">Contato</a>
    </nav>
  </div>
</div>

<!-- CABEÇALHO -->
<header class="page">
  <div class="wrap">
    <h1>Portfólio</h1>
    <!-- .note removida (era amarela) -->
  </div>
</header>

<!-- GRID DE IMAGENS (sem legendas) -->
<main class="wrap" style="padding-bottom:28px">
  <?php if (empty($files)): ?>
    <p style="color:var(--muted)">Nenhuma imagem encontrada. Envie suas fotos para <code>assets/portfolio/</code> (jpg, jpeg, png ou webp) e atualize a página.</p>
  <?php else: ?>
    <div class="tiles">
      <?php foreach ($files as $p):
        $url = $ASSETS . '/portfolio/' . rawurlencode(basename($p));
        $alt = alt_from_filename($p);
      ?>
        <a class="tile" href="<?= $url ?>" target="_blank" rel="noopener">
          <img loading="lazy" decoding="async" src="<?= $url ?>" alt="<?= htmlspecialchars($alt,ENT_QUOTES) ?>">
        </a>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</main>

<footer>
  <div class="wrap">
    <small>© <script>document.write(new Date().getFullYear())</script> Metro Quadrado — todos os direitos reservados.</small>
  </div>
</footer>

</body>
</html>
