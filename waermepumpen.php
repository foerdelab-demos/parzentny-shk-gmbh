<?php 
$currentPage = 'waermepumpen'; 
require 'includes/header.php';

// Firmen-Daten für Wiederverwendung
$firmendaten = [
    'name' => 'Parzentny SHK GmbH',
    'phone' => '0461-47753',
    'emergency_phone' => '0160-97251061',
    'address' => 'Am Oxer 26, 24955 Harrislee',
    'email' => 'info@parzentny-shk.de'
];

// VDI und NIBE Zertifizierungs-Daten - Strukturierte Darstellung
$zertifikate = [
    [
        'title' => 'VDI 4645',
        'subtitle' => 'Geprüftes Unternehmen',
        'beschreibung' => 'Zertifiziert für Wärmepumpen-Planung und Errichtung seit 2022',
        'vorteile' => [
            'Fachgerechte Planung',
            'Qualitätsgesicherte Installation',
            'Langfristige Wartung',
            'Qualifizierte Ausführung',
            'Normkonforme Installation'
        ]
    ],
    [
        'title' => 'NIBE',
        'subtitle' => 'Effizienzpartner',
        'beschreibung' => 'Autorisierter Partner für hocheffiziente Wärmepumpensysteme',
        'vorteile' => ['Herstellergarantie', 'Schulungen', 'Technischer Support']
    ]
];

