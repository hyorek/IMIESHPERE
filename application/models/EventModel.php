<?php

class ArticleModel{
    public function getArticle($id) {
        $bdd = BDD::getInstance();
        $bdd->queryGet('SELECT...');
    }

}

?>