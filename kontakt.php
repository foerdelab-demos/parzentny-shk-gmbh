<?php 
$currentPage = 'kontakt';

// Form handling
$form_success = false;
$form_errors = [];

if ($_POST) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name)) $form_errors[] = 'Bitte geben Sie Ihren Namen an';
    if (empty($email)) $form_errors[] = 'E-Mail ist erforderlich';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $form_errors[] = 'Ungültige E-Mail-Adresse';
    if (empty($message)) $form_errors[] = 'Nachricht ist erforderlich';
    if (empty($subject)) $form_errors[] = 'Betreff ist erforderlich';
    
    if (empty($form_errors)) {
        $to = "info@parzentny-shk.de";
        $email_subject = "Kontaktanfrage: " . $subject;
        $email_body = "Name: $name\nE-Mail: $email\nTelefon: $phone\nBetreff: $subject\n\nNachricht:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        
        if (mail($to, $email_subject, $email_body, $headers)) {
            $form_success = true;
        }
    }
}

require 'includes/header.php'; 
?>

<main class="contact-page">
    <section class="hero-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Ihr Ansprechpartner für SHK-Arbeiten in Harrislee</h1>
                <p class="hero-subtitle">40 Jahre SHK-Erfahrung in Harrislee. Rufen Sie an unter 0461-47753 oder kommen Sie in unsere Werkstatt am Oxer 26.</p>
                <div class="trust-badge">
                    <span class="badge-text">Meisterbetrieb seit 1983 - 3. Generation</span>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-overview animate-on-scroll fade-in-up">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-main">
                    <div class="contact-intro">
                        <h2>Parzentny SHK - Ihr Meisterbetrieb in Harrislee seit 1983</h2>
                        <p>Erreichen Sie uns telefonisch zu den Geschäftszeiten oder nutzen Sie unser Kontaktformular für Ihre Anfrage. Als Innungsbetrieb mit 40-jähriger Tradition stehen wir für zuverlässige Beratung und fachgerechte Ausführung.</p>
                    </div>

                    <div class="contact-methods stagger-container">
                        <div class="contact-method stagger-1">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-content">
                                <h3>Telefon</h3>
                                <p><a href="tel:0461-47753">0461-47753</a></p>
                                <span class="method-note">Bürozeiten Mo-Fr</span>
                            </div>
                        </div>

                        <div class="contact-method stagger-2">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-content">
                                <h3>E-Mail</h3>
                                <p><a href="mailto:info@parzentny-shk.de">info@parzentny-shk.de</a></p>
                                <span class="method-note">Antwort binnen 24h</span>
                            </div>
                        </div>

                        <div class="contact-method stagger-3">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-content">
                                <h3>Werkstatt</h3>
                                <p>Am Oxer 26<br>24955 Harrislee</p>
                                <span class="method-note">Parkplätze vorhanden</span>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="contact-sidebar">
                    <div class="sidebar-widget trust-widget">
                        <h4>Verwurzelt in Harrislee seit 1983</h4>
                        <ul class="trust-list">
                            <li><i class="fas fa-award"></i> VDI 4645-zertifizierter Betrieb</li>
                            <li><i class="fas fa-graduation-cap"></i> 40 Jahre Ausbildungstradition</li>
                            <li><i class="fas fa-handshake"></i> Innungsmitglied SHK-Handwerk</li>
                            <li><i class="fas fa-clock"></i> 24h Notdienst verfügbar</li>
                        </ul>
                    </div>

                    <div class="sidebar-widget direkter-draht-widget">
                        <div class="meister-contact">
                            <div class="meister-photo">
                                <div class="img-hover-container">
                                    <div class="placeholder-img gradient-bg-primary"></div>
                                </div>
                            </div>
                            <div class="meister-info">
                                <h4>Sprechen Sie direkt mit dem Chef</h4>
                                <p class="meister-name">Meister Parzentny</p>
                                <a href="tel:0461-47753" class="btn btn-primary">
                                    <i class="fas fa-phone"></i> Jetzt anrufen
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="business-hours animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hours-content">
                <h2>Bürozeiten und Erreichbarkeit</h2>
                <p>Unsere Bürozeiten für Beratungstermine und Anfragen. Im Notfall erreichen Sie uns rund um die Uhr.</p>
                
                <div class="hours-grid">
                    <div class="hours-regular">
                        <h3><i class="fas fa-business-time"></i> Reguläre Bürozeiten</h3>
                        <ul class="hours-list">
                            <li><strong>Mo-Do:</strong> 07:15-12:00 und 13:30-16:00 Uhr</li>
                            <li><strong>Fr:</strong> 07:15-12:30 Uhr</li>
                            <li><strong>Sa/So:</strong> Nach Vereinbarung</li>
                        </ul>
                    </div>
                    
                    <div class="hours-emergency">
                        <h3><i class="fas fa-exclamation-triangle"></i> 24h-Notdienst</h3>
                        <p class="emergency-number">
                            <a href="tel:0160-97251061">0160-97251061</a>
                        </p>
                        <p class="emergency-note">Bei Heizungsausfall, Rohrbruch oder anderen SHK-Notfällen erreichen Sie unseren Meister-Notdienst rund um die Uhr.</p>
                        <a href="notdienst.php" class="btn btn-outline">Mehr zum Notdienst</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h2>Ihre Anfrage an uns</h2>
                    <p>Nutzen Sie unser Kontaktformular für detaillierte Anfragen zu Heizung, Sanitär oder Klima. Wir melden uns zeitnah bei Ihnen zurück.</p>
                </div>

                <?php if ($form_success): ?>
                    <div class="alert alert-success">
                        <h3>Nachricht gesendet</h3>
                        <p>Vielen Dank für Ihre Anfrage. Wir melden uns zeitnah bei Ihnen zurück.</p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($form_errors)): ?>
                    <div class="alert alert-error">
                        <h3>Fehler beim Senden</h3>
                        <ul>
                            <?php foreach ($form_errors as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form class="contact-form" method="POST" action="">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="email">E-Mail *</label>
                            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="subject">Betreff</label>
                            <select id="subject" name="subject">
                                <option value="">Bitte wählen</option>
                                <option value="Wärmepumpe">Wärmepumpe / Heizung</option>
                                <option value="Sanitär">Sanitär / Bad</option>
                                <option value="Klima">Klima / Lüftung</option>
                                <option value="Notdienst">Notfall</option>
                                <option value="Wartung">Wartung / Service</option>
                                <option value="Ausbildung">Ausbildung</option>
                                <option value="Sonstiges">Sonstiges</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="message">Ihre Nachricht *</label>
                            <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Nachricht senden
                        </button>
                        <p class="form-note">* Pflichtfelder</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="location-section animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Unser Standort in Harrislee</h2>
            <p>Unser Betrieb liegt verkehrsgünstig in Harrislee, direkt an der Grenze zu Flensburg. Gute Erreichbarkeit und ausreichend Parkplätze sind selbstverständlich.</p>
            
            <div class="location-grid">
                <div class="location-info">
                    <div class="address-card">
                        <h3><i class="fas fa-map-marker-alt"></i> Betriebsadresse</h3>
                        <address>
                            Parzentny SHK GmbH<br>
                            Am Oxer 26<br>
                            24955 Harrislee
                        </address>
                        
                        <div class="location-features">
                            <ul>
                                <li><i class="fas fa-parking"></i> Parkplätze vorhanden</li>
                                <li><i class="fas fa-route"></i> Nähe Flensburg</li>
                                <li><i class="fas fa-road"></i> Gute Erreichbarkeit</li>
                                <li><i class="fas fa-warehouse"></i> Große Werkstatt</li>
                            </ul>
                        </div>
                    </div>

                    <div class="anfahrt-kalkulator">
                        <h3><i class="fas fa-clock"></i> Anfahrtszeit berechnen</h3>
                        <p>Unser Einsatzgebiet umfasst Harrislee, Flensburg und das angrenzende Umland. Die typischen Anfahrtszeiten:</p>
                        <ul class="travel-times">
                            <li><strong>Flensburg Zentrum:</strong> 5-10 Min</li>
                            <li><strong>Glücksburg:</strong> 15-20 Min</li>
                            <li><strong>Handewitt:</strong> 10-15 Min</li>
                            <li><strong>Tastrup:</strong> 8-12 Min</li>
                        </ul>
                    </div>
                </div>
                
                <div class="location-map">
                    <div class="map-placeholder gradient-bg-secondary">
                        <div class="map-overlay">
                            <h4>Standort Harrislee</h4>
                            <p>Am Oxer 26, 24955 Harrislee</p>
                            <a href="https://maps.google.com/maps?q=Am+Oxer+26,+24955+Harrislee" target="_blank" class="btn btn-outline btn-sm">
                                <i class="fas fa-external-link-alt"></i> In Google Maps öffnen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-cta animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Bereit für Ihr SHK-Projekt?</h2>
                <p>Ob Neubau, Sanierung oder Reparatur – unser Meisterteam steht bereit. Vereinbaren Sie einen Beratungstermin oder rufen Sie bei Notfällen unseren 24h-Service.</p>
                
                <div class="cta-actions">
                    <a href="tel:0461-47753" class="btn btn-primary">
                        <i class="fas fa-phone"></i> 0461-47753
                    </a>
                    <a href="notdienst.php" class="btn btn-outline">
                        <i class="fas fa-exclamation-triangle"></i> 24h-Notdienst
                    </a>
                    <a href="leistungen.php" class="btn btn-text">
                        <i class="fas fa-arrow-right"></i> Alle Leistungen
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="sticky-bottom-bar">
    <div class="container">
        <div class="bottom-bar-content">
            <span class="bar-text">24h Notdienst - Meister erreichbar</span>
            <a href="tel:0160-97251061" class="bar-phone">
                <i class="fas fa-phone"></i> 0160-97251061
            </a>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>