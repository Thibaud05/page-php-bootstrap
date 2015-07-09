<?php
include("class/page.class.php");
$page = new page("3");
$page->title = "Custom CSS";
$page->desc = "Personalisé votre css pour certaine page";
$page->tag = "Page, php, bootstrap";
$page->addCss("css/custom.css");
$page->displayHeader();
?>

<p class="lead">Personalisé votre css pour certaine page.</p>
<p>Voici un exemple d'utilisation de css personnalisé. Il est aussi possible de personnaliser une page avec du javascript, <a href="custom-js.php">custom javascript</a> est un exemple de page personalisé. </p>


<div class="highlight"><pre><code class="language-html" data-lang="html">$page-&gt;addCss("css/custom.css");
</code></pre></div>

<?php
$page->displayFooter();
?>