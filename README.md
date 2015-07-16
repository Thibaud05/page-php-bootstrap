# page-php-template
Créez votre site orienté objet avec page

1 - Personaliser votre classe template

2 - Créer vos pages


## Exemple de classe template :
```php
<?php
require_once 'class/page.php';
class template extends page {

    public function __construct(){
        $this->title = "Titre par default";
        $this->site_title = "Mon site";
        $this->sep = " - ";
        $this->desc = "Description par default";
        $this->tag = "Mots clef par default";
        $this->addCss("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css");
        $this->addCss("css/sticky-footer.css");
        $this->addJs("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
        $this->addJs("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js");
    }
    protected function header(){
        return '    
        <div class="container">
          <div class="page-header">
            <h1>'.$this->title.'</h1>
          </div>';
         
    }
    protected function footer(){
        return '
        </div>
        <footer class="footer">
          <div class="container">
            <p class="text-muted"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> Copyright Page-php-bootstrap</p>
          </div>
        </footer>';
    }
}
?>
```

## Création d'une page :
```php
<?php
include("class/template.php");
$page = new template("42");
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
```
