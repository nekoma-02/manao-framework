<?php

namespace Fw\Components\Interface;

use Fw\Core\Component\Base;

class Component extends Base {

    public function __construct($id, $id_template, $params)
    {
        $this->params = $params;
        $this->__path = $_SERVER['DOCUMENT_ROOT'];
        parent::__construct($id,$id_template);
    }

    public function executeComponent() {
        $this->result = $this->params;
        $this->template->render($this->result);
    }
}