<?php

namespace Fw\Core;

use Fw\Core\Implements\SingletonTrait;

class Pager
{
    use SingletonTrait;
    private $container;
    public const JS_MACROS = "#FW_PAGE_JS#";
    public const CSS_MACROS = "#FW_PAGE_CSS#";
    public const STR_MACROS = "#FW_PAGE_STR#";


    public function addJs(string $src)
    {
        $this->container['js'][] = $this->addJsTag($src);
    }

    public function addCss(string $link)
    {
        $this->container['css'][] = $this->addLinkTag($link);
    }

    public function addString(string $str)
    {
        $this->container['str'][] = $str;
    }

    public function setProperty(string $id, mixed $value)
    {
        $id = "#FW_PAGE_PROPERTY_" . strtoupper($id) . "#";
        $this->container['property'][$id] = $value;
    }

    public function showProperty(string $id)
    {
        echo "#FW_PAGE_PROPERTY_" . strtoupper($id) . "#";
    }

    public function getAllReplace()
    {
        
        $res = [];
        if (array_key_exists('js',$this->container)) {
            $res[self::JS_MACROS] = implode("\n", $this->container['js']);
        } else {
            $res[self::JS_MACROS] = '';
        }
        if (array_key_exists('css',$this->container)) {
            $res[self::CSS_MACROS] = implode("\n", $this->container['css']);
        }
        else {
            $res[self::CSS_MACROS] = '';
        }
        if (array_key_exists('str',$this->container)) {
            $res[self::STR_MACROS] = implode("\n", $this->container['str']);
        }
        else {
            $res[self::STR_MACROS] = '';
        }
        if (array_key_exists('property',$this->container)) {
            return array_merge($res, $this->container['property']);
        } else {
            return $res;
        }
       
    }


    private function addJsTag(string $value) : string {
        return "<script src = \"{$value}\"></script>";
    }
    private function addLinkTag(string $value) : string {
        return "<link rel=\"stylesheet\" href=\"{$value}\">";
    }

    public static function showHead()
    {
        echo self::JS_MACROS . ' ';
        echo self::CSS_MACROS . ' ';
        echo self::STR_MACROS . ' ';
    }
}
