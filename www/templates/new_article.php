<?php $this->title= "Nouvel Article"; ?>

<div class="card col-md-12" style="background-color:whitesmoke;">
    <div class="card-body">
        <h1 class="card-title">Ecrivez votre nouvel Article</h1>
        <div class="card-text">
            <form action="../public/index.php?route=newArticle" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
                    </div>
                    <div class="form-group col-md-3 offset-3">
                        <label for="status">Statut</label>
                        <select id="status" name="status" class="form-control">
                            <option value="draft">En Ecriture</option>
                            <option selected value="publish">Publié</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="10"
                            placeholder="Ecrivez votre Article ici..."></textarea>
                    </div>
                </div>
                <div class="form-row justify-content-end">
                    <button type="submit" class="col-2 btn btn-primary" id="submit" name="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<h1></h1>