<?php
include("class/page.class.php");
$page = new page("42");
$page->title = "Page-php-bootstrap";
$page->desc = "Description de la page";
$page->tag = "Page, php, bootstrap";
$page->displayHeader();
?>

<p class="lead">Bienvenue, Page est un modele de site php POO, il permet de créer facilement votre site php avec bootstrap.</p>
<p>Cette <a href="page.php" title="Page">page</a> est un exemple de page créé avec page-php-bootstrap</p>

<?php
$page->displayFooter();
?>