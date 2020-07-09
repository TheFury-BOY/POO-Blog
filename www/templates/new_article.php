<?php $this->title= "Nouvel Article"; ?>

<div class="card col-md-12" style="background-color:whitesmoke;">
    <div class="card-body">
        <h1 class="card-title">Ecrivez votre nouvel Article</h1>
        <div class="card-text">
            <form action="../public/index.php?route=newArticle" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="art_title">Titre</label>
                        <input type="text" class="form-control" id="art_title" placeholder="Titre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="art_content">Contenu</label>
                        <textarea class="form-control" id="art_content" rows="10" placeholder="Ecrivez votre Article ici..."></textarea>
                    </div>
                </div>
                <div class="form-row justify-content-end">
                    <button type="submit" class="col-2 btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<h1></h1>