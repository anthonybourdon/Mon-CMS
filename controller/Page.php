<?php

class Page {
    private $_titre;
    private $_menuText;
    private $_contenu;
    private $_id;
    private $_urlSlug;

    public function __construct($tab) {
        $this->hydrate($tab);
    }

    public function hydrate($table) {
        if(isset($table['titre'])){
            $this->_titre = $table['titre'];
            $this->set_urlSlug();
        }
        if(isset($table['menuText']))
            $this->_menuText = $table['menuText'];
        if(isset($table['contenu']))
            $this->_contenu = $table['contenu'];
        if(isset($table['id']))
            $this->_id = $table['id'];
    }

    public function get_titre() {
        return $this->_titre;
    }

    public function get_menuText() {
        return $this->_menuText;
    }

    public function get_contenu() {
        return $this->_contenu;
    }

    public function get_id() {
        return $this->_id;
    }

    public function get_urlSlug() {
        return $this->_urlSlug;
    }

    public function set_urlSlug() {
        $regex = ["#[\s-']#", "#[,\?\!;:/]#", "#[éèêëÉÈÊË]#", "#[àâäÀÂÄ]#", "#[ùûüÙÛÜ]#", '#[îïÎÏ]#', '#[ôöÔÖ]#', '#[çÇ]#'];
        $replace = ['_', '', 'e', 'a', 'u', 'i', 'o', 'c'];
        $this->_urlSlug = preg_replace($regex, $replace, strtolower($this->_titre));
    }
}

?>