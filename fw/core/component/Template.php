<?php

namespace Fw\Core\Component;

use Fw\Core\Pager;

class Template {
    public $__path;
    public $__relativePath;
    public $id;

    public function __construct($id, $path, $template) 
    {
        $this->id = $id;
        $this->__path = $path . '/fw/components/' . $id . '/templates/' . $template . '/';
        $this->__relativePath = 'fw/components/'  . $id . '/templates/' . $template . '/';
    }

    public function render(array $result, string $page = "template") {
        $pager = Pager::getInstance();

        if (file_exists($this->__relativePath . 'style.css')) {
            $pager->addCss($this->__relativePath . 'style.css');
        }

        if (file_exists($this->__relativePath . 'script.js')) {
            $pager->addJs($this->__relativePath . 'script.js');
        }

        if (file_exists($this->__relativePath . $page . '.php')) {
            include ($this->__relativePath . $page . '.php');
        }
    }
}