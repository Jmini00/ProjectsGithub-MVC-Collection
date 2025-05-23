<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mx-auto p-5">
            <div class="d-flex justify-content-between align-items-center pb-5">
                <h1>Administration</h1>
                <a href="/Vinyles_MVC-Collection/admin/new/project" class="btn btn-success">Nouveau</a>
                <a href="/Vinyles_MVC-Collection" class="btn btn-success">Accueil</a>
            </div>

            <!-- Message de succès -->
            <?php if(isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php endif; ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Créer le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($projects as $project): ?>
                        <tr>
                            <td class="py-4"><?php echo $project->getId(); ?></td>
                            <td class="py-4"><?php echo $project->getTitle(); ?></td>
                            <td class="py-4"><?php echo $project->getCreatedAt()->format('d.m.Y'); ?></td>
                            <td class="py-3">
                                <a href="/Vinyles_MVC-Collection/admin/edit/project?id=<?php echo $project->getId(); ?>" class="btn btn-outline-secondary">
                                    Editer
                                </a>
                                <a
                                    href="/Vinyles_MVC-Collection/admin/delete/project?id=<?php echo $project->getId(); ?>"
                                    class="btn btn-outline-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer le projet ?')"
                                >
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
