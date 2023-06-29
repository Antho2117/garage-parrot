<?php require 'model/customerReview.php';

$reviews = getCustomerReview();

?>
  <aside class="d-flex flex-column align-items-center">
    <h1 class="mt-3">Garage V.Parrot</h1>
    <h3 class="m-2">Tout pour vous et votre auto</h3>
    <p class="m-2 text-center col-md-9">Depuis plus de 15 ans le garage Parrot vous accompagne au quotidien dans l'entretien et 
      la réparation de votre véhicule, avec comme point central, votre satisfaction. 
    </p>
    <button type="button" class="btn btn-secondary shadow-lg m-3 m-md-4">
      <a href="contact.php" class="text-decoration-none">
        Contactez-nous
      </a>
    </button>
  </aside>
  <main class="d-md-flex flex-md-column align-items-md-center">
    <div class="container-fluid d-md-flex ">
      <img src="img/hoonicorn.png" class="img-fluid col-md-6 shadow-lg rounded" alt="hoonicorn">
      <div class="container-fluid d-md-flex flex-md-column justify-content-md-evenly">
        <p class="text-center mt-3 fs-3">Le garage V.Parrot vous propose toutes sortes de prestations de la vente à l'entretien
          ou la réparation de votre véhicule :
          <ul class="d-md-flex flex-md-column justify-content-md-between">
            <li>Prestations mécaniques toute marque, y compris véhicules electriques et hybrides.</li>
            <li>Prestations carrosseries toute marque.</li>
            <li>Améliorations des performances.</li>
          </ul>
        </p>
      </div>
    </div>
    <aside class="d-flex flex-column align-items-center m-md-4 col-md-9">
      <h3 class="bg-secondary text-center rounded mb-3 p-2">Derniers avis client :</h3>
        <ul>
            <?php
            foreach ($reviews as $review){
                ?>
                <li class="my-2">
                    <?= $review['comment'] ?><br>
                    posté le <?= $review['date'] ?> par <?= $review['author'] ?>
                </li>
            <?php } ?>
        </ul>
    </aside>
  </main>
