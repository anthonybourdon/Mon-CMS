<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Liste des pages</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Modifier</span></th>
                    <th>Supprimer</th>
                </tr>
                <?= $manager->liste() ?>
            </table>
        </div>
    </div>
</div>
