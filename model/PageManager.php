<?php

class PageManager {

    private $_db;
    private $_table;

    public function __construct() {
        $this->_table='page';
        $this->set_db();
    }

    public function create($page) {
        $i = 2;
        $url = $page->get_urlSlug();
        print_r($url);
        while($this->urlSlugExist($url)) {
            $url .= "_" . $i;
            $i++;
        }
        $query = "insert into " . $this->_table . " set titre= :titre, menuText= :menuText, contenu= :contenu, urlSlug= :urlSlug";
        $st = $this->_db->prepare($query);
        $st->bindParam(":titre", $page->get_titre());
        $st->bindParam(":menuText", $page->get_menuText());
        $st->bindParam(":contenu", $page->get_contenu());
        $st->bindParam(":urlSlug", $url);

        return $st->execute();

    }

    public function read($id) {
        //récup des info depuis la bd
        $query = "select * from " . $this->_table . " where id=" . $id;

        $st = $this->_db->prepare($query);
        $st->execute();

        $result = $st->fetch(PDO::FETCH_ASSOC);
        $output = new Page($result);
        return $output;
    }

    public function readUrlSlug($urlSlug) {
        //récup des info depuis la bd
        $query = "select * from " . $this->_table . " where urlSlug='" . $urlSlug . "'";

        $st = $this->_db->prepare($query);
        $st->execute();

        $result = $st->fetch(PDO::FETCH_ASSOC);
        $output = new Page($result);
        return $output;
    }

    public function readList() {
        $query = "select * from ".$this->_table;
        $st = $this->_db->prepare($query);
        $st->execute();

        $result = $st->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($page) {
        $query = "update " . $this->_table . " set titre= :titre, menuText= :menuText, contenu= :contenu, urlSlug= :urlSlug where id= :id";
        $st = $this->_db->prepare($query);
        $st->bindParam(":id", $page->get_id());
        $st->bindParam(":titre", $page->get_titre());
        $st->bindParam(":menuText", $page->get_menuText());
        $st->bindParam(":contenu", $page->get_contenu());
        $st->bindParam(":urlSlug", $page->get_urlSlug());
        try {
            $success = $st->execute();
        } catch (Exception $e) {
            return false;
        }
        return $success;
    }

    public function delete($id) {
        $query = "delete from " . $this->_table . " where id=" . $id;
        $st = $this->_db->prepare($query);
        $st->execute();

        $result = $st->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function set_db() {
        $connect = new Base();
        $this->_db = $connect->get_db();

    }

    public function menu() {
        $pages = $this->readList();
        $output = "";


        foreach ($pages as $page) {
            $menuPage = new Page($page);
            if($menuPage->get_urlSlug()==$_GET['page'])
                $active = "active";
            else
                $active = "";
            $output .= "<li role='presentation' class='" . $active . "'><a href='" . $menuPage->get_urlSlug() . ".html'>" . $menuPage->get_menuText() . "</a></li>";
        }
        return $output;
    }

    public function liste() {
        $pages = $this->readList();
        $output = "";

        foreach ($pages as $page) {
            $menuPage = new Page($page);
            $output .= "<tr><td>" . $menuPage->get_id() . "</td>
                            <td>" . $menuPage->get_titre() . "</td>
                            <td><a type='button' data-id=" . $menuPage->get_id() ." class='btn btn-warning modif' href='admin.php?admin=modifier&id=" . $menuPage->get_id() . "'><span class='glyphicon glyphicon-pencil'> Modifier</a></td>
                            <td><button type='button' data-id='" . $menuPage->get_id() ."' class='btn btn-danger sup'><span class='glyphicon glyphicon-trash'> Supprimer</button></td><tr>";
        }
        return $output;
    }

    public function urlSlugExist($urlSlug) {
        $enregistrements = $this->readList();
        foreach ($enregistrements as $row) {
            if($row['urlSlug']==$urlSlug)
                return true;
        }
        return false;
    }
}

?>