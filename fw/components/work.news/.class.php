<?php

namespace Fw\Components\News;

use Fw\Core\Component\Base;

class Component extends Base {

    public function __construct($id, $id_template, $params)
    {
        $this->params = $params;
        $this->__path = $_SERVER['DOCUMENT_ROOT'];
        parent::__construct($id,$id_template);
    }

    public function executeComponent() {
        $this->result['title'] = $this->params['title'];
        $this->template->render($this->result);
    }
}