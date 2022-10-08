//completed nav. Ready to be included. Use nav_items.php to add or delete nav items. 

<nav class="navbar navbar-dark navbar-expand-lg bg-dark fs-5 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">Retour au CV</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <?php require('nav_items.php') ?>

            </ul>
          </div>
        </div>
      </nav>