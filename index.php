<?php 
$currentPage = 'index';
$company_name = 'Parzentny SHK GmbH';
$phone = '0461-47753';
$emergency_phone = '0160-97251061';
$email = 'info@parzentny-shk.de';
$founded_year = '1983';
$current_year = date('Y');
$years_experience = $current_year - $founded_year;

require 'includes/header.php'; 
?>

<main>
    <!-- A/B Testing Hero Variants -->
    <div id="hero-a" class="hero-variant" data-variant="a">
        <section class="hero hero-fullscreen" style="background: linear-gradient(rgba(27,67,50,0.4), rgba(27,67,50,0.6)), url('https://source.unsplash.com/featured/?german,craftsman,heating,plumbing') center/cover no-repeat" role="banner" aria-label="Hauptbereich mit Firmeninformationen">mbing,workshop') center/cover no-repeat;">
            <div class="hero-content text-center">
                <div class="generationen-badge mb-4 animate-on-scroll fade-in-up">
                    <span class="badge badge-primary">Meisterbetrieb seit <?php echo $founded_year; ?> - 3. Generation</span>
                </div>
                <h1 class="hero-title text-white mb-4">Drei Generationen. Ein Versprechen.</h1>
                <p class="hero-subtitle text-white mb-6">Seit 1983 stehen drei Generationen Meisterhandwerk für präzise Arbeit und Vertrauen in Harrislee und Umgebung.</p>
                
                <div class="handwerks-symbole mb-6 animate-on-scroll fade-in-up stagger-1">
                    <div class="symbole-container">
                        <i class="fas fa-wrench"></i>
                        <i class="fas fa-fire-flame-curved"></i>
                        <i class="fas fa-droplet"></i>
                        <i class="fas fa-award"></i>
                    </div>
                </div>

                <div class="hero-cta animate-on-scroll fade-in-up stagger-2">
                    <a href="tel:<?php echo $emergency_phone; ?>" class="btn btn-danger btn-large pulse">
                        <i class="fas fa-phone"></i> Notdienst <?php echo $emergency_phone; ?>
                    </a>
                    <a href="kontakt.php" class="btn btn-outline-light ml-4">Beratung vereinbaren</a>
                </div>
            </div>
        </section>
    </div>

    <div id="hero-b" class="hero-variant" data-variant="b" style="display:none">
        <section class="hero hero-split">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content">
                            <div class="vdi-badge mb-3 animate-on-scroll fade-in-up">
                                <span class="badge badge-success">VDI 4645 geprüftes Unternehmen</span>
                            </div>
                            <h1 class="hero-title mb-4">VDI-zertifizierte Wärmepumpen-Experten seit 1983</h1>
                            <p class="hero-subtitle mb-5">Als einziger VDI 4645-zertifizierter Fachbetrieb der Region garantieren wir fachgerechte Wärmepumpen-Installation nach neuesten Standards.</p>
                            
                            <ul class="usp-liste mb-6 animate-on-scroll fade-in-up stagger-container">
                                <li class="stagger-1"><i class="fas fa-certificate text-success"></i> VDI 4645 zertifizierter Wärmepumpen-Fachbetrieb</li>
                                <li class="stagger-2"><i class="fas fa-clock text-danger"></i> 24h Notdienst mit direkter Meister-Erreichbarkeit</li>
                                <li class="stagger-3"><i class="fas fa-award text-primary"></i> <?php echo $years_experience; ?> Jahre Erfahrung und Ausbildungstradition</li>
                            </ul>

                            <div class="hero-cta animate-on-scroll fade-in-up stagger-4">
                                <a href="waermepumpen.php" class="btn btn-primary btn-large">Kostenlose Beratung</a>
                                <a href="tel:<?php echo $phone; ?>" class="btn btn-outline-primary ml-3">
                                    <i class="fas fa-phone"></i> <?php echo $phone; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-hover-container animate-on-scroll fade-in-up stagger-5">
                            <img src="https://source.unsplash.com/featured/?heating,system,installation,pipes,technical" 
                                 alt="VDI-zertifizierte Wärmepumpen-Installation" 
                                 class="img-fluid rounded shadow-lg" 
                                 loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 3-Generationen Timeline (Meister Heritage) -->
    <section class="meister-heritage py-5 bg-light animate-on-scroll fade-in-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Drei Generationen Meisterhandwerk</h2>
                    <p class="section-subtitle">Von der Gründung 1983 bis heute: Eine Familientradition, die Bestand hat.</p>
                </div>
            </div>
            
            <div class="timeline-container">
                <div class="timeline-item animate-on-scroll fade-in-up stagger-1">
                    <div class="timeline-year">1983</div>
                    <div class="timeline-content">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="img-hover-container">
                                    <div class="timeline-image" style="background: linear-gradient(135deg, #1B4332 0%, #40916C 100%); width: 200px; height: 150px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-hammer text-white fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>1. Generation - Die Gründung</h3>
                                <p>Start als Meisterbetrieb in Harrislee. Erste Heizungs- und Sanitärinstallationen für die Region.</p>
                                <span class="timeline-badge">Gründung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item animate-on-scroll fade-in-up stagger-2">
                    <div class="timeline-year">2000</div>
                    <div class="timeline-content">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="img-hover-container">
                                    <div class="timeline-image" style="background: linear-gradient(135deg, #40916C 0%, #6C757D 100%); width: 200px; height: 150px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-graduation-cap text-white fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>2. Generation - Ausbildungstradition</h3>
                                <p>Beginn der kontinuierlichen Ausbildung junger Handwerker. Über 40 Auszubildende erfolgreich ausgebildet.</p>
                                <span class="timeline-badge">Ausbildung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item animate-on-scroll fade-in-up stagger-3">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="img-hover-container">
                                    <div class="timeline-image" style="background: linear-gradient(135deg, #D73027 0%, #1B4332 100%); width: 200px; height: 150px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-certificate text-white fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>3. Generation - VDI Zertifizierung</h3>
                                <p>VDI 4645-Zertifizierung als Wärmepumpen-Fachbetrieb. NIBE-Effizienzpartnerschaft für moderne Heiztechnik.</p>
                                <span class="timeline-badge">Innovation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services py-5 animate-on-scroll fade-in-up">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Unsere Kernkompetenzen</h2>
                    <p class="section-subtitle">Von der Planung bis zur Wartung bieten wir das komplette Spektrum der SHK-Technik für Privat- und Gewerbekunden.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="img-hover-container">
                        <img src="https://source.unsplash.com/featured/?heating,system,installation,pipes,technical" 
                             alt="Heizungstechnik und Sanitärinstallation" 
                             class="services-grid-image img-fluid rounded shadow" 
                             loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content stagger-container">
                        <div class="service-item animate-on-scroll fade-in-up stagger-1">
                            <div class="service-icon">
                                <i class="fas fa-fire-flame-curved text-danger"></i>
                            </div>
                            <div class="service-content">
                                <h3>Heizungsinstallation</h3>
                                <p>Gas, Öl, Fernwärme und Wärmepumpen - fachgerecht installiert nach VDI 4645.</p>
                            </div>
                        </div>

                        <div class="service-item animate-on-scroll fade-in-up stagger-2">
                            <div class="service-icon">
                                <i class="fas fa-bath text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h3>Badsanierung</h3>
                                <p>Komplette Beratung und Planung für Ihr neues Bad - vom Konzept bis zur Fertigstellung.</p>
                            </div>
                        </div>

                        <div class="service-item animate-on-scroll fade-in-up stagger-3">
                            <div class="service-icon">
                                <i class="fas fa-wind text-success"></i>
                            </div>
                            <div class="service-content">
                                <h3>Lüftungsanlagen</h3>
                                <p>Moderne Lüftungstechnik für gesundes Raumklima in Wohn- und Gewerbegebäuden.</p>
                            </div>
                        </div>

                        <div class="service-item animate-on-scroll fade-in-up stagger-4">
                            <div class="service-icon">
                                <i class="fas fa-tools text-warning"></i>
                            </div>
                            <div class="service-content">
                                <h3>Wartung & Störungsdienst</h3>
                                <p>Regelmäßige Wartung und schnelle Reparaturen - auch im 24h-Notdienst.</p>
                            </div>
                        </div>

                        <div class="service-item animate-on-scroll fade-in-up stagger-5">
                            <div class="service-icon">
                                <i class="fas fa-wrench text-info"></i>
                            </div>
                            <div class="service-content">
                                <h3>Rohrbruch-Beseitigung</h3>
                                <p>Schnelle Hilfe bei Wasserschäden und Rohrbrüchen - rund um die Uhr erreichbar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5 bg-light animate-on-scroll fade-in-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features-content">
                        <h2 class="section-title">Warum Parzentny SHK?</h2>
                        <p class="section-subtitle mb-4">Drei Generationen Meisterhandwerk, Innungsmitgliedschaft und kontinuierliche Weiterbildung sind die Basis unserer Arbeit.</p>
                        
                        <div class="features-list stagger-container">
                            <div class="feature-item animate-on-scroll fade-in-up stagger-1">
                                <div class="feature-icon">
                                    <i class="fas fa-award text-primary"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Meisterbetrieb seit 1983</h4>
                                    <p>Drei Generationen geballtes Handwerkswissen und Erfahrung.</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll fade-in-up stagger-2">
                                <div class="feature-icon">
                                    <i class="fas fa-certificate text-success"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>VDI 4645-zertifizierter Wärmepumpen-Fachbetrieb</h4>
                                    <p>Einziger zertifizierter Fachbetrieb der Region für Wärmepumpen-Installation.</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll fade-in-up stagger-3">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake text-info"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>NIBE-Effizienzpartner</h4>
                                    <p>Offizielle Partnerschaft für hocheffiziente Wärmepumpen-Technik.</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll fade-in-up stagger-4">
                                <div class="feature-icon">
                                    <i class="fas fa-users text-warning"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Innungsmitglied SHK-Handwerk</h4>
                                    <p>Qualitätsgarantie durch Innungsmitgliedschaft und regelmäßige Fortbildungen.</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll fade-in-up stagger-5">
                                <div class="feature-icon">
                                    <i class="fas fa-graduation-cap text-danger"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>40 Jahre Ausbildungserfahrung</h4>
                                    <p>Kontinuierliche Nachwuchsförderung und Wissensweitergabe an die nächste Generation.</p>
                                    <div class="count-up-container">
                                        <span class="count-up" data-target="40">0</span>+ Auszubildende erfolgreich ausgebildet
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-hover-container animate-on-scroll fade-in-up">
                        <img src="https://source.unsplash.com/featured/?master,craftsman,certificate,quality,tools" 
                             alt="Meisterqualität und Innungsmitgliedschaft" 
                             class="features-hero img-fluid rounded shadow-lg" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats py-4 bg-primary text-white animate-on-scroll fade-in-up">
        <div class="container">
            <div class="row text-center stagger-container">
                <div class="col-md-3 animate-on-scroll fade-in-up stagger-1">
                    <div class="stat-item">
                        <div class="stat-number count-up" data-target="<?php echo $years_experience; ?>">0</div>
                        <div class="stat-label">Jahre Erfahrung</div>
                    </div>
                </div>
                <div class="col-md-3 animate-on-scroll fade-in-up stagger-2">
                    <div class="stat-item">
                        <div class="stat-number count-up" data-target="40">0</div>
                        <div class="stat-label">Auszubildende</div>
                    </div>
                </div>
                <div class="col-md-3 animate-on-scroll fade-in-up stagger-3">
                    <div class="stat-item">
                        <div class="stat-number">24</div>
                        <div class="stat-label">Stunden Notdienst</div>
                    </div>
                </div>
                <div class="col-md-3 animate-on-scroll fade-in-up stagger-4">
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Generationen</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact py-5 animate-on-scroll fade-in-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Direkter Draht zum Meister</h2>
                    <p class="section-subtitle">Erreichen Sie uns zu den Geschäftszeiten oder im Notfall über unsere 24h-Hotline.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="contact-card animate-on-scroll fade-in-up stagger-1">
                        <div class="contact-icon">
                            <i class="fas fa-phone text-primary"></i>
                        </div>
                        <h4>Geschäftszeiten</h4>
                        <p><strong><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></strong></p>
                        <p class="small">Mo-Do: 07:15-12:00 und 13:30-16:00 Uhr<br>Fr: 07:15-12:30 Uhr</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-card emergency animate-on-scroll fade-in-up stagger-2">
                        <div class="contact-icon">
                            <i class="fas fa-exclamation-triangle text-danger pulse"></i>
                        </div>
                        <h4>24h Notdienst</h4>
                        <p><strong><a href="tel:<?php echo $emergency_phone; ?>" class="text-danger"><?php echo $emergency_phone; ?></a></strong></p>
                        <p class="small">Rund um die Uhr erreichbar<br>Direkter Draht zum Meister</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-card animate-on-scroll fade-in-up stagger-3">
                        <div class="contact-icon">
                            <i class="fas fa-envelope text-info"></i>
                        </div>
                        <h4>E-Mail Kontakt</h4>
                        <p><strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></strong></p>
                        <p class="small">Anfragen und Terminvereinbarungen<br>Antwort binnen 24h</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="contact-info animate-on-scroll fade-in-up">
                        <h4>Verwurzelt in Harrislee seit 1983</h4>
                        <p class="mb-3">Am Oxer 26, 24955 Harrislee</p>
                        <p>Drei Gener