<?php
require_once 'class/page.php';
require_once 'class/nav.php';
class template extends page {

    public function __construct(){
        parent::__construct();
        $this->title = "Titre par default";
        $this->desc = "Description par default";
        $this->tag = "Mots clef par default";
        $this->addCss("css/sticky-footer.css");

    }
    protected function nav(){
        $nav = new nav($this->url,"nav nav-pills nav-justified");
        $nav->addItem("Accueil","index.php");
        $nav->addItem("Page","page.php");
        $nav->addItem("Custom-css","custom-css.php");
        $nav->addItem("Custom-js","custom-js.php");  
        return $nav->display();
    }
    protected function header(){
        return '    
        <div class="container">
          <div class="page-header">
            '.$this->nav().'<h1>'.$this->title.'</h1>
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



