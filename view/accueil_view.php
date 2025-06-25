<img src="view/img/banniere1_V3.webp" alt="Bannière d'accueil Entrez dans l'ombre d'un meurtre" class="hero-banner-section background-image">
<main>
<section class="fond_contact"></section>
        <div class="row justify-content-center mt-3">
    <div class="col-auto">
                <div class="info-banner my-5">
        <div class="banner-ribbon">
            <span class="ribbon-text">Accueil</span>
        </div>
</div>
    </div>
</div>
      </div>
  <section class="container image-gallery-section">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <img src="view/img/image_20.webp" alt="Image 1 de l'événement" class="img-fluid gallery-image">
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <img src="view/img/image_21.webp" alt="Image 2 de l'événement" class="img-fluid gallery-image">
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <img src="view/img/image_22.webp" alt="Image 3 de l'événement" class="img-fluid gallery-image">
            </div>
        </div>
    </section>
    <section class="container-fluid bg-custom-grey py-5 section-border">
      <div class="row justify-content-center text-center">
        <div class="col-12">
          <h1>Plongez au cœur du Second Empire, enquêtez dans le salon <br/>d'un comte assassiné, fouillez les indices, confrontez <br/>les témoignages, et démasquez le meurtrier…</h1>
        </div>
      </div>
    </section>
<section class="container my-5 py-5">
    <div class="row justify-content-center g-4 info-cards-section">
        <div class="col-12 col-md-6 col-lg-3 text-center">
            <div class="info-card">
                <img src="/view/img/picto role 1.png" alt="Icône Rôle et Scénario" class="img-fluid mb-3">
                <h3 class="info-card-title">Découvrez le scénario et le rôle que vous allez jouer.</h3>
                <a href="/concept" class="info-card-button bg-custom-button mt-3">Démarrer l'enquête !</a>
            </div>
</div> 

        <div class="col-12 col-md-6 col-lg-3 text-center">
            <div class="info-card">
                <img src="/view/img/picto date 1.png" alt="Icône Calendrier et Dates" class="img-fluid mb-3">
                <h3 class="info-card-title">Dates, lieux, tarifs et réservations.</h3>
                <a href="/infos#prixreserv" class="info-card-button bg-custom-button mt-3">En savoir plus</a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 text-center">
            <div class="info-card">
                <img src="/view/img/picto discussion 1.png" alt="Icône Discussion et Indices" class="img-fluid mb-3">
                <h3 class="info-card-title">Espace joueur pour discuter, échanger des indices.</h3>
                <a href="/messagerie" class="info-card-button bg-custom-button mt-3">Partagez votre expérience</a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 text-center">
            <div class="info-card">
                <img src="/view/img/picto interrogation 1.png" alt="Icône Point d'interrogation et Aide" class="img-fluid mb-3">
                <h3 class="info-card-title">Une question ? <br>Besoin d'aide ?</h3>
                <a href="/contact" class="info-card-button bg-custom-button mt-3">Besoin d'aide ?</a>
            </div>
        </div>
    </div>
</section>
    <section id="meurtre" class="container-fluid py-2">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2 class="fw-normal text-dark">Le Comte mourra dans...</h2>
          <div id="countdown" class="text-custom-yellow display-1 fw-bold my-4"></div>
<a href="/reservation"><button type="button" class="bg-custom-button">Je participe !</button></a>
          <div class="row justify-content-center mt-5">
            <h2>Nombre de participants déjà inscrits :</h2>
            <h1><?php echo $nb_inscrits[0]['COUNT(*)'] ?>/60</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="container py-5">
        </div>

        <hr class="my-5">   
        
        <h1 class="mb-4">Notre évènement : La Mort du Comte</h1>
<p class="lead mb-4 justifier">
    Plongez au cœur d'une énigme palpitante digne des plus grandes aventures de Sherlock Holmes ! Le "Cercle 221B" vous convie à une expérience immersive unique en son genre : le Mort du Comte. Dans l'atmosphère feutrée et majestueuse du Château de La Motte Tilly, le Comte de La Motte a été retrouvé sans vie. Qui a commis l'irréparable ? Quels secrets se cachent derrière les murs ancestraux ?
</p>
<p class="lead mb-4 justifier">
    Revêtez votre costume d'enquêteur du XIXe siècle et unissez vos forces. Interrogez les suspects, examinez les moindres recoins du château, décodez les indices cachés et démêlez les mensonges des vérités. Chaque détail compte, chaque conversation peut révéler un élément crucial. Votre sagacité sera mise à l'épreuve pour démasquer le coupable avant que la nuit ne s'achève. Préparez-vous à une immersion totale où l'histoire prend vie et où chaque participant devient le héros de sa propre enquête.
</p>
<a href="/concept" class="bg-custom-button mb-5">En savoir plus sur le Concept</a>

        <hr class="my-5">

        <div class="container py-4">
        <br><br>
        <div class="row"></div>
        <h1 class="mb-4">Espace commentaires :</h1>
        <?php
          if(!empty($commentaires_verif)){
            foreach ($commentaires_verif as $commentaire) {
              
              echo '<div class="col-12 mb-3">';
              echo '<div class="card bg-custom-grey border-dark">';
              echo '<div class="card-body">';
              echo '<h1 class="card-text mb-1"><img class="pdp" src="view/img/pdp/'.$commentaire['user_photo'].'" alt="Photo de profil">' . htmlspecialchars($commentaire['user_prenom']) .' '. htmlspecialchars($commentaire['user_nom']) .'</h1><em class="com-desc">le '.htmlspecialchars(substr($commentaire['com_date'], 0, 10)).' à '.htmlspecialchars(substr($commentaire['com_date'], 11, 5)).'</em><br>';
              echo '<em class="card-text mb-1">Adresse : ' . htmlspecialchars($commentaire['user_email']) .' </em><br><br>';
              echo '<h4 class="card-title mb-2">' . htmlspecialchars($commentaire['com_contenu']) . '</h4>';
              echo '</div>';
              echo '</div>';
            }
          }else{
            echo '<div class="alert alert-info" role="alert">Aucun commentaire pour l\'instant.</div>';
          }
          
        ?>
        </div>
        </div>

        <?php
        if(isset($_SESSION['user_email'])) {
            echo '<h1>Laissez nous un commentaire :</h1>';
            echo '<form action="/accueil/commentaire" method="post">';
            echo '<br>';
            echo '<div class="col-12 col-md-6">
                    <input type="text" class="form-control form-control-custom" id="com_contenu" name="com_contenu" placeholder="Commentaire..." value="" required>
                  </div>';
            echo '<br><br>';
            echo '<button class="bg-custom-button">Envoyer</button>';
            echo '</form>';
        }
        ?>
    </section>
</main>
<script src="view/js/countdown.js"></script>
    