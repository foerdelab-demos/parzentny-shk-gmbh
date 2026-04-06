<?php 
$currentPage = 'leistungen'; 
require 'includes/header.php'; 

// Service-Daten
$services = [
    'heiztechnik' => [
        'title' => 'Heiztechnik',
        'description' => 'Gas-, Öl- und Brennwerttechnik, Wärmepumpen, Fernwärme und Lüftung/Klimatechnik. Von der Beratung über die Planung bis zur Wartung.',
        'items' => [
            // Strukturierte Liste mit aria-labels
            'Gas-/Öl-Brennwerttechnik',
            'Wärmepumpen',
            'Fernwärme',
            'Lüftung/Klimatechnik',
            'Heizungsinstallation',
            'Wartung und Störungsdienst'
        ],
        'cta' => 'Heizung modernisieren', 'cta_class' => 'btn btn-primary btn-hover'
        'link' => 'waermepumpen.php'
    ],
    'sanitaer' => [
        'title' => 'Sanitärtechnik',
        'description' => 'Arbeiten im Bereich der Be- und Entwässerung, komplette Badsanierungen mit individueller Planung und Koordination aller Gewerke.',
        'items' => [
            // Strukturierte Liste mit aria-labels
            'Badsanierung komplett',
            'Be- und Entwässerung',
            'Sanitärinstallation',
            'Rohrbruch-Reparatur',
            'Beratung und Planung',
            'Gewerke-Koordination'
        ],
        'cta' => 'Bad sanieren lassen',
        'link' => 'kontakt.php'
    ],
    'neubau' => [
        'title' => 'Planung & Neubau',
        'description' => 'Neubau von Ein- und Mehrfamilienhäusern, Umbau und Sanierung in Bestandsgebäuden mit individueller Beratung.',
        'items' => [
            // Strukturierte Liste mit aria-labels
            'Neubau Ein-/Mehrfamilienhäuser',
            'Umbau und Sanierung',
            'Individuelle Planung',
            'Bestandsgebäude-Modernisierung'
        ],
        'cta' => 'Neubau planen',
        'link' => 'kontakt.php'
    ]
];

$prozessSchritte = [
    ['icon' => 'fas fa-comments', 'title' => 'Beratung', 'description' => 'Kostenlose Vor-Ort-Beratung durch den Meister'],
    ['icon' => 'fas fa-drafting-compass', 'title' => 'Planung', 'description' => 'Technische Planung und Auslegung nach VDI-Standard'],
    ['icon' => 'fas fa-calculator', 'title' => 'Angebot', 'description' => 'Transparentes Festpreisangebot ohne versteckte Kosten'],
    ['icon' => 'fas fa-tools', 'title' => 'Ausführung', 'description' => 'Fachgerechte Installation durch Meisterbetrieb'],
    ['icon' => 'fas fa-wrench', 'title' => 'Wartung', 'description' => 'Regelmäßige Wartung und 24h-Notdienst']
];

$vorherNachherBilder = [
    ['vorher' => 'https://source.unsplash.com/600x400/?old,bathroom,renovation', 'nachher' => 'https://source.unsplash.com/600x400/?modern,bathroom,luxury', 'titel' => 'Komplettsanierung Bad Harrislee'],
    ['vorher' => 'https://source.unsplash.com/600x400/?old,boiler,heating', 'nachher' => 'https://source.unsplash.com/600x400/?modern,heat,pump', 'titel' => 'Heizungsmodernisierung Flensburg'],
    ['vorher' => 'https://source.unsplash.com/600x400/?old,pipes,plumbing', 'nachher' => 'https://source.unsplash.com/600x400/?new,pipes,installation', 'titel' => 'Rohrsanierung Glücksburg']
];
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section animate-on-scroll fade-in-up">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="trust-badge">Meisterbetrieb seit 1983 - 3. Generation</span>
            </div>
            <h1 class="hero-title">SHK-Leistungen vom Meisterbetrieb</h1>
            <p class="hero-subtitle">Heiztechnik, Sanitär und Planung aus einer Hand. Drei Generationen Handwerksqualität für Privat- und Gewerbekunden in Harrislee und Umgebung.</p>
            <div class="hero-cta">
                <a href="tel:0461-47753" class="btn-primary">
                    <i class="fas fa-phone"></i>
                    Jetzt beraten lassen: 0461-47753
                </a>
            </div>
        </div>
        <div class="hero-trust-bar">
            <div class="trust-item">
                <i class="fas fa-certificate"></i>
                <span>VDI 4645 geprüftes Unternehmen</span>
            </div>
            <div class="trust-item">
                <i class="fas fa-users"></i>
                <span>40 Jahre Ausbildungstradition</span>
            </div>
            <div class="trust-item">
                <i class="fas fa-clock"></i>
                <span>24h Notdienst - Meister erreichbar</span>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Unsere Fachbereiche</h2>
                <p>Vom Rohbruch bis zur kompletten Heizungsmodernisierung – wir sind Ihr Ansprechpartner für alle SHK-Arbeiten.</p>
            </div>

            <div class="services-grid stagger-container">
                <?php $delay = 1; foreach($services as $key => $service): ?>
                <article class="service-card animate-on-scroll fade-in-up stagger-<?php echo $delay; ?>">
                    <div class="service-image">
                        <img src="https://source.unsplash.com/featured/?<?php echo $key === 'heiztechnik' ? 'heat,pump,installation,modern,heating,boiler' : ($key === 'sanitaer' ? 'bathroom,plumbing,pipes,installation,sanitary' : 'construction,planning,blueprint,building,technical'); ?>" 
                             alt="<?php echo $service['title']; ?> Harrislee - <?php echo $service['description']; ?>" 
                             class="service-detail-image" loading="<?php echo $delay === 1 ? 'eager' : 'lazy'; ?>">
                    </div>
                    <div class="service-content">
                        <h3><?php echo $service['title']; ?></h3>
                        <?php if($key === 'heiztechnik'): ?>
                        <div class="vdi-badge">
                            <i class="fas fa-award"></i>
                            <span>VDI 4645 zertifiziert</span>
                        </div>
                        <?php endif; ?>
                        <p><?php echo $service['description']; ?></p>
                        <ul class="service-features">
                            <?php foreach($service['items'] as $item): ?>
                            <li><i class="fas fa-check"></i> <?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="service-cta">
                            <a href="<?php echo $service['link']; ?>" class="btn-secondary"><?php echo $service['cta']; ?></a>
                            <a href="tel:0461-47753" class="btn-outline">Beratung: 0461-47753</a>
                        </div>
                    </div>
                </article>
                <?php $delay++; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Vorher-Nachher Slider -->
    <section class="before-after-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Unsere Referenzen</h2>
                <p>40 Jahre Meisterhandwerk sprechen für sich. Sehen Sie selbst, wie wir aus alt neu machen.</p>
            </div>

            <div class="before-after-slider">
                <?php foreach($vorherNachherBilder as $index => $projekt): ?>
                <div class="before-after-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <h3><?php echo $projekt['titel']; ?></h3>
                    <div class="comparison-container">
                        <div class="before-after-wrapper">
                            <div class="before-image">
                                <img src="<?php echo $projekt['vorher']; ?>" alt="Vorher - <?php echo $projekt['titel']; ?>" loading="lazy">
                                <span class="label">Vorher</span>
                            </div>
                            <div class="after-image">
                                <img src="<?php echo $projekt['nachher']; ?>" alt="Nachher - <?php echo $projekt['titel']; ?>" loading="lazy">
                                <span class="label">Nachher</span>
                            </div>
                            <div class="slider-handle">
                                <div class="slider-line"></div>
                                <div class="slider-button">
                                    <i class="fas fa-arrows-alt-h"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="slider-navigation">
                <?php foreach($vorherNachherBilder as $index => $projekt): ?>
                <button class="nav-dot <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Prozess Timeline -->
    <section class="process-timeline animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>So arbeiten wir</h2>
                <p>Unser bewährter 5-Schritte-Prozess garantiert Ihnen Transparenz und Qualität vom ersten Kontakt bis zur Wartung.</p>
            </div>

            <div class="timeline-container">
                <?php foreach($prozessSchritte as $index => $schritt): ?>
                <div class="timeline-step animate-on-scroll fade-in-up stagger-<?php echo $index + 1; ?>">
                    <div class="step-number"><?php echo $index + 1; ?></div>
                    <div class="step-icon">
                        <i class="<?php echo $schritt['icon']; ?>"></i>
                    </div>
                    <div class="step-content">
                        <h3><?php echo $schritt['title']; ?></h3>
                        <p><?php echo $schritt['description']; ?></p>
                    </div>
                </div>
                <?php if($index < count($prozessSchritte) - 1): ?>
                <div class="timeline-connector"></div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Qualifikationen & Zertifikate -->
    <section class="qualifications animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Qualifikationen & Partnerschaften</h2>
                <p>Meisterhandwerk mit anerkannten Zertifizierungen und langjährigen Partnerschaften.</p>
            </div>

            <div class="qualifications-grid">
                <div class="qualification-item animate-on-scroll fade-in-up stagger-1">
                    <div class="qualification-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>VDI 4645 zertifiziert</h3>
                    <p>Einziger VDI 4645-zertifizierter Wärmepumpen-Fachbetrieb der Region. Garantiert fachgerechte Planung und Installation nach höchsten Standards.</p>
                </div>

                <div class="qualification-item animate-on-scroll fade-in-up stagger-2">
                    <div class="qualification-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>NIBE-Effizienzpartner</h3>
                    <p>Offizieller Effizienzpartner für moderne Wärmepumpentechnik. Spezialisierung auf energieeffiziente Heizsysteme.</p>
                </div>

                <div class="qualification-item animate-on-scroll fade-in-up stagger-3">
                    <div class="qualification-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Innungsmitglied</h3>
                    <p>Mitglied der SHK-Innung. Regelmäßige Weiterbildungen und Qualitätskontrollen garantieren Ihnen Handwerksqualität.</p>
                </div>

                <div class="qualification-item animate-on-scroll fade-in-up stagger-4">
                    <div class="qualification-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Ausbildungsbetrieb</h3>
                    <p>40 Jahre ununterbrochene Ausbildungstradition. Wir geben unser Wissen an die nächste Generation weiter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Notdienst Banner -->
    <section class="emergency-banner animate-on-scroll fade-in-up">
        <div class="container">
            <div class="emergency-content">
                <div class="emergency-icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="emergency-text">
                    <h3>24h Notdienst verfügbar</h3>
                    <p>Rohrbruch, Heizungsausfall oder andere SHK-Notfälle? Unser Meister ist rund um die Uhr erreichbar.</p>
                </div>
                <div class="emergency-contact">
                    <a href="tel:0160-97251061" class="btn-emergency">
                        <i class="fas fa-phone"></i>
                        Notdienst: 0160-97251061
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Bereit für Ihr SHK-Projekt?</h2>
                <p>Lassen Sie sich von unserem Meisterbetrieb beraten. Kostenlose Vor-Ort-Termine und transparente Festpreise.</p>
                <div class="cta-buttons">
                    <a href="kontakt.php" class="btn-primary">
                        <i class="fas fa-calendar-check"></i>
                        Beratungstermin vereinbaren
                    </a>
                    <a href="tel:0461-47753" class="btn-outline">
                        <i class="fas fa-phone"></i>
                        Direkt anrufen: 0461-47753
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Sticky Bottom Bar -->
<div class="sticky-bottom-bar">
    <div class="container">
        <div class="bottom-bar-content">
            <span class="trust-text">
                <i class="fas fa-clock"></i>
                24h Notdienst - Meister erreichbar
            </span>
            <div class="bottom-bar-actions">
                <a href="tel:0461-47753" class="btn-bottom-primary">Anrufen</a>
                <a href="kontakt.php" class="btn-bottom-secondary">Kontakt</a>
            </div>
        </div>
    </div>
</div>

<style>
.before-after-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.before-after-slider {
    max-width: 900px;
    margin: 0 auto;
}

.before-after-item {
    display: none;
}

.before-after-item.active {
    display: block;
}

.comparison-container {
    position: relative;
    margin: 30px 0;
}

.before-after-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.before-image, .after-image {
    position: relative;
}

.after-image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);
}

.before-image img, .after-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: block;
}

.label {
    position: absolute;
    top: 20px;
    background: rgba(27, 67, 50, 0.9);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
}

.before-image .label {
    left: 20px;
}

.after-image .label {
    right: 20px;
}

.slider-handle {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    cursor: ew-resize;
    z-index: 10;
}

.slider-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    background: white;
}

.slider-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    color: #1B4332;
}

.slider-navigation {
    text-align: center;
    margin-top: 30px;
}

.nav-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: none;
    background: #dee2e6;
    margin: 0 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.nav-dot.active {
    background: #1B4332;
}

.process-timeline {
    padding: 80px 0;
}

.timeline-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
}

.timeline-step {
    flex: 1;
    text-align: center;
    max-width: 200px;
    position: relative;
}

.step-number {
    position: absolute;
    top: -10px;
    right: -10px;
    width: 24px;
    height: 24px;
    background: #40916C;
    color: white;
    border-radius: 50%;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
}

.step-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #1B4332 0%, #40916C 100%);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin: 0 auto 20px;
    position: relative;
    z-index: 1;
}

.step-content h3 {
    margin: 0 0 10px;
    color: #1B4332;
    font-size: 18px;
    font-weight: 600;
}

.step-content p {
    margin: 0;
    color: #6c757d;
    font-size: 14px;
    line-height: 1.5;
}

.timeline-connector {
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, #40916C 0%, #95D5B2 100%);
    position: relative;
    top: -60px;
    flex-shrink: 0;
}

@media (max-width: 768px) {
    .timeline-container {
        flex-direction: column;
        gap: 40px;
    }
    
    .timeline-connector {
        width: 2px;
        height: 40px;
        top: 0;
        transform: rotate(90deg);
    }
    
    .timeline-step {
        max-width: 100%;
    }
}
</style>

<script>
// Before/After Slider Functionality