
  <aside>
    <h2 class="text-center pt-4">Notre atelier</h2>
    <p class="text-center pt-2">Pour un traitement plus rapide, vous pouvez nous appeler au
    <a href="tel:+01234567890">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone"
        viewBox="0 0 16 16">
        <path
          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
      </svg>
      0123456789
    </a>
    </p>
  </aside>

  <!-- Form -->
  <main class="my-md-5">
    <form class="container-fluid col-md-6 col-lg-5 col-xl-4">
      <div class="my-3">
        <label for="service" class="form-label">Quel genre de prestation désirez-vous :</label>
        <select class="form-select" id="service" aria-label="Default select">
          <option selected>selectionnez une prestation</option>
          <option value="1">Prestation mécanique</option>
          <option value="2">Prestation carrosserie</option>
          <option value="3">Autre</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="immatriculation" class="form-label">Immatriculation du véhicule :</label>
        <input type="email" class="form-control" id="immatriculation" placeholder="AB-123-CD">
      </div>
      <div class="mb-3">
        <label for="bookingDate" class="form-label">Quelle est la date souhaitée :</label>
        <input type="text" class="form-control" id="bookingDate" placeholder="AAAA/MM/JJ">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Votre numéro de téléphone :</label>
        <input type="text" class="form-control" id="phone" placeholder="0123456789">
      </div>
      <div class="d-flex justify-content-center">
        <button 
          type="button" 
          class="btn btn-secondary mb-3 my-md-4" 
          data-bs-toggle="modal" 
          data-bs-target="#formSendModal"
        >
          Envoyer
        </button>
      </div>
    </form> 
    <!-- Send request modal -->
    <div class="modal fade" id="formSendModal" tabindex="-1" aria-labelledby="formSendModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h1 class="modal-title fs-5" id="formSendModalLabel">Demande envoyée</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-primary">
            Demande envoyée, nous vous répondrons en moins de 24h.
          </div>
          <div class="modal-footer d-flex justify-content-center bg-success">
            <button type="button" class="btn btn-secondary border-0 bg-info text-white" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </main>