// Effizienz-Daten für Calculator
$effizienzwerte = [
    'alte_gasheizung' => ['verbrauch' => 2500, 'kosten_pro_kwh' => 0.12],
    'waermepumpe' => ['verbrauch' => 800, 'kosten_pro_kwh' => 0.28, 'cop' => 4.2]
];
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero hero-specialty animate-on-scroll fade-in-up" style="background: linear-gradient(rgba(27, 67, 50, 0.8), rgba(64, 145, 108, 0.8)), url('https://source.unsplash.com/featured/?heat,pump,VDI,certification,NIBE,outdoor,unit') center/cover;">
        <div class="hero-overlay">
            <div class="trust-badge generationen-badge">
                Meisterbetrieb seit 1983 - 3. Generation
            </div>
            <div class="trust-badge nibe-partnership">
                Offizieller NIBE-Effizienzpartner
            </div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">VDI 4645-zertifizierter Wärmepumpen-Fachbetrieb</h1>
                <p class="hero-subtitle">Seit 2022 sind wir nach VDI 4645 geprüftes Unternehmen für fachgerechte Wärmepumpen-Planung und -Installation in Harrislee und Flensburg 4645 geprüftes Unternehmen für Wärmepumpen-Planung und -Errichtung. Als NIBE-Effizienzpartner bieten wir moderne Heiztechnik auf höchstem Niveau.</p>
                
                <div class="hero-features stagger-container">
                    <div class="feature-pill stagger-1">
                        <i class="icon-certificate"></i>
                        VDI 4645-Zertifizierung
                    </div>
                    <div class="feature-pill stagger-2">
                        <i class="icon-partnership"></i>
                        NIBE-Effizienzpartner
                    </div>
                    <div class="feature-pill stagger-3">
                        <i class="icon-tools"></i>
                        Planung und Errichtung
                    </div>
                    <div class="feature-pill stagger-4">
                        <i class="icon-maintenance"></i>
                        Wartung und Service
                    </div>
                </div>
                
                <div class="hero-cta">
                    <a href="tel:<?php echo $firmendaten['phone']; ?>" class="btn btn-primary">
                        <i class="icon-phone"></i>
                        Beratung: <?php echo $firmendaten['phone']; ?>
                    </a>
                    <a href="kontakt.php" class="btn btn-secondary">Kostenvoranschlag</a>
                </div>
            </div>
        </div>
        
        <div class="img-hover-container">
            <img src="https://source.unsplash.com/featured/?heat,pump,VDI,certification,NIBE,outdoor,unit" 
                 alt="VDI 4645-zertifizierter Wärmepumpen-Fachbetrieb Harrislee - NIBE Effizienzpartner" 
                 class="hero-image-waermepumpe" loading="eager">
        </div>
    </section>

    <div class="content-wrapper">
        <div class="main-column">
            <!-- Zertifikat Showcase Section -->
            <section class="section zertifikat-showcase animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header">
                        <h2>Zertifizierte Kompetenz für Ihre Wärmepumpe</h2>
                        <p>Zwei wichtige Zertifizierungen garantieren Ihnen professionelle Planung und Installation</p>
                    </div>
                    
                    <div class="zertifikat-cards stagger-container">
                        <?php foreach($zertifikate as $index => $zertifikat): ?>
                        <div class="zertifikat-card stagger-<?php echo $index + 1; ?>">
                            <div class="card-3d">
                                <div class="card-front">
                                    <div class="zertifikat-logo">
                                        <div class="logo-badge"><?php echo $zertifikat['title']; ?></div>
                                    </div>
                                    <h3><?php echo $zertifikat['title']; ?></h3>
                                    <p class="subtitle"><?php echo $zertifikat['subtitle']; ?></p>
                                    <p><?php echo $zertifikat['beschreibung']; ?></p>
                                </div>
                                <div class="card-back">
                                    <h4>Ihre Vorteile:</h4>
                                    <ul>
                                        <?php foreach($zertifikat['vorteile'] as $vorteil): ?>
                                        <li><i class="icon-check"></i> <?php echo $vorteil; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="card-cta">
                                        <a href="kontakt.php" class="btn btn-outline">Beratung anfragen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- Effizienz Calculator Section -->
            <section class="section effizienz-calculator animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header">
                        <h2>Wärmepumpen-Effizienzrechner</h2>
                        <p>Ermitteln Sie Ihre jährliche Kostenersparnis mit einer modernen Wärmepumpe</p>
                    </div>
                    
                    <div class="calculator-wrapper">
                        <div class="calculator-inputs">
                            <div class="input-group">
                                <label for="wohnflaeche">Wohnfläche (m²)</label>
                                <div class="slider-container">
                                    <input type="range" id="wohnflaeche" min="80" max="300" value="150" class="slider">
                                    <span class="slider-value">150 m²</span>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <label for="gasverbrauch">Aktueller Gasverbrauch (kWh/Jahr)</label>
                                <div class="slider-container">
                                    <input type="range" id="gasverbrauch" min="10000" max="40000" value="20000" step="1000" class="slider">
                                    <span class="slider-value">20.000 kWh</span>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <label for="gaspreis">Gaspreis (€/kWh)</label>
                                <div class="slider-container">
                                    <input type="range" id="gaspreis" min="0.08" max="0.20" value="0.12" step="0.01" class="slider">
                                    <span class="slider-value">0,12 €</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="calculator-results">
                            <div class="result-card alte-heizung">
                                <h4>Aktuelle Gasheizung</h4>
                                <div class="cost-display">
                                    <span class="amount count-up" data-target="2400">2.400</span>
                                    <span class="currency">€/Jahr</span>
                                </div>
                                <div class="co2-display">
                                    <span class="amount">4,8</span>
                                    <span class="unit">t CO₂/Jahr</span>
                                </div>
                            </div>
                            
                            <div class="result-card waermepumpe">
                                <h4>NIBE Wärmepumpe</h4>
                                <div class="cost-display">
                                    <span class="amount count-up" data-target="1100">1.100</span>
                                    <span class="currency">€/Jahr</span>
                                </div>
                                <div class="co2-display">
                                    <span class="amount">1,2</span>
                                    <span class="unit">t CO₂/Jahr</span>
                                </div>
                            </div>
                            
                            <div class="result-card ersparnis">
                                <h4>Ihre Ersparnis</h4>
                                <div class="savings-display">
                                    <span class="amount count-up" data-target="1300">1.300</span>
                                    <span class="currency">€/Jahr</span>
                                </div>
                                <div class="payback">
                                    <span class="label">Amortisation nach</span>
                                    <span class="years">8-12 Jahren</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="calculator-footer">
                            <p class="disclaimer">* Beispielrechnung basierend auf durchschnittlichen Werten. COP 4,2 bei A2/W35.</p>
                            <a href="kontakt.php" class="btn btn-primary">Individuelle Berechnung anfragen</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="section features animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="features-grid">
                        <div class="features-content">
                            <h2>NIBE-Effizienzpartnerschaft</h2>
                            <p>Als zertifizierter NIBE-Partner bieten wir hocheffiziente Wärmepumpensysteme mit umfassendem Service und Garantie.</p>
                            
                            <div class="features-list stagger-container">
                                <div class="feature-item stagger-1">
                                    <div class="feature-icon">
                                        <i class="icon-efficiency"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Hocheffiziente NIBE-Systeme</h4>
                                        <p>Modernste Wärmepumpen-Technologie mit Jahresarbeitszahlen bis 4,8</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item stagger-2">
                                    <div class="feature-icon">
                                        <i class="icon-planning"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Professionelle Planung</h4>
                                        <p>VDI 4645-konforme Planung mit detaillierter Heizlastberechnung</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item stagger-3">
                                    <div class="feature-icon">
                                        <i class="icon-installation"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Fachgerechte Installation</h4>
                                        <p>Montage durch geschulte Meister-Fachkräfte nach Herstellervorgaben</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item stagger-4">
                                    <div class="feature-icon">
                                        <i class="icon-service"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Langzeit-Wartungsverträge</h4>
                                        <p>Jährliche Wartung und 24h-Service für dauerhaft hohe Effizienz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="features-image img-hover-container">
                            <img src="https://source.unsplash.com/featured/?NIBE,logo,partnership,efficiency,certificate,quality" 
                                 alt="NIBE-Effizienzpartnerschaft - Zertifizierte Wärmepumpen-Kompetenz seit 40 Jahren" 
                                 class="partnership-image" loading="lazy">
                            
                            <div class="image-overlay">
                                <div class="partnership-badge">
                                    <div class="badge-content">
                                        <span class="badge-title">NIBE</span>
                                        <span class="badge-subtitle">Effizienzpartner</span>
                                        <span class="badge-year">seit 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Wärmepumpen-Arten Section -->
            <section class="section wp-arten animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header">
                        <h2>Wärmepumpen-Systeme für jeden Bedarf</h2>
                        <p>Von Luft-Wasser bis Erdwärme - wir finden die optimale Lösung für Ihr Objekt</p>
                    </div>
                    
                    <div class="wp-grid stagger-container">
                        <div class="wp-card stagger-1">
                            <div class="wp-icon">
                                <i class="icon-air-source"></i>
                            </div>
                            <h3>Luft-Wasser</h3>
                            <div class="wp-specs">
                                <div class="spec">
                                    <span class="label">Temp.-bereich:</span>
                                    <span class="value">-25°C bis +35°C</span>
                                </div>
                                <div class="spec">
                                    <span class="label">COP:</span>
                                    <span class="value">bis 4,8</span>
                                </div>
                                <div class="spec">
                                    <span class="label">Installation:</span>
                                    <span class="value">einfach</span>
                                </div>
                            </div>
                            <p>Kostengünstige Installation ohne Erdarbeiten. Ideal für Sanierungen und Neubauten.</p>
                        </div>
                        
                        <div class="wp-card stagger-2">
                            <div class="wp-icon">
                                <i class="icon-ground-source"></i>
                            </div>
                            <h3>Sole-Wasser</h3>
                            <div class="wp-specs">
                                <div class="spec">
                                    <span class="label">Tiefe:</span>
                                    <span class="value">80-150m</span>
                                </div>
                                <div class="spec">
                                    <span class="label">COP:</span>
                                    <span class="value">bis 5,2</span>
                                </div>
                                <div class="spec">
                                    <span class="label">Effizienz:</span>
                                    <span class="value">höchste</span>
                                </div>
                            </div>
                            <p>Höchste Effizienz durch konstante Erdtemperatur. Perfekt für Neubauten mit Platz.</p>
                        </div>
                        
                        <div class="wp-card stagger-3">
                            <div class="wp-icon">
                                <i class="icon-water-source"></i>
                            </div>
                            <h3>Wasser-Wasser</h3>
                            <div class="wp-specs">
                                <div class="spec">
                                    <span class="label">Brunnen:</span>
                                    <span class="value">2 Stück</span>
                                </div>
                                <div class="spec">
                                    <span class="label">COP:</span>
                                    <span class="value">bis 5,5</span>
                                </div>
                                <div class="spec">
                                    <span class="label">Temp.:</span>
                                    <span class="value">8-12°C</span>
                                </div>
                            </div>
                            <p>Beste Effizienz durch Grundwassernutzung. Bei ausreichendem Grundwasser ideal.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Förderung Section -->
            <section class="section foerderung animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="foerder-content">
                        <div class="foerder-header">
                            <h2>Wärmepumpen-Förderung nutzen</h2>
                            <p>Bis zu 70% Förderung für Ihre neue Wärmepumpe - wir unterstützen Sie bei der Antragstellung</p>
                        </div>
                        
                        <div class="foerder-grid stagger-container">
                            <div class="foerder-card bafa stagger-1">
                                <div class="foerder-logo">BAFA</div>
                                <h3>Bundesförderung</h3>
                                <div class="foerder-betrag">
                                    <span class="prozent count-up" data-target="30">30</span>
                                    <span class="suffix">% Grundförderung</span>
                                </div>
                                <ul class="foerder-liste">
                                    <li>+ 5% Effizienzbonus</li>
                                    <li>+ 10% Klimageschwindigkeits-Bonus</li>
                                    <li>+ 20% einkommensabhängiger Bonus</li>
                                </ul>
                                <p class="foerder-max">Max. 70% Förderung möglich</p>
                            </div>
                            
                            <div class="foerder-card kfw stagger-2">
                                <div class="foerder-logo">KfW</div>
                                <h3>Ergänzungskredit</h3>
                                <div class="foerder-betrag">
                                    <span class="prozent">2,24</span>
                                    <span class="suffix">% Zinssatz</span>
                                </div>
                                <ul class="foerder-liste">
                                    <li>Bis 120.000 € Kreditsumme</li>
                                    <li>Kombinierbar mit BAFA</li>
                                    <li>Tilgungsfreie Jahre möglich</li>
                                </ul>
                                <p class="foerder-hinweis">Bei Sanierung zum Effizienzhaus</p>
                            </div>
                            
                            <div class="foerder-card service stagger-3">
                                <div class="foerder-logo">🏆</div>
                                <h3>Unser Service</h3>
                                <div class="foerder-betrag">
                                    <span class="prozent">100</span>
                                    <span class="suffix">% Unterstützung</span>
                                </div>
                                <ul class="foerder-liste">
                                    <li>Antragsberatung kostenfrei</li>
                                    <li>Unterlagen-Erstellung</li>
                                    <li>Energieberater-Vermittlung</li>
                                </ul>
                                <p class="foerder-versprechen">Förderung garantiert oder kostenfrei</p>
                            </div>
                        </div>
                        
                        <div class="foerder-cta">
                            <a href="kontakt.php" class="btn btn-primary">Förderberatung anfragen</a>
                            <a href="tel:<?php echo $firmendaten['phone']; ?>" class="btn btn-secondary">
                                <i class="icon-phone"></i>
                                Direkt beraten lassen
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Referenzen Section -->
            <section class="section referenzen animate-on-scroll fade-in-up">
                <div class="container">
                    <div class="section-header">
                        <h2>Wärmepumpen-Referenzen aus der Region</h2>
                        <p>Über 200 erfolgreich installierte Wärmepumpen-Anlagen in Schleswig-Holstein</p>
                    </div>