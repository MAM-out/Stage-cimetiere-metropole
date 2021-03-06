<?php require "header.php" ?>

<!-- fiches et actions -->


<div class="container">
  <div class="row">

        <div class="col-md-8">
          <p class="lead">FICHE USAGER DES CARTES D'ACCES</p>
          <form action="" method="get" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="text" class="form-control" placeholder="Nom de famille"> 
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group"> 
                  <input type="text" class="form-control" placeholder="Prénom 1"> 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="text" class="form-control" placeholder="Nom d'usage"> 
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group"> 
                  <input type="text" class="form-control" placeholder="Prénom 2"> 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">  
                  <input type="text" class="form-control" placeholder="Adresse 1"name="Adresse 1">
                </div>
                <div class="form-group">  
                  <input type="text" class="form-control" placeholder="Adresse 2"name="Adresse 2">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Ville" name="Ville">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Code Postal" name="Code Postal">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="N° immatriculation 1">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="N° immatriculation 2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="N° immatriculation 3">
                </div>
                <div class="form-group">
                <label>Date de naissance</label>
                        <input type="date" class="form-control" placeholder="Date de naissance">
                </div>
                <div class="form-group">
                <input type="number" class="form-control" placeholder="N° de carte">

                </div>
                <div class="form-group">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">La Madeleine</label>
                </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Longpré</label>
                    </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Montières</label>
                    </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Petit St Jean</label>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">St Pierre</label>
                </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Renancourt</label>
                    </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Nouveau St Acheul</label>
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Ancien St Acheul</label>                    
                      </div>
              </div>
            </div>
           
           
            <div class="row my-3">
              <div class="col-md-4 ">
                  <div class="form-group">
                      <label>Date de Création</label>    
                      <input type="date"  class="form-control"  placeholder="Date de création">
                  </div>  
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                  <label>Date de modification</label>    
                  <input type="date"  class="form-control"  placeholder="Date de modification">
                  </div>  
              </div>
              <div class="col-md-4">
                 <div class="form-group">
                 <label>Fin de validité</label>    
                  <input type="date"  class="form-control"  placeholder="Fin de validité">
                  </div>  
              </div>
            </div>

            <div class="row">
              <div class="col">
              <a class="btn btn-primary btn-block btn-lg" href="#">AFFECTER</a>
              </div>
            </div>

          </form>
        </div>
        <?php require "menu-fiches-utilisateurs.php" ?>


  </div>
</div>

<?php require "footer.php" ?>
