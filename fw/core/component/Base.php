<?php

namespace Fw\Core\Component;

abstract class Base
{
    public $result;
    public $id;
    public $params;
    public $template;
    public $id_template;
    public $__path;

    public function __construct($id, $id_template)
    {
        $this->id;
        $this->$id_template = $id_template;
        $this->template = new Template($id, $this->__path, $id_template);
    }

    abstract protected function executeComponent();
}
