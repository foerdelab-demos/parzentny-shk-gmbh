</main>

<footer class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Firmeninfo -->
            <div>
                <h3 class="text-xl font-bold mb-4">Parzentny SHK GmbH</h3>
                <p class="text-gray-300 mb-4">Ihr Meisterbetrieb für Sanitär, Heizung und Klima seit 1983</p>
                <div class="text-gray-300">
                    <p class="mb-2">Am Oxer 26</p>
                    <p class="mb-2">24955 Harrislee</p>
                    <p class="mb-2">Germany</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="index.php" class="text-gray-300 hover:text-white transition-colors">Startseite</a></li>
                    <li><a href="leistungen.php" class="text-gray-300 hover:text-white transition-colors">Leistungen</a></li>
                    <li><a href="waermepumpen.php" class="text-gray-300 hover:text-white transition-colors">Wärmepumpen</a></li>
                    <li><a href="notdienst.php" class="text-gray-300 hover:text-white transition-colors">Notdienst</a></li>
                    <li><a href="ausbildung.php" class="text-gray-300 hover:text-white transition-colors">Ausbildung</a></li>
                    <li><a href="kontakt.php" class="text-gray-300 hover:text-white transition-colors">Kontakt</a></li>
                </ul>
            </div>

            <!-- Kontakt -->
            <div>
                <h3 class="text-xl font-bold mb-4">Kontakt</h3>
                <div class="space-y-2 text-gray-300">
                    <p><i class="fas fa-phone mr-2"></i>0461-47753</p>
                    <p><i class="fas fa-mobile-alt mr-2"></i>0160-97251061 (Notdienst)</p>
                    <p><i class="fas fa-fax mr-2"></i>0461-47760</p>
                    <p><i class="fas fa-envelope mr-2"></i>info@parzentny-shk.de</p>
                </div>
            </div>

            <!-- Öffnungszeiten & Zertifikate -->
            <div>
                <h3 class="text-xl font-bold mb-4">Öffnungszeiten</h3>
                <div class="text-gray-300 mb-4">
                    <p class="mb-1">Mo-Do: 07:15-12:00</p>
                    <p class="mb-1">und 13:30-16:00 Uhr</p>
                    <p>Fr: 07:15-12:30 Uhr</p>
                </div>
                <div class="text-sm text-gray-400">
                    <p class="mb-1">✓ VDI 4645-zertifiziert</p>
                    <p class="mb-1">✓ NIBE-Effizienzpartner</p>
                    <p>✓ 24h Notdienst</p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300">&copy; <?= date('Y') ?> Parzentny SHK GmbH. Alle Rechte vorbehalten.</p>
                <p class="text-gray-400 text-sm mt-2 md:mt-0">Demo erstellt von FördeLab</p>
            </div>
        </div>
    </div>
</footer>

    <script src="assets/js/animations.js"></script>

<!-- Sticky Contact Bar (Mobile) -->
<div class="sticky-contact-bar">
  <a href="tel:046147753" class="sticky-btn sticky-btn--call">
    📞 Anrufen
  </a>
  <a href="kontakt.php" class="sticky-btn sticky-btn--contact">
    ✉️ Kontakt
  </a>
</div>

<!-- Floating Action Button (Desktop) -->
<div class="fab-container">
  <button class="fab-main" aria-label="Kontakt">💬</button>
  <div class="fab-options">
    <a href="tel:046147753" class="fab-option" aria-label="Anrufen">📞</a>
    <a href="kontakt.php" class="fab-option" aria-label="Kontakt">✉️</a>
  </div>
</div>

<!-- Exit Intent Popup -->
<div id="exit-popup" class="exit-popup" style="display:none">
  <div class="exit-popup__inner">
    <button class="exit-popup__close" aria-label="Schliessen">&times;</button>
    <h3>Bevor Sie gehen...</h3>
    <p>Haben Sie Fragen? Wir rufen Sie kostenlos zurueck.</p>
    <form class="exit-popup__form" method="post" action="kontakt.php">
      <input type="tel" name="callback_phone" placeholder="Ihre Telefonnummer" required>
      <button type="submit" class="btn btn-primary cta-primary">Jetzt zurueckrufen lassen</button>
    </form>
  </div>
</div>
</body>
</html>