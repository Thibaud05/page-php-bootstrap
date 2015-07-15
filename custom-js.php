<?php
include("class/template.php");
$page = new template("3");
$page->title = "Custom JS";
$page->desc = "Personnalisz votre javascript pour certaine page !";
$page->tag = "Page, php, bootstrap";
$page->addJs("js/custom.js");
$page->displayHeader();
?>

<p class="lead">Personnalisz votre javascirpt pour certaine page!.</p>
<p>Voici un exemple d'utilisation de js personnalisé.</p>
<p id="customJs"></p>


<div class="highlight"><pre><code class="language-html" data-lang="html">$page-&gt;addJs("js/custom.js");
</code></pre></div>

<?php
$page->displayFooter();
?>