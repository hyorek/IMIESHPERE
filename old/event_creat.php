<html>
    <body>
        <?php require_once 'header.php'; ?>
        <main>
            <div class="container newevent">
                <form action="traitement.php"   method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="titre">Nom de l'evenement</label>
                            <input type="text" name="titre" id="titre" value="" placeholder="titre"/>                        
                        </div>
                        <div class="form-group">
                            <label for="titre" rows="25" col="80">Description de l'evenement</label>
                            <textarea name="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">date de l'evenement</label>
                            <input type="date" name="date" id="date" value=""/>                        
                        </div>
                        <div class="form-group">
                            <label for="time">heur de debut</label>
                            <input type="time" name="time" id="time" value=""/>                        
                        </div>

                        <div class="form-group">
                            <label for="prix">prix</label>
                            <input type="prix" name="prix" id="prix" value=""/>                        
                        </div>

                        <div class="form-group">
                            <input type="submit" name="valide" id="valide" value="Valider"/>
                        </div>
                    </fieldset>
                </form>

            </div>
        </main>
    </body>
    <?php include 'footer.php'; ?>
</html>