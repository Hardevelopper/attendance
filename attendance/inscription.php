<html lang="">
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="contenaire-fluid ctn">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form action="" method="post"  class="form-container">
                        <div class="form-group">
                            <center><h2>Inscription</h2></center>
                          </div>
                        <div class="form-group">
                            <label for="Nom">Nom</label>
                            <input type="text" class="form-control" name="Nom" aria-describedby="Nom" required>
                          </div>
                          <div class="form-group">
                            <label for="Prenoms">Prénoms</label>
                            <input type="text" class="form-control" name="Prenoms" aria-describedby="Prenoms" required>
                          </div>
                        <div class="form-group">
                          <label for="email">e-mail</label>
                          <input type="email" class="form-control" name="email" aria-describedby="email" required>
                          <small id="email" class="form-text text-muted">Nous ne partageons jamais votre email</small>
                        </div>
                        <div class="form-group">
                          <label for="Password">Mot de passe</label>
                          <input type="password" class="form-control" name="Password" required>
                          <small id="passsword" class="form-text text-muted">Confidentielle</small>
                        </div>
                        <div class="form-group">
                            <label for="Cpassword">Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="Cpassword" required>
                            <small id="passsword" class="form-text text-muted">Confidentielle</small>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="radio">Homme
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="radio">Femme
                          </label>
                        </div>
                        <input type="submit" name="Valider" class="btn btn-success btn-block">
                      </form>
                </section>

            </section>

        </section>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
  $con = new myqli("localhost", "root", "", "attendance");
  if(isset($_POST['Valider']))
  {
    $Nom = $_POST['Nom'];
    $Prenoms = $_POST['Prenoms'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $Cpassword = $_POST['Cpassword'];
    $radio = $_POST['radio'];
    $query = "insert into etudiants (Nom, Prenoms, email, Password, Cpassword, radio) 
    values ('$Nom', '$Prenoms', '$email', '$Password', '$Cpassword', '$radio')";
    if(mysql_query($con, $query))
    {
      echo "<h3> Inscription effectuée !</h3>";
    }
  }

?>
