<?php
require_once 'class/page.php';
require_once 'class/nav.php';
class template extends page {

    public function __construct($id){
        $this->id = $id;
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
    protected function nav(){
        $nav = new nav($this->id,"nav nav-pills nav-justified");
        $nav->addItem("1","Accueil","index.php");
        $nav->addItem("2","Page","page.php");
        $nav->addItem("3","Custom-css","custom-css.php");
        $nav->addItem("4","Custom-js","custom-js.php");  
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



