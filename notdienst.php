<?php 
$currentPage = 'notdienst'; 
require 'includes/header.php'; 

// Notdienst-spezifische Variablen
$emergency_phone = '0160-97251061';
$emergency_phone_display = '<a href="tel:+4916097251061" class="btn btn-emergency btn-hover" aria-label="Notrufnummer wählen">0160-97251061</a>';
$response_time = 45;
$service_areas = ['Harrislee', 'Flensburg', 'Glücksburg', 'Handewitt', 'Oeversee'];

// Notfall-Checkliste Array
$emergency_checklist = [
    'Rohrbruch' => [
        'Hauptwasserhahn sofort schließen',
        'Strom in betroffenen Bereichen abstellen',
        'Wasser mit Eimern und Handtüchern eindämmen',
        'Wertvolle Gegenstände aus dem Gefahrenbereich bringen',
        'Unseren Notdienst unter 0160-97251061 anrufen'
    ],
    'Heizungsausfall' => [
        'Thermostat prüfen - ist es richtig eingestellt?',
        'Sicherungen kontrollieren',
        'Brennstoffvorrat checken (Öl/Gas)',
        'Heizkörper entlüften falls gluckernde Geräusche',
        'Bei Gasgeruch: Sofort Gaszufuhr stoppen und lüften'
    ],
    'Verstopfte Abflüsse' => [
        'Keine aggressiven Chemikalien verwenden',
        'Mechanische Reinigung mit Pümpel versuchen',
        'Siphon prüfen und ggf. reinigen',
        'Wasser abstellen falls es zurückstaut',
        'Professionelle Rohrreinigung beauftragen'
    ],
    'Wasserschaden' => [
        'Strom in betroffenen Bereichen sofort abstellen',
        'Quelle des Wassers lokalisieren und stoppen',
        'Stehendes Wasser abpumpen oder aufwischen',
        'Durchfeuchtete Möbel und Teppiche entfernen',
        'Dokumentation für Versicherung mit Fotos'
    ]
];
?>

<main class="notdienst-page">
    <!-- Hero Section -->
    <section class="hero emergency-hero animate-on-scroll fade-in-up">
        <div class="hero-bg-container">
            <img src="https://source.unsplash.com/featured/?emergency,24h,service,van,night,plumber,repair" 
                 alt="24h Notdienst Flensburg - Sanitär- und Heizungsnotdienst rund um die Uhr" 
                 class="hero-bg-image" loading="eager">
            <div class="hero-overlay"></div>
            <div class="trust-badge generationen-badge">
                <span>Meisterbetrieb seit 1983 - 3. Generation</span>
            </div>
        </div>
        
        <div class="hero-content container">
            <div class="hero-text-content">
                <h1 class="hero-title">24h Notdienst - Wir sind für Sie da</h1>
                <p class="hero-subtitle">Heizungsausfall, Rohrbruch oder andere SHK-Notfälle? Unser erfahrenes Team ist rund um die Uhr erreichbar und schnell vor Ort.</p>
                
                <div class="emergency-highlights stagger-container">
                    <div class="highlight-item animate-on-scroll fade-in-up stagger-1">
                        <i class="icon-phone"></i>
                        <span>Notfall-Hotline: <a href="tel:<?php echo $emergency_phone; ?>"><?php echo $emergency_phone; ?></a></span>
                    </div>
                    <div class="highlight-item animate-on-scroll fade-in-up stagger-2">
                        <i class="icon-wrench"></i>
                        <span>Schnelle Hilfe bei Rohrbrüchen</span>
                    </div>
                    <div class="highlight-item animate-on-scroll fade-in-up stagger-3">
                        <i class="icon-heating"></i>
                        <span>Heizungs-Störungsdienst</span>
                    </div>
                    <div class="highlight-item animate-on-scroll fade-in-up stagger-4">
                        <i class="icon-tools"></i>
                        <span>Sofort-Reparaturen</span>
                    </div>
                </div>
                
                <div class="hero-cta">
                    <a href="tel:<?php echo $emergency_phone; ?>" class="btn btn-emergency btn-large">
                        <i class="icon-phone"></i>
                        Jetzt anrufen: <?php echo $emergency_phone; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Response Timer -->
    <section class="emergency-response-timer animate-on-scroll fade-in-up">
        <div class="container">
            <div class="response-timer-grid">
                <div class="timer-info">
                    <h2>Durchschnittliche Ankunftszeit</h2>
                    <div class="response-time">
                        <span class="time-number count-up" data-target="<?php echo $response_time; ?>">0</span>
                        <span class="time-unit">Minuten</span>
                    </div>
                    <p class="timer-description">Basierend auf unserem Einsatzgebiet rund um Harrislee und Flensburg erreichen wir Sie in der Regel innerhalb von 45 Minuten.</p>
                    
                    <div class="service-areas">
                        <h3>Unser Einsatzgebiet:</h3>
                        <ul class="areas-list">
                            <?php foreach($service_areas as $index => $area): ?>
                                <li class="animate-on-scroll fade-in-up stagger-<?php echo $index + 1; ?>"><?php echo $area; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="service-area-map">
                    <div class="map-container">
                        <div class="map-placeholder">
                            <div class="map-marker harrislee-marker" title="Parzentny SHK - Harrislee">
                                <i class="icon-location"></i>
                                <span>Harrislee</span>
                            </div>
                            <div class="map-marker flensburg-marker" title="Einsatzgebiet Flensburg">
                                <i class="icon-location"></i>
                                <span>Flensburg</span>
                            </div>
                            <div class="coverage-radius"></div>
                        </div>
                        <div class="map-info">
                            <p><strong>Hauptsitz:</strong> Am Oxer 26, 24955 Harrislee</p>
                            <p><strong>Radius:</strong> 25 km um Harrislee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notfall-Checkliste -->
    <section class="notfall-checkliste animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header text-center">
                <h2>Was tun bis wir da sind?</h2>
                <p class="section-subtitle">Erste-Hilfe-Maßnahmen nach Notfall-Typ sortiert - So minimieren Sie Schäden effektiv.</p>
            </div>
            
            <div class="checklist-accordion">
                <?php foreach($emergency_checklist as $emergency_type => $steps): ?>
                    <div class="accordion-item animate-on-scroll fade-in-up">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3><?php echo $emergency_type; ?></h3>
                            <span class="accordion-toggle">+</span>
                        </div>
                        <div class="accordion-content">
                            <div class="emergency-steps">
                                <?php foreach($steps as $step_index => $step): ?>
                                    <div class="step-item">
                                        <span class="step-number"><?php echo $step_index + 1; ?></span>
                                        <span class="step-text"><?php echo $step; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="emergency-contact">
                                <strong>Danach sofort:</strong> 
                                <a href="tel:<?php echo $emergency_phone; ?>" class="emergency-phone">
                                    <?php echo $emergency_phone; ?> anrufen
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Notdienst Services -->
    <section class="notdienst-services animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Notdienst-Leistungen</h2>
                <p class="section-subtitle">Von der Leckage-Abdichtung bis zur Heizungs-Notversorgung - wir lösen Ihre SHK-Probleme zuverlässig.</p>
            </div>
            
            <div class="services-grid stagger-container">
                <div class="service-card animate-on-scroll fade-in-up stagger-1">
                    <div class="service-icon">
                        <i class="icon-pipe"></i>
                    </div>
                    <h3>Rohrbruch-Beseitigung</h3>
                    <p>Schnelle Lokalisierung und fachmännische Reparatur von Rohrleitungsschäden. Provisorische Abdichtung und dauerhafte Lösung aus einer Hand.</p>
                    <div class="service-features">
                        <span class="feature-tag">Sofort-Abdichtung</span>
                        <span class="feature-tag">Leckage-Ortung</span>
                    </div>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-2">
                    <div class="service-icon">
                        <i class="icon-heating"></i>
                    </div>
                    <h3>Heizungs-Störungsbeseitigung</h3>
                    <p>Diagnose und Reparatur von Heizungsanlagen aller Fabrikate. Von Brennerstörungen bis zu Pumpendefekten - wir sorgen für warme Räume.</p>
                    <div class="service-features">
                        <span class="feature-tag">Alle Fabrikate</span>
                        <span class="feature-tag">Ersatzteillager</span>
                    </div>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-3">
                    <div class="service-icon">
                        <i class="icon-water-drop"></i>
                    </div>
                    <h3>Wasserschäden-Soforthilfe</h3>
                    <p>Professionelle Schadensbegrenzung bei Wasserschäden. Wir stoppen die Quelle, pumpen ab und dokumentieren für Ihre Versicherung.</p>
                    <div class="service-features">
                        <span class="feature-tag">Schadensdoku</span>
                        <span class="feature-tag">Trocknungsservice</span>
                    </div>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-4">
                    <div class="service-icon">
                        <i class="icon-thermometer"></i>
                    </div>
                    <h3>Notversorgung Heizung</h3>
                    <p>Mobile Heizgeräte und provisorische Lösungen, wenn Ihre Heizung ausfällt. Überbrückung bis zur endgültigen Reparatur.</p>
                    <div class="service-features">
                        <span class="feature-tag">Mobile Heizer</span>
                        <span class="feature-tag">Schnell-Reparatur</span>
                    </div>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-5">
                    <div class="service-icon">
                        <i class="icon-search"></i>
                    </div>
                    <h3>Leckage-Ortung und Reparatur</h3>
                    <p>Modernste Ortungstechnik für versteckte Lecks in Wand und Boden. Minimal-invasive Reparaturmethoden schonen Ihre Bausubstanz.</p>
                    <div class="service-features">
                        <span class="feature-tag">Profi-Ortung</span>
                        <span class="feature-tag">Minimal-invasiv</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Warum Parzentny Notdienst -->
    <section class="why-parzentny-emergency animate-on-scroll fade-in-up">
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h2>40 Jahre Erfahrung im Notfall</h2>
                    <p class="lead-text">Als Meisterbetrieb der dritten Generation kennen wir jeden Handgriff. Unsere Monteure sind seit Jahrzehnten in der Region unterwegs und wissen genau, worauf es ankommt.</p>
                    
                    <div class="emergency-stats">
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="24">0</span>
                            <span class="stat-label">Stunden Bereitschaft</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="365">0</span>
                            <span class="stat-label">Tage im Jahr</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number count-up" data-target="45">0</span>
                            <span class="stat-label">Min. Anfahrtszeit</span>
                        </div>
                    </div>
                    
                    <div class="emergency-advantages">
                        <div class="advantage-item">
                            <i class="icon-check"></i>
                            <span>Direkter Draht zum Meister</span>
                        </div>
                        <div class="advantage-item">
                            <i class="icon-check"></i>
                            <span>Vollausgestattete Servicefahrzeuge</span>
                        </div>
                        <div class="advantage-item">
                            <i class="icon-check"></i>
                            <span>Großes Ersatzteillager vor Ort</span>
                        </div>
                        <div class="advantage-item">
                            <i class="icon-check"></i>
                            <span>Faire Festpreise auch nachts</span>
                        </div>
                    </div>
                </div>
                
                <div class="emergency-contact-card">
                    <h3>Notfall? Sofort anrufen!</h3>
                    <div class="emergency-phone-large">
                        <a href="tel:<?php echo $emergency_phone; ?>"><?php echo $emergency_phone; ?></a>
                    </div>
                    <p class="emergency-note">Meister persönlich erreichbar</p>
                    
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="icon-location"></i>
                            <span>Am Oxer 26, 24955 Harrislee</span>
                        </div>
                        <div class="info-item">
                            <i class="icon-mail"></i>
                            <span>info@parzentny-shk.de</span>
                        </div>
                    </div>
                    
                    <div class="trust-badges">
                        <div class="trust-badge">
                            <span>Innungsmitglied</span>
                        </div>
                        <div class="trust-badge">
                            <span>VDI 4645 geprüft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kosteninfo Notdienst -->
    <section class="notdienst-preise animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header text-center">
                <h2>Transparente Notdienst-Preise</h2>
                <p class="section-subtitle">Keine versteckten Kosten - faire Festpreise rund um die Uhr.</p>
            </div>
            
            <div class="pricing-info">
                <div class="price-grid">
                    <div class="price-card">
                        <h3>Werktags (7-18 Uhr)</h3>
                        <div class="price-details">
                            <p><strong>Anfahrt:</strong> 35,- €</p>
                            <p><strong>Arbeitsstunde:</strong> 65,- €</p>
                            <p><strong>Material:</strong> nach Aufwand</p>
                        </div>
                    </div>
                    
                    <div class="price-card">
                        <h3>Abends & Wochenende</h3>
                        <div class="price-details">
                            <p><strong>Anfahrt:</strong> 45,- €</p>
                            <p><strong>Arbeitsstunde:</strong> 85,- €</p>
                            <p><strong>Material:</strong> nach Aufwand</p>
                        </div>
                    </div>
                    
                    <div class="price-card featured">
                        <h3>Nachts & Feiertage</h3>
                        <div class="price-details">
                            <p><strong>Anfahrt:</strong> 55,- €</p>
                            <p><strong>Arbeitsstunde:</strong> 95,- €</p>
                            <p><strong>Material:</strong> nach Aufwand</p>
                        </div>
                        <div class="price-note">
                            <small>Alle Preise inkl. MwSt.</small>
                        </div>
                    </div>
                </div>
                
                <div class="pricing-benefits">
                    <h3>Ihre Vorteile:</h3>
                    <ul class="benefits-list">
                        <li><i class="icon-check"></i> Kostenvoranschlag vor Arbeitsbeginn</li>
                        <li><i class="icon-check"></i> Keine Anfahrt bei Nichtreparatur</li>
                        <li><i class="icon-check"></i> Versicherungsabrechnung möglich</li>
                        <li><i class="icon-check"></i> Gewährleistung auch im Notdienst</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Accordion Funktionalität
function toggleAccordion(header) {
    const item = header.parentElement;
    const content = header.nextElementSibling;
    const toggle = header.querySelector('.accordion-toggle');
    
    if (item.classList.contains('active')) {
        item.classList.remove('active');
        content.style.maxHeight = null;
        toggle.textContent = '+';
    } else {
        // Schließe alle anderen Accordions
        document.querySelectorAll('.accordion-item.active').forEach(activeItem => {
            activeItem.classList.remove('active');
            activeItem.querySelector('.accordion-content').style.maxHeight = null;
            activeItem.querySelector('.accordion-toggle').textContent = '+';
        });
        
        // Öffne das aktuelle
        item.classList.add('active');
        content.style.maxHeight = content.scrollHeight + 'px';
        toggle.textContent = '-';
    }
}

// Response Time Animation
document.addEventListener('DOMContentLoaded', function() {
    // Live-Timer Effekt
    const timeNumber = document.querySelector('.response-time .time-number');
    if (timeNumber) {
        let currentTime = <?php echo $response_time; ?>;
        setInterval(() => {
            // Simuliere leichte Schwankungen in der Ankunftszeit
            const variation = Math.floor(Math.random() * 11) - 5; // -5 bis +5
            const newTime = Math.max(30, Math.min(60, currentTime + variation));
            timeNumber.textContent = newTime;
            currentTime = newTime;
        }, 10000); // Alle 10 Sekunden
    }
});
</script>

<?php require 'includes/footer.php'; ?>