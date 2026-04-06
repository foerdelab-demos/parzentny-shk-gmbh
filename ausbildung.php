<?php
$currentPage = 'ausbildung';

// Formulardaten verarbeiten
if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $schulabschluss = htmlspecialchars($_POST['schulabschluss'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if (!empty($name) && !empty($email) && !empty($phone) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "info@parzentny-shk.de";
        $subject = "Ausbildungsanfrage von $name";
        $body = "Name: $name\nE-Mail: $email\nTelefon: $phone\nSchulabschluss: $schulabschluss\n\nNachricht:\n$message";
        $headers = "From: $email\r\nReply-To: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            $success = "Ihre Ausbildungsanfrage wurde erfolgreich versendet. Wir melden uns zeitnah bei Ihnen.";
        } else {
            $error = "Fehler beim Versenden. Bitte rufen Sie uns direkt an: 0461-47753";
        }
    } else {
        $error = "Bitte füllen Sie alle Pflichtfelder aus.";
    }
}

// Daten definieren
$ausbildungsJahre = 40;
$erfolgreiche_abschluesse = 127;
$uebernahmequote = 89;
$meisterSeit = 1983;
$aktuelle_azubis = 6;

require 'includes/header.php';
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section section-padding bg-gradient-primary text-white">
        <div class="container">
            <div class="hero-content animate-on-scroll fade-in-up">
                <div class="hero-badge">
                    <span class="badge bg-white text-primary fw-bold">Meisterbetrieb seit 1983 - 3. Generation</span>
                </div>
                <h1 class="hero-title display-4 fw-bold mb-4">Vier Jahrzehnte Fachkräfte-Ausbildung im SHK-Handwerk</h1>
                <p class="hero-subtitle lead mb-5">Seit 1983 bilden wir SHK-Fachkräfte in Harrislee aus. 127 erfolgreiche Abschlüsse, 89% Übernahmequote. Als Meisterbetrieb in dritter Generation vermitteln wir solides Handwerk und moderne Technik weiter.</p>
                <div class="hero-cta">
                    <a href="#bewerbung" class="btn btn-white btn-lg me-3">Jetzt bewerben</a>
                    <a href="tel:0461-47753" class="btn btn-outline-white btn-lg">
                        <i class="fas fa-phone me-2"></i>0461-47753
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="layout-wrapper">
        <!-- Main Content -->
        <div class="main-section">
            <!-- Ausbildungs-Timeline Section -->
            <section class="timeline-section section-padding animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h2 class="section-title">40 Jahre Ausbildungserfolg in Zahlen</h2>
                        <p class="section-subtitle">Von der ersten Generation bis heute - unsere Ausbildungsbilanz spricht für sich.</p>
                    </div>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-3 animate-on-scroll fade-in-up stagger-1">
                            <div class="stats-card text-center p-4">
                                <div class="stats-number display-3 fw-bold text-primary count-up" data-target="40">0</div>
                                <div class="stats-label text-muted">Jahre Ausbildung</div>
                            </div>
                        </div>
                        <div class="col-md-3 animate-on-scroll fade-in-up stagger-2">
                            <div class="stats-card text-center p-4">
                                <div class="stats-number display-3 fw-bold text-primary count-up" data-target="127">0</div>
                                <div class="stats-label text-muted">Erfolgreiche Abschlüsse</div>
                            </div>
                        </div>
                        <div class="col-md-3 animate-on-scroll fade-in-up stagger-3">
                            <div class="stats-card text-center p-4">
                                <div class="stats-number display-3 fw-bold text-primary count-up" data-target="89">0</div>
                                <div class="stats-label text-muted">% Übernahmequote</div>
                            </div>
                        </div>
                        <div class="col-md-3 animate-on-scroll fade-in-up stagger-4">
                            <div class="stats-card text-center p-4">
                                <div class="stats-number display-3 fw-bold text-primary count-up" data-target="6">0</div>
                                <div class="stats-label text-muted">Aktuelle Azubis</div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="timeline-item animate-on-scroll fade-in-up stagger-1">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content-card">
                                <h4>1983 - Der Anfang</h4>
                                <p>Georg Parzentny gründet den Betrieb und beginnt mit der ersten Ausbildung zum Anlagenmechaniker.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate-on-scroll fade-in-up stagger-2">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content-card">
                                <h4>1995 - Generationswechsel</h4>
                                <p>Die zweite Generation übernimmt und erweitert die Ausbildungskapazitäten auf drei Azubis pro Jahr.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate-on-scroll fade-in-up stagger-3">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content-card">
                                <h4>2010 - Moderne Technik</h4>
                                <p>Integration von Wärmepumpen-Technik in die Ausbildung. Erste NIBE-Schulungen für Azubis.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate-on-scroll fade-in-up stagger-4">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content-card">
                                <h4>2023 - Heute</h4>
                                <p>Dritte Generation führt die Tradition fort. Modernste Ausbildungsmethoden mit bewährten Handwerkswerten.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Was wir bieten Section -->
            <section class="features-section section-padding bg-light animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h2 class="section-title">Was wir bieten</h2>
                        <p class="section-subtitle">Eine fundierte Ausbildung in einem traditionellen Handwerksbetrieb mit modernen Technologien und direktem Meister-Kontakt.</p>
                    </div>

                    <div class="row g-4 stagger-container">
                        <div class="col-lg-6 animate-on-scroll fade-in-up stagger-1">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary text-white">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Ausbildung zum Anlagenmechaniker SHK</h4>
                                    <p>Vollständige 3,5-jährige Ausbildung in allen Bereichen der Sanitär-, Heizungs- und Klimatechnik. Von der Grundausbildung bis zur Spezialisierung auf moderne Heizsysteme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 animate-on-scroll fade-in-up stagger-2">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary text-white">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Direkte Betreuung durch Meister</h4>
                                    <p>Persönliche Ausbildung durch erfahrene Meister mit über 40 Jahren Berufserfahrung. Kleine Teams ermöglichen intensive Betreuung und schnelle Lernfortschritte.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 animate-on-scroll fade-in-up stagger-3">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary text-white">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Moderne Wärmepumpen-Technik</h4>
                                    <p>Als VDI 4645-zertifizierter Fachbetrieb und NIBE-Effizienzpartner lernen Sie die neueste Wärmepumpen-Technologie von Grund auf kennen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 animate-on-scroll fade-in-up stagger-4">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary text-white">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Vielseitige Einsatzgebiete</h4>
                                    <p>Von der Heizungsmodernisierung über Badsanierung bis hin zu Notdienst-Einsätzen - Sie lernen das gesamte Spektrum des SHK-Handwerks kennen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Azubi Success Stories Section -->
            <section class="success-stories-section section-padding animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header text-center mb-5">
                        <h2 class="section-title">Unsere Azubis - Wo sind sie heute?</h2>
                        <p class="section-subtitle">Erfolgsgeschichten aus 40 Jahren Ausbildungspraxis</p>
                    </div>

                    <div class="row g-4 stagger-container">
                        <div class="col-lg-4 animate-on-scroll fade-in-up stagger-1">
                            <div class="story-card">
                                <div class="story-profile">
                                    <div class="profile-avatar bg-gradient-primary">MH</div>
                                    <div class="profile-info">
                                        <h5>Marcus Hinz</h5>
                                        <span class="text-muted">Ausbildung 2015-2018</span>
                                    </div>
                                </div>
                                <div class="story-content">
                                    <p>"Nach der Ausbildung bei Parzentny bin ich direkt übernommen worden. Heute leite ich als Geselle ein eigenes Montage-Team und bilde selbst Azubis aus."</p>
                                </div>
                                <div class="story-timeline">
                                    <div class="timeline-step active">
                                        <span>2018</span>
                                        <small>Übernahme</small>
                                    </div>
                                    <div class="timeline-step active">
                                        <span>2021</span>
                                        <small>Teamleitung</small>
                                    </div>
                                    <div class="timeline-step active">
                                        <span>2023</span>
                                        <small>Ausbilder</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 animate-on-scroll fade-in-up stagger-2">
                            <div class="story-card">
                                <div class="story-profile">
                                    <div class="profile-avatar bg-gradient-secondary">SK</div>
                                    <div class="profile-info">
                                        <h5>Sarah Krüger</h5>
                                        <span class="text-muted">Ausbildung 2017-2020</span>
                                    </div>
                                </div>
                                <div class="story-content">
                                    <p>"Die fundierte Ausbildung hat mir den Weg zum Meister geebnet. Seit 2022 führe ich meinen eigenen Betrieb in Kiel und arbeite noch immer mit Parzentny zusammen."</p>
                                </div>
                                <div class="story-timeline">
                                    <div class="timeline-step active">
                                        <span>2020</span>
                                        <small>Gesellenprüfung</small>
                                    </div>
                                    <div class="timeline-step active">
                                        <span>2021</span>
                                        <small>Meisterschule</small>
                                    </div>
                                    <div class="timeline-step active">
                                        <span>2022</span>
                                        <small>Selbstständig</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 animate-on-scroll fade-in-up stagger-3">
                            <div class="story-card">
                                <div class="story-profile">
                                    <div class="profile-avatar bg-gradient-accent">TM</div>
                                    <div class="profile-info">
                                        <h5>Tim Möller</h5>
                                        <span class="text-muted">Ausbildung 2019-2022</span>
                                    </div>
                                </div>
                                <div class="story-content">
                                    <p>"Die Spezialisierung auf Wärmepumpen bei Parzentny war goldrichtig. Heute bin ich als Wärmepumpen-Spezialist bei einem großen Heizungsbauer sehr gefragt."</p>
                                </div>
                                <div class="story-timeline">
                                    <div class="timeline-step active">
                                        <span>2022</span>
                                        <small>Gesellenprüfung</small>
                                    </div>
                                    <div class="timeline-step active">
                                        <span>2023</span>
                                        <small>Spezialist</small>
                                    </div>
                                    <div class="timeline-step">
                                        <span>2024</span>
                                        <small>Techniker</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bewerbungsformular Section -->
            <section id="bewerbung" class="application-section section-padding bg-light animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-header text-center mb-5">
                                <h2 class="section-title">Bewerbung für Ausbildungsplatz</h2>
                                <p class="section-subtitle">Starten Sie Ihre Karriere im SHK-Handwerk. Wir bilden aus für September 2024.</p>
                            </div>

                            <?php if (isset($success)): ?>
                                <div class="alert alert-success"><?php echo $success; ?></div>
                            <?php endif; ?>
                            
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif; ?>

                            <form method="POST" class="application-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Vor- und Nachname *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-Mail-Adresse *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Telefonnummer *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="schulabschluss" class="form-label">Schulabschluss</label>
                                        <select class="form-control" id="schulabschluss" name="schulabschluss">
                                            <option value="">Bitte wählen</option>
                                            <option value="hauptschule">Hauptschulabschluss</option>
                                            <option value="realschule">Realschulabschluss</option>
                                            <option value="abitur">Abitur</option>
                                            <option value="studium">Studium (abgebrochen/beendet)</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Warum möchten Sie eine Ausbildung bei uns machen?</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Erzählen Sie uns von Ihren Interessen und Zielen..."></textarea>
                                    </div>
                                </div>
                                <div class="form-actions mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Bewerbung absenden
                                    </button>
                                    <div class="form-note mt-3">
                                        <small class="text-muted">* Pflichtfelder. Ihre Daten werden vertraulich behandelt.</small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Kontakt Info Section -->
            <section class="contact-info-section section-padding animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="contact-content">
                                <h3>Fragen zur Ausbildung?</h3>
                                <p>Sprechen Sie direkt mit unserem Ausbildungsmeister. Wir beantworten alle Fragen rund um die Ausbildung zum Anlagenmechaniker SHK und geben Ihnen gerne Einblicke in unseren Ausbildungsalltag.</p>
                                <div class="contact-methods">
                                    <div class="contact-method">
                                        <i class="fas fa-phone text-primary"></i>
                                        <div>
                                            <strong>Telefon:</strong>
                                            <a href="tel:0461-47753">0461-47753</a>
                                        </div>
                                    </div>
                                    <div class="contact-method">
                                        <i class="fas fa-envelope text-primary"></i>
                                        <div>
                                            <strong>E-Mail:</strong>
                                            <a href="mailto:info@parzentny-shk.de">info@parzentny-shk.de</a>
                                        </div>
                                    </div>
                                    <div class="contact-method">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                        <div>
                                            <strong>Adresse:</strong>
                                            Am Oxer 26, 24955 Harrislee
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-card bg-primary text-white">
                                <h4>Ausbildungsstart 2024</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check me-2"></i>Bewerbungsfrist: Juli 2024</li>
                                    <li><i class="fas fa-check me-2"></i>Ausbildungsbeginn: September 2024</li>
                                    <li><i class="fas fa-check me-2"></i>Plätze verfügbar: 2</li>
                                    <li><i class="fas fa-check me-2"></i>Dauer: 3,5 Jahre</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar -->