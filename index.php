<?php
    require 'app/core/init_var.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include STATIC_VIEWS.'/head.php'; ?>
</head>
<body>
    <?php include STATIC_VIEWS.'/modals/add-sound.php'; ?>
        
    <div class="container-fluid">
        <header class="row">
            <div id="logo" class="pull-left">
                <h3>Simplesound</h3>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchsong" placeholder="Rechercher...">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                    </div>
                </div>                    
            </div>                
        </header>
        <section id="navigation">
            <button id="add-sound" data-toggle="modal" data-target="#add-sound" class="btn btn-success">Ajouter un son</button>
        </section>
        <section id="content-site">
            <div class="page">
                <div class="soundlist row">
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>
                    <div class="sound col-md-3 col-sm-6">
                        <iframe src="http://www.youtube.com/embed/iqMlCnWIBPU"></iframe>
                    </div>                    
                </div>
            </div>
        </section>        
    </div>
    
    <?php include STATIC_VIEWS.'/footer.php'; ?>
</body>
</html>