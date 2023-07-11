<main class="">
    <form method="post" enctype="multipart/form-data">
        <label for="upload">Envoyer une image :</label>
        <input type="file" name="upload" id="upload">
        <button type="submit" name="send" value="send">Envoyer</button>
    </form>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= ROOT ?>/profile" class="text-white text-decoration-none">Retour</a>
    </button>
</main>