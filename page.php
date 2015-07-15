<?php
include("class/template.php");
$page = new template("2");
$page->title = "Page";
$page->desc = "Description de la page";
$page->tag = "Page, php, bootstrap";
$page->displayHeader();
?>

<p class="lead">Comment utiliser la class php page?</p>
<p>Voici le code php d'une page. Il es possible de personnaliser une page en css, <a href="custom-css.php" title="custom css">custom css</a> est un exemple de page personalisé.</p>

<div class="highlight"><pre><code class="language-html" data-lang="html">&lt;?php
<span class="text-muted">// Chargement de la librairie</span>
include("class/template.php");

<span class="text-muted">// Création de l'objet page avec l'id en paramètre</span>
$page = new template("2");

<span class="text-muted">// Titre utilisé dans les balise  &lttitle&gt; et &lth1&gt;</span>
$page-&gt;title = "Page";

<span class="text-muted">// Balises meta </span>
$page-&gt;desc = "Description de la page";
$page-&gt;tag = "Page, php, bootstrap";

<span class="text-muted">// Affichage de l'entête de page</span>
$page-&gt;displayHeader();
?&gt;

Contenu de la page en html ...

&lt;?php
<span class="text-muted">// Affichage du pied de page</span>
$page-&gt;displayFooter();
?&gt;
</code></pre></div>

<?php
$page->displayFooter();
?>