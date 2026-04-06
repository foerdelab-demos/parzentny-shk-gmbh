<?php $currentPage = '404'; $pageTitle = 'Seite nicht gefunden'; require 'includes/header.php'; ?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="text-center mb-5 animate-on-scroll" data-animation="fade-up">
                <h1 class="display-1 text-primary fw-bold">404</h1>
                <h2 class="h3 mb-3">Seite nicht gefunden</h2>
                <p class="lead text-muted">
                    Diese Seite konnte leider nicht gefunden werden. Als traditionsreiches Handwerksunternehmen 
                    sorgen wir normalerweise dafür, dass alles an seinem Platz ist – hier scheint uns ein kleiner 
                    Fehler unterlaufen zu sein.
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 animate-on-scroll" data-animation="fade-up" data-delay="200">
                        <div class="card-body">
                            <h3 class="h5 card-title text-primary mb-3">
                                <i class="fas fa-compass me-2"></i>Navigation
                            </h3>
                            <p class="card-text mb-3">Nutzen Sie unsere Hauptnavigation:</p>
                            <ul class="list-unstyled">
                                <li><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-2"></i>Startseite</a></li>
                                <li><a href="leistungen.php" class="text-decoration-none"><i class="fas fa-wrench me-2"></i>Leistungen</a></li>
                                <li><a href="waermepumpen.php" class="text-decoration-none"><i class="fas fa-thermometer-half me-2"></i>Wärmepumpen</a></li>
                                <li><a href="notdienst.php" class="text-decoration-none"><i class="fas fa-phone-alt me-2"></i>Notdienst</a></li>
                                <li><a href="ausbildung.php" class="text-decoration-none"><i class="fas fa-graduation-cap me-2"></i>Ausbildung</a></li>
                                <li><a href="kontakt.php" class="text-decoration-none"><i class="fas fa-envelope me-2"></i>Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100 animate-on-scroll" data-animation="fade-up" data-delay="400">
                        <div class="card-body">
                            <h3 class="h5 card-title text-primary mb-3">
                                <i class="fas fa-search me-2"></i>Suchfunktion
                            </h3>
                            <p class="card-text mb-3">Suchen Sie nach bestimmten Inhalten:</p>
                            <form class="d-flex" role="search" method="GET" action="index.php">
                                <input class="form-control me-2" type="search" name="search" placeholder="Suchbegriff eingeben..." aria-label="Suchen">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5 animate-on-scroll" data-animation="fade-up" data-delay="600">
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Benötigen Sie Hilfe?</strong> 
                    Unser Team steht Ihnen gerne zur Verfügung. 
                    <a href="kontakt.php" class="alert-link">Kontaktieren Sie uns</a> 
                    oder rufen Sie uns direkt an.
                </div>
                
                <a href="index.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-home me-2"></i>Zur Startseite
                </a>
            </div>
        </div>
    </div>
</main>

<?php require 'includes/footer.php'; ?>