<?php

include 'template/beginPage.php';
include 'template/header.php';
?>

<section class="vh-10 gradient-custom">
  <div class="container py-5 h-20">
    <div class="row d-flex justify-content-center align-items-center h-20">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-black border-pink" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
              <p class="text-black-50 mb-5">Veuillez entrer votre email et votre mot de passe, s'il vous plaît ! </p>
				<form action="login.php" method="post">
					<div class="form-outline form-black mb-4">
						<input name="email" type="email" id="typeEmailX" class="form-control form-control-lg border-pink" />
						<label class="form-label" for="typeEmailX">Email</label>
					</div>
					<div class="form-outline form-black mb-4">
						<input name="password" type="password" id="typePasswordX" class="form-control form-control-lg border-pink" />
						<label class="form-label" for="typePasswordX">Mot de passe</label>
					</div>
					<p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Vous avez oublié votre mot de passe ?</a></p>
					<button class="btn btn-pink px-5" type="submit">Connexion</button>
				</form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-black"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-black"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-black"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </div>
            <div>
              <p class="mb-0">Vous n'avez pas de compte ? <a href="accountCreationView.php" class="text-black-50 fw-bold">S'incrire</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'template/endPage.php';
include 'template/footer.php';
?>