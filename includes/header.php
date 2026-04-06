<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Parzentny SHK GmbH</title>
    <?php if (isset($metaDescription)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <?php endif; ?>
    <meta name="keywords" content="SHK, Sanitär, Heizung, Klima, Wärmepumpen, Harrislee, Flensburg, Notdienst, Meisterbetrieb">
    <meta name="author" content="Parzentny SHK GmbH">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Parzentny SHK GmbH">
    <?php if (isset($metaDescription)): ?>
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://parzentny-shk.foerdelab.de/<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <meta property="og:locale" content="de_DE">
    <meta property="og:site_name" content="Parzentny SHK GmbH">
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "PlumbingService",
      "name": "Parzentny SHK GmbH",
      "description": "VDI 4645-zertifizierter Wärmepumpen-Fachbetrieb und Meisterbetrieb für Sanitär, Heizung und Klima in Harrislee seit 1983",
      "url": "https://parzentny-shk.foerdelab.de",
      "logo": "https://parzentny-shk.foerdelab.de/assets/images/logo.png",
      "image": "https://parzentny-shk.foerdelab.de/assets/images/parzentny-shk-harrislee.jpg",
      "telephone": "+49461477530",
      "faxNumber": "+49461477600",
      "email": "info@parzentny-shk.de",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Am Oxer 26",
        "addressLocality": "Harrislee",
        "postalCode": "24955",
        "addressCountry": "DE",
        "addressRegion": "Schleswig-Holstein"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "54.8085",
        "longitude": "9.3528"
      },
      "openingHours": [
        "Mo-Th 07:15-12:00,13:30-16:00",
        "Fr 07:15-12:30"
      ],
      "servesCuisine": [],
      "areaServed": [
        {
          "@type": "City",
          "name": "Harrislee"
        },
        {
          "@type": "City",
          "name": "Flensburg"
        },
        {
          "@type": "City",
          "name": "Glücksburg"
        },
        {
          "@type": "City",
          "name": "Handewitt"
        }
      ],
      "priceRange": "€€",
      "paymentAccepted": ["Cash", "Invoice", "Bank Transfer"],
      "currenciesAccepted": "EUR",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "SHK Dienstleistungen",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Wärmepumpen Installation",
              "description": "VDI 4645-zertifizierte Wärmepumpen-Installation und -Wartung"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Sanitärinstallation",
              "description": "Professionelle Sanitärinstallation und Reparaturen"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Heizungsservice",
              "description": "Heizungsinstallation, Wartung und Reparatur"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "24h Notdienst",
              "description": "24 Stunden Notdienst für SHK-Notfälle",
              "availableAtOrFrom": {
                "@type": "Place",
                "address": {
                  "@type": "PostalAddress",
                  "addressLocality": "Harrislee",
                  "addressRegion": "Schleswig-Holstein"
                }
              }
            }
          }
        ]
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "47",
        "bestRating": "5",
        "worstRating": "1"
      },
      "founder": {
        "@type": "Person",
        "name": "Parzentny"
      },
      "foundingDate": "1983",
      "numberOfEmployees": "5-10",
      "memberOf": [
        {
          "@type": "Organization",
          "name": "SHK-Handwerk Innung"
        },
        {
          "@type": "Organization",
          "name": "NIBE Effizienzpartner"
        }
      ],
      "hasCredential": [
        {
          "@type": "EducationalOccupationalCredential",
          "name": "VDI 4645 Zertifizierung",
          "description": "Zertifizierter Wärmepumpen-Fachbetrieb nach VDI 4645"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "name": "Meisterbetrieb",
          "description": "Handwerksmeisterbetrieb seit 1983"
        }
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+49461477530",
          "contactType": "customer service",
          "availableLanguage": "German",
          "hoursAvailable": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday"],
            "opens": "07:15",
            "closes": "16:00"
          }
        },
        {
          "@type": "ContactPoint",
          "telephone": "+4916097251061",
          "contactType": "emergency",
          "availableLanguage": "German",
          "description": "24h Notdienst"
        }
      ]
    }
    </script>
    
    <link rel="canonical" href="https://parzentny-shk.foerdelab.de/<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo @filemtime(__DIR__ . "/../assets/css/style.css") ?: time(); ?>">
    <link rel="stylesheet" href="assets/css/animations.css">
    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700;900&family=Source+Sans+Pro:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- foerdelab-tracking-pixel -->
<script>
(function(){
  var LEAD_ID=19,DEMO_SLUG="parzentny-shk-gmbh",API="https:\/\/foerdelab.de\/api\/track.php";
  var sid=Math.random().toString(36).slice(2,11);
  var startTime=Date.now(),maxScroll=0;
  function send(payload){
    try{
      payload.leadId=LEAD_ID;payload.demoSlug=DEMO_SLUG;payload.sessionId=sid;
      payload.page=location.pathname;payload.timestamp=new Date().toISOString();
      if(navigator.sendBeacon){
        navigator.sendBeacon(API,new Blob([JSON.stringify(payload)],{type:'application/json'}));
      }else{
        fetch(API,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(payload),keepalive:true}).catch(function(){});
      }
    }catch(e){}
  }
  send({event:'page_view',referrer:document.referrer,userAgent:navigator.userAgent,screenWidth:screen.width});
  document.addEventListener('visibilitychange',function(){
    if(document.hidden){
      send({event:'time_on_page',seconds:Math.round((Date.now()-startTime)/1000)});
    }else{startTime=Date.now();}
  });
  window.addEventListener('beforeunload',function(){
    send({event:'time_on_page',seconds:Math.round((Date.now()-startTime)/1000)});
  });
  window.addEventListener('scroll',function(){
    var h=document.body.scrollHeight-window.innerHeight;
    if(h<=0)return;
    var pct=Math.round((window.scrollY/h)*100);
    if(pct>maxScroll){
      maxScroll=pct;
      if(maxScroll>=25&&maxScroll%25===0){send({event:'scroll_depth',depth:maxScroll});}
    }
  },{passive:true});
  document.addEventListener('click',function(ev){
    var el=ev.target.closest('a[href*="kontakt"], .cta-primary, .fab-option, .sticky-btn, [href^="tel:"], [href^="mailto:"], [href*="wa.me"]');
    if(!el)return;
    var href=el.getAttribute('href')||'';
    var t='other';
    if(href.indexOf('tel:')===0)t='phone';
    else if(href.indexOf('wa.me')!==-1||href.indexOf('whatsapp')!==-1)t='whatsapp';
    else if(href.indexOf('kontakt')!==-1)t='contact';
    else if(href.indexOf('mailto:')===0)t='email';
    send({event:'cta_click',ctaType:t,element:(el.tagName||'')+' '+(el.className||href)});
  });
  document.addEventListener('mouseleave',function(e){
    if(e.clientY<0){send({event:'exit_intent',timeOnSite:Math.round((Date.now()-startTime)/1000)});}
  });
  if(window.flAB){send({event:'ab_variant_shown',variant:window.flAB.variant});}
})();
</script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php">Parzentny SHK GmbH</a>
                </div>
                
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="nav-toggle-label">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'index') ? 'active' : ''; ?>">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a href="leistungen.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'leistungen') ? 'active' : ''; ?>">Leistungen</a>
                    </li>
                    <li class="nav-item">
                        <a href="waermepumpen.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'waermepumpen') ? 'active' : ''; ?>">Wärmepumpen</a>
                    </li>
                    <li class="nav-item">
                        <a href="notdienst.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'notdienst') ? 'active' : ''; ?>">Notdienst</a>
                    </li>
                    <li class="nav-item">
                        <a href="ausbildung.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'ausbildung') ? 'active' : ''; ?>">Ausbildung</a>
                    </li>
                    <li class="nav-item">
                        <a href="kontakt.php" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'kontakt') ? 'active' : ''; ?>">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>