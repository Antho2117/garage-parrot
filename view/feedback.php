
  <!-- Modal useropinion -->
  <div class="modal fade" id="useropinion" aria-hidden="true" aria-labelledby="useropinionLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h1 class="modal-title fs-5" id="useropinionLabel">Votre avis</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-primary">
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Veuillez indiquer votre nom :</label>
              <input type="text" class="form-control" id="username" placeholder="votre nom">
            </div>
            <div class="mb-3">
              <label for="rating" class="form-label">Veuillez indiquer votre note /5 :</label>
              <input type="text" class="form-control" id="rating" maxlength="1" placeholder="votre note">
            </div>
            <div class="mb-3">
              <label for="opinion" class="form-label">Votre avis :</label>
              <textarea class="form-control" id="opinion" rows="5" placeholder="Veuillez rédiger votre avis"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer bg-success d-flex justify-content-center">
          <button class="btn btn-info text-white" data-bs-target="#senduseropinion" data-bs-toggle="modal">Envoyer</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal send user opinion -->
  <div class="modal fade" id="senduseropinion" aria-hidden="true" aria-labelledby="senduseropinionLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h1 class="modal-title fs-5" id="senduseropinionLabel">Merci!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-primary">
          Nous avons bien reçu votre avis, il sera publié prochainement.
        </div>
        <div class="modal-footer bg-success text-white d-flex justify-content-center">
          <button class="btn btn-info text-white" data-bs-dismiss="modal" aria-label="close">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <main class="container-fluid d-md-flex flex-md-row-reverse col-xl-9 p-md-4">

    <!-- Start modal form -->
    <div class="d-flex flex-column align-items-center justify-content-md-center col-md-6 mt-4">
      <h5 class="text-center p-md-4">Pour publier un avis, cliquez sur le bouton ci-dessous. Vous pouvez aussi consulter les avis en dessous de
        celui-ci.</h5>
      <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#useropinion">Publier un avis</button>
    </div>

    <!-- Accordion -->
    <div class="accordion col-md-6 my-md-4 " id="accordionuseropinion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseOne" 
            aria-expanded="true" 
            aria-controls="collapseOne"
          >
            Avis utilisateur 1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseTwo" 
            aria-expanded="false" 
            aria-controls="collapseTwo"
          >
            Avis utilisateur 2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseThree" 
            aria-expanded="false" 
            aria-controls="collapseThree"
          >
            Avis utilisateur 3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseFour" 
            aria-expanded="false" 
            aria-controls="collapseFour"
          >
            Avis utilisateur 4
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseFive" 
            aria-expanded="false" 
            aria-controls="collapseFive"
          >
            Avis utilisateur 5
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseSix" 
            aria-expanded="false" 
            aria-controls="collapseSix"
          >
            Avis utilisateur 6
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseSeven" 
            aria-expanded="false" 
            aria-controls="collapseSeven"
          >
            Avis utilisateur 7
          </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button 
            class="accordion-button collapsed bg-success text-white" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseEight" 
            aria-expanded="false" 
            aria-controls="collapseEight"
          >
            Avis utilisateur 8
          </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionuseropinion">
          <div class="accordion-body">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam porro voluptatum id sapiente doloribus 
              quos laborum beatae ab vel mollitia libero ipsa sit iste, nisi ratione debitis in modi? Quos.</span>
          </div>
        </div>
      </div>
    </div>  
  </main>
