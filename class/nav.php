<?php
class nav {

    private $class;
    private $items;
    private $url;

    public function __construct($url,$class=""){
        $this->url = $url;
        $this->class = $class;
        $this->items = array();

    }
    public function addItem($value,$href,$title=""){
        $title = ($title == "")?$value:"";
        $item = (object)array('value' => $value,'href' => $href,'title' => $title);
        $this->items[] = $item;
    }
    public function display(){
        $html = '<ul class="' . $this->class . '">';
        foreach ($this->items as $item) {
            $class =  ($item->href == $this->url)?' class="active"':'';
            $html .= '<li'.$class.'><a href="' . $item->href . '" title="' . $item->title . '">' . $item->value . '</a></li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
?>



