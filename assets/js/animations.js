document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    // A/B Testing Engine
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
    
    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = `${name}=${value}; expires=${expires}; path=/`;
    }
    
    let variant = getCookie('hero_variant');
    if (!variant) {
        variant = Math.random() < 0.5 ? 'a' : 'b';
        setCookie('hero_variant', variant, 30);
    }
    
    window.flAB = {
        variant: variant,
        trackEvent: function(action) {
            console.log(`AB Test Event: ${action} - Variant: ${variant}`);
            if (typeof gtag !== 'undefined') {
                gtag('event', action, {
                    'custom_parameter': variant
                });
            }
        }
    };
    
    document.querySelectorAll('.hero-variant').forEach(el => {
        if (el.classList.contains(`variant-${variant}`)) {
            el.style.display = 'block';
        } else {
            el.style.display = 'none';
        }
    });
    
    document.querySelectorAll('.cta-primary').forEach(btn => {
        btn.addEventListener('click', () => window.flAB.trackEvent('cta_click'));
    });
    
    if (prefersReducedMotion) return;
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                const staggerContainer = entry.target.closest('.stagger-container');
                if (staggerContainer) {
                    const children = Array.from(staggerContainer.children);
                    const index = children.indexOf(entry.target);
                    entry.target.style.transitionDelay = `${index * 0.1}s`;
                }
                
                scrollObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        scrollObserver.observe(el);
    });
    
    // Counter Animation
    function easeOutQuart(t) {
        return 1 - Math.pow(1 - t, 4);
    }
    
    function animateCounter(element, target, duration = 2000) {
        const start = performance.now();
        const startValue = 0;
        
        function update(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuart(progress);
            const currentValue = Math.floor(startValue + (target - startValue) * easedProgress);
            
            element.textContent = currentValue.toLocaleString();
            
            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }
        
        requestAnimationFrame(update);
    }
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.target);
                animateCounter(entry.target, target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.count-up').forEach(el => {
        counterObserver.observe(el);
    });
    
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Navbar Scroll
    const header = document.querySelector('header') || document.querySelector('nav');
    let ticking = false;
    
    function updateHeader() {
        if (window.scrollY > 80) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }
        ticking = false;
    }
    
    function requestHeaderUpdate() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestHeaderUpdate);
    
    // Parallax Hero
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    
    if (isDesktop) {
        const parallaxElements = document.querySelectorAll('.parallax-js');
        let parallaxTicking = false;
        
        function updateParallax() {
            const scrollY = window.scrollY;
            
            parallaxElements.forEach(el => {
                const speed = el.dataset.speed || 0.5;
                const yPos = -(scrollY * speed);
                el.style.transform = `translateY(${yPos}px)`;
            });
            
            parallaxTicking = false;
        }
        
        function requestParallaxUpdate() {
            if (!parallaxTicking) {
                requestAnimationFrame(updateParallax);
                parallaxTicking = true;
            }
        }
        
        window.addEventListener('scroll', requestParallaxUpdate);
    }
    
    // Lazy Loading
    const lazyObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.onload = () => {
                        img.classList.remove('skeleton');
                        img.classList.add('loaded');
                    };
                } else {
                    img.classList.remove('skeleton');
                }
                lazyObserver.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[loading="lazy"], img[data-src]').forEach(img => {
        img.classList.add('skeleton');
        lazyObserver.observe(img);
    });
    
    // Form Micro-interactions
    document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
        const formGroup = input.closest('.form-group');
        
        input.addEventListener('focus', () => {
            formGroup?.classList.add('focused');
        });
        
        input.addEventListener('blur', () => {
            if (!input.value.trim()) {
                formGroup?.classList.remove('focused');
            }
        });
        
        if (input.value.trim()) {
            formGroup?.classList.add('focused');
        }
    });
    
    // Exit Intent
    let exitShown = false;
    
    if (window.matchMedia('(min-width: 768px)').matches) {
        document.addEventListener('mouseleave', (e) => {
            if (e.clientY < 0 && !exitShown) {
                const exitPopup = document.querySelector('#exit-popup');
                if (exitPopup) {
                    exitPopup.style.display = 'flex';
                    exitShown = true;
                    window.flAB.trackEvent('exit_intent_shown');
                }
            }
        });
        
        document.querySelectorAll('.exit-popup__close').forEach(closeBtn => {
            closeBtn.addEventListener('click', () => {
                const exitPopup = document.querySelector('#exit-popup');
                if (exitPopup) {
                    exitPopup.style.display = 'none';
                }
            });
        });
    }
    
    // FAB Toggle
    const fabMain = document.querySelector('.fab-main');
    const fabContainer = document.querySelector('.fab-container');
    
    fabMain?.addEventListener('click', () => {
        fabContainer?.classList.toggle('open');
    });
});