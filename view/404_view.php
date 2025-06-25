<main class="error-404-page">
    <section class="container-fluid py-5 text-center d-flex flex-column justify-content-center align-items-center" style="min-height: 80vh; background-color: white;">
        <h1 class="display-1 fw-bold text-custom-yellow mb-4" style="font-family: 'Grenze Gotisch', cursive;">404</h1>
        <h2 class="display-5 fw-normal text-dark mb-4" style="font-family: 'Grenze Gotisch', cursive;">Oops ! Cette page est introuvable...</h2>
        
        <p class="lead fw-normal text-dark mb-5" style="font-family: 'Inter', sans-serif; max-width: 700px;">
            Il semblerait que vous ayez suivi une **piste qui ne mène nulle part**. Même les plus grands détectives se perdent parfois !<br>
            Mais ne vous inquiétez pas, il n'y a pas de crime ici... juste une page manquante.
        </p>
        
        <img src="https://placehold.co/400x300" alt="Détective perdu ou loupe" class="img-fluid mb-5" style="max-width: 300px;"> 
        <a href="/" class="btn bg-custom-button px-5 py-3 fs-4">Retourner sur la scène de crime (l'accueil)</a>
    </section>
</main>

<style>
    /* Ajoutez ces styles à votre fichier CSS existant */

    .text-custom-yellow {
        color: #A1894B; /* Votre couleur jaune pour le grand 404 */
    }

    .bg-custom-button {
        background-color: #A1894B;
        color: black;
        border: 3px solid #A1894B; 
        border-radius: 0;
        font-family: 'Times New Roman', serif;
        font-weight: 400;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .bg-custom-button:hover {
        background-color: #8c733f; /* Lighter shade on hover */
        color: white;
    }

    .error-404-page h1 {
        font-size: 8rem; /* Pour un effet plus grand sur le 404 */
    }

    .error-404-page h2 {
        font-size: 2.5rem;
    }

    .error-404-page p {
        font-size: 1.3rem;
        line-height: 1.6;
    }

    /* Adaptations responsives si nécessaire */
    @media (max-width: 768px) {
        .error-404-page h1 {
            font-size: 6rem;
        }
        .error-404-page h2 {
            font-size: 2rem;
        }
        .error-404-page p {
            font-size: 1.1rem;
        }
        .error-404-page img {
            max-width: 200px;
        }
        .bg-custom-button {
            font-size: 1.2rem;
            padding: 10px 30px;
        }
    }
</style>