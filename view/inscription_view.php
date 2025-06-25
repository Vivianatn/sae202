<?php
// Variables pour pré-remplir les champs en cas d'erreur de validation (pour l'UX)
$user_nom = $_POST['user_nom'] ?? '';
$user_prenom = $_POST['user_prenom'] ?? '';
$user_email = $_POST['user_email'] ?? '';
$user_tel = $_POST['user_tel'] ?? '';
$user_adresse = $_POST['user_adresse'] ?? '';
$user_comp_adresse = $_POST['user_comp_adresse'] ?? '';
$user_cp = $_POST['user_cp'] ?? '';
$user_message = $_POST['user_message'] ?? '';

// La variable $error_message doit être définie quelque part avant ce bloc HTML
// Par exemple, si vous avez une logique de validation PHP qui remplit cette variable.
// Pour cet exemple, je la simule pour que l'erreur s'affiche.
$error_message = ''; // Initialisation pour éviter les erreurs si non définie
if (isset($_GET['custom_error'])) {
    $error_message = $_GET['custom_error'];
}
?>

<main class="inscription-page">
    <div class="container-fluid position-relative py-5" style="overflow: hidden;">
        <img class="img-fluid w-100 position-absolute top-0 start-0 z-n1" src="https://placehold.co/1920x667" alt="Background decoration" style="object-fit: cover; height: 667px;">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                <div class="card p-4 p-md-5 my-5" style="background: rgba(255, 255, 255, 0.9); border: none; border-radius: 0;">
                    <img class="img-fluid position-absolute d-none d-lg-block" src="https://placehold.co/1134x1386" alt="Form decoration" style="top: -50px; left: -100px; max-width: 120%; z-index: -1; opacity: 0.8;">

                    <h1 class="text-center mb-4" style="font-family: 'Grenze Gotisch', cursive; font-size: 2.5rem; color: black;">Rejoignez nous !</h1>
                    <h2 class="text-center mb-5" style="font-family: 'Inter', sans-serif; font-size: 1.5rem; color: black;">Inscrivez vous</h2>
                    
                    <?php if ($error_message): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_GET['error']) && $_GET['error'] == "invalid_characters"): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?php echo 'Erreur : détection de caractères spéciaux'; ?>
                        </div>
                    <?php endif; ?>

                    <form action="/connexion/validation_inscription" method="post" class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="user_nom" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Nom*</label>
                            <input type="text" class="form-control form-control-custom" id="user_nom" name="user_nom" placeholder="Nom" value="<?php echo htmlspecialchars($user_nom); ?>" required checked>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="user_prenom" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Prénom*</label>
                            <input type="text" class="form-control form-control-custom" id="user_prenom" name="user_prenom" placeholder="Prénom" value="<?php echo htmlspecialchars($user_prenom); ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="user_tel" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Téléphone*</label>
                            <input type="tel" class="form-control form-control-custom" id="user_tel" name="user_tel" placeholder="Téléphone" value="<?php echo htmlspecialchars($user_tel); ?>" required>
                        </div>
                        
                        <div class="col-12">
                            <label for="user_email" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Adresse e-mail*</label>
                            <input type="email" class="form-control form-control-custom" id="user_email" name="user_email" placeholder="Email" value="<?php echo htmlspecialchars($user_email); ?>" required>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="user_mdp" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Mot de passe*</label>
                            <input type="password" class="form-control form-control-custom" id="user_mdp" name="user_mdp" placeholder="Mot de passe" maxlength="25" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="user_mdp2" class="form-label text-dark fs-5" style="font-family: 'Inter', sans-serif;">Confirmer le mot de passe*</label>
                            <input type="password" class="form-control form-control-custom" id="user_mdp2" name="user_mdp2" placeholder="Confirmer le mot de passe" maxlength="25" required>
                        </div>
                            <label class="form-label text-dark fs-5 center" style="font-family: 'Inter', sans-serif;">Photo de Profil</label>
                        <div class="d-flex flex-wrap justify-content-center align-items-center avatar-selection-group">
                            
                            <label class="avatar-option">
                                <input type="radio" id="avatar1" name="user_photo" value="pdp_avatar.webp" class="hide" required checked>
                                <img src="view/img/pdp/pdp_avatar.webp" alt="Avatar 1">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar2" name="user_photo" value="pdp_cercle.webp">
                                <img src="view/img/pdp/pdp_cercle.webp" alt="Avatar 2">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar3" name="user_photo" value="pdp_chateau.webp">
                                <img src="view/img/pdp/pdp_chateau.webp" alt="Avatar 3">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar4" name="user_photo" value="pdp_comte.webp">
                                <img src="view/img/pdp/pdp_comte.webp" alt="Avatar 4">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar5" name="user_photo" value="pdp_couteau.webp">
                                <img src="view/img/pdp/pdp_couteau.webp" alt="Avatar 5">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar6" name="user_photo" value="pdp_loupe.webp">
                                <img src="view/img/pdp/pdp_loupe.webp" alt="Avatar 6">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar7" name="user_photo" value="pdp_pipe.webp">
                                <img src="view/img/pdp/pdp_pipe.webp" alt="Avatar 7">
                            </label>

                            <label class="avatar-option">
                                <input class="hide" type="radio" id="avatar8" name="user_photo" value="pdp_Sherlock.webp">
                                <img src="view/img/pdp/pdp_Sherlock.webp" alt="Avatar 8">
                            </label>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-outline-primary px-5 py-3 fs-4">Envoyer</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p class="text-dark">Vous avez déjà un compte ? <a href="/connexion" class="text-decoration-underline text-dark fw-bold">Connectez-vous</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>