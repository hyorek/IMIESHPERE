<?php

class BlogController{
    public function lire(){
        if (empty($_GET['id'])) {
            echo "ERROR !";
        } else {
            $id = intval($_GET['id']);
            require_once("application\models\ArticleModel.php");
            $articlemodel = new ArticleModel();
            $article = $articlemodel->getArticle($id);
            if (empty($article))
                echo "ERROR";
            else {
                require_once("application\views\Blog\lire.php");
            }
        }
    }
}

?>