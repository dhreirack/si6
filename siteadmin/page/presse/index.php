<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  Presse \\ <small> Gérer les articles</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=presse&action=create">Créer un article</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>titre</td>
                    <td>description</td>
                    <td>date</td>
                    <td>modifications</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesArticles as $unArticle) {
                   echo "<tr><td>".$unArticle->nomarticle."</td><td>".$unArticle->description."</td><td>".$unArticle->dtearticle."</td><td><a href=\"index.php?controller=news&action=delete&id=".$unArticle->idarticle."\">Supprimer</a>
</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>