<?php
class nav {

    private $idPage;
    private $class;
    private $items;

    public function __construct($idPage=0,$class=""){
        $this->idPage = $idPage;
        $this->class = $class;
        $this->items = array();
    }
    public function addItem($id,$value,$href,$title=""){
        $title = ($title == "")?$value:"";
        $item = (object)array('id' => $id,'value' => $value,'href' => $href,'title' => $title);
        $this->items[] = $item;
    }
    public function display(){
        $html = '<ul class="' . $this->class . '">';
        foreach ($this->items as $item) {
            $class =  ($item->id == $this->idPage)?' class="active"':'';
            $html .= '<li'.$class.'><a href="' . $item->href . '" title="' . $item->title . '">' . $item->value . '</a></li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
?>



