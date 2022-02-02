<?php
class GCwiki {
    public static function BeforePageDisplay($out) {
     $out->addHeadItems('<link rel="stylesheet" type="text/css" href="/extensions/GCwiki/fontawesome/5.15.4/css/all.min.css">');
     $out->addHeadItems('<link rel="stylesheet" type="text/css" href="/extensions/GCwiki/css/root.css">');
     $out->addHeadItems('<link rel="stylesheet" type="text/css" href="/extensions/GCwiki/css/css.css">');
     return true;
    }
     public static function VectorBeforeFooter() {
     echo '<script type="text/javascript" src="/extensions/GCwiki/js/js.js"></script>';
     echo '<script type="text/javascript" src="/extensions/GCwiki/js/collapse.js"></script>';
     return true;
    }
}
?>