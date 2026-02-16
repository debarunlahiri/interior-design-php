<?php
$stats = [
    ['value' => '320+', 'label' => 'Projects Delivered'],
    ['value' => '95%', 'label' => 'Client Satisfaction'],
    ['value' => '18', 'label' => 'Design Awards']
];

$services = [
    [
        'title' => 'Residential Styling',
        'description' => 'Warm, practical spaces tailored to your routine, personality, and daily rituals.',
        'icon' => 'bi-house-heart',
        'meta' => 'Living Room, Bedroom, Kitchen'
    ],
    [
        'title' => 'Luxury Renovation',
        'description' => 'Full interior transformation with custom materials, mood mapping, and elevated finishes.',
        'icon' => 'bi-gem',
        'meta' => 'End-to-End Design + Execution'
    ],
    [
        'title' => 'Commercial Interiors',
        'description' => 'Brand-forward workplaces and retail spaces that blend function, comfort, and impact.',
        'icon' => 'bi-building',
        'meta' => 'Office, Cafe, Retail Spaces'
    ],
    [
        'title' => 'Modular Kitchen Design',
        'description' => 'Smart storage, durable materials, and efficient movement planning for everyday cooking.',
        'icon' => 'bi-grid-3x3-gap',
        'meta' => 'Custom Cabinetry + Lighting'
    ],
    [
        'title' => 'Bathroom Upgrades',
        'description' => 'Modern vanity, tile, and fixture selections that maximize comfort in compact footprints.',
        'icon' => 'bi-droplet-half',
        'meta' => 'Premium Fixtures + Space Saving'
    ],
    [
        'title' => 'Virtual Design Consultation',
        'description' => 'Online design guidance with mood boards, product links, and a practical implementation roadmap.',
        'icon' => 'bi-laptop',
        'meta' => 'Remote Support Across Cities'
    ]
];

$portfolio = [
    [
        'title' => 'Calm Scandinavian Living Room',
        'style' => 'Minimal / Light Oak / Linen',
        'image' => 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-1.svg'
    ],
    [
        'title' => 'Modern Earthy Bedroom',
        'style' => 'Neutral / Texture / Soft Lighting',
        'image' => 'https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-2.svg'
    ],
    [
        'title' => 'Artful Dining Concept',
        'style' => 'Contemporary / Stone / Statement Decor',
        'image' => 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-3.svg'
    ],
    [
        'title' => 'Luxury Kitchen Remodel',
        'style' => 'Quartz / Matte Black / Warm Wood',
        'image' => 'https://images.pexels.com/photos/6489127/pexels-photo-6489127.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-1.svg'
    ],
    [
        'title' => 'Executive Office Lounge',
        'style' => 'Corporate / Acoustic / Ambient Light',
        'image' => 'https://images.pexels.com/photos/6585755/pexels-photo-6585755.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-2.svg'
    ],
    [
        'title' => 'Boutique Cafe Interior',
        'style' => 'Earthy / Brass / Social Seating',
        'image' => 'https://images.pexels.com/photos/5824907/pexels-photo-5824907.jpeg?auto=compress&cs=tinysrgb&w=1400',
        'fallback' => 'assets/images/portfolio-3.svg'
    ]
];

$processSteps = [
    [
        'step' => '01',
        'title' => 'Discovery Call',
        'description' => 'We discuss your goals, lifestyle, budget, and timeline to build the right project scope.'
    ],
    [
        'step' => '02',
        'title' => 'Concept & Layout',
        'description' => 'You receive mood direction, furniture zoning, finish palettes, and practical layout options.'
    ],
    [
        'step' => '03',
        'title' => 'Execution',
        'description' => 'We coordinate sourcing and implementation so every room is delivered polished and functional.'
    ],
    [
        'step' => '04',
        'title' => 'Final Styling',
        'description' => 'Lighting, decor, and textile layers complete the look with a cohesive final reveal.'
    ]
];

$testimonials = [
    [
        'name' => 'Priya S.',
        'project' => '3BHK Apartment, San Jose',
        'quote' => 'Aura transformed our home into a calm and elegant space. The layouts are beautiful and genuinely practical.'
    ],
    [
        'name' => 'Daniel R.',
        'project' => 'Boutique Cafe, Austin',
        'quote' => 'From concept to handover, the team stayed detail-focused and organized. Our customer experience improved immediately.'
    ],
    [
        'name' => 'Meera & Arjun',
        'project' => 'Villa Renovation, Fremont',
        'quote' => 'Excellent taste, clear communication, and no wasted spend. Every room now feels intentional and premium.'
    ]
];

$faqs = [
    [
        'question' => 'How much does an interior project usually cost?',
        'answer' => 'Costs vary by scope, material level, and location. Most projects start with a consultation and a phased plan based on your budget range.'
    ],
    [
        'question' => 'Do you handle both design and execution?',
        'answer' => 'Yes. We offer concept-only packages and full turnkey delivery with vendor coordination, procurement, and final styling.'
    ],
    [
        'question' => 'How long does a typical project take?',
        'answer' => 'A focused room makeover can take 3-6 weeks, while full home transformations are commonly 8-16 weeks depending on complexity.'
    ],
    [
        'question' => 'Can you work with existing furniture and decor?',
        'answer' => 'Absolutely. We regularly integrate existing pieces and elevate them with updated layouts, finishes, and complementary styling.'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aura Interiors | Interior Design Studio</title>
    <meta name="description" content="Aura Interiors designs refined, human-centered spaces for homes and businesses.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="hero-bg"></div>

    <header class="container py-4">
        <nav class="navbar navbar-expand-lg px-0">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="#">
                <span class="brand-mark">A</span>
                Aura Interiors
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                </ul>
                <a href="#contact" class="btn btn-brand ms-lg-3">Book Consultation</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="container hero-section py-5 py-lg-6">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 fade-in-up">
                    <p class="hero-kicker mb-3">Premium Interior Design Studio</p>
                    <h1 class="display-4 fw-bold mb-4">Spaces That Feel <span class="highlight">Effortlessly Beautiful</span></h1>
                    <p class="lead mb-4">We craft elegant interiors with personality, balancing comfort, purpose, and timeless detail for modern living.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#portfolio" class="btn btn-brand btn-lg">Explore Projects</a>
                        <a href="#services" class="btn btn-outline-dark btn-lg">Our Services</a>
                    </div>
                    <div class="row g-3 stats-row">
                        <?php foreach ($stats as $item): ?>
                            <div class="col-4">
                                <div class="stat-card">
                                    <h3><?= htmlspecialchars($item['value']) ?></h3>
                                    <p><?= htmlspecialchars($item['label']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 fade-in-up delay-1">
                    <div class="hero-card">
                        <img
                            src="https://images.pexels.com/photos/1571458/pexels-photo-1571458.jpeg?auto=compress&cs=tinysrgb&w=1800"
                            data-fallback="assets/images/hero-interior.svg"
                            alt="Elegant interior design showcase"
                            class="img-fluid rounded-4 shadow-lg"
                        >
                        <div class="floating-note">
                            <i class="bi bi-stars"></i>
                            2026 Trend: Warm Minimalism
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="container py-5">
            <div class="section-heading text-center mb-5 fade-in-up">
                <p class="hero-kicker">What We Do</p>
                <h2 class="display-6 fw-bold">Design Services</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($services as $index => $service): ?>
                    <div class="col-md-6 col-lg-4 fade-in-up delay-<?= ($index % 3) + 1 ?>">
                        <article class="service-card h-100">
                            <i class="bi <?= htmlspecialchars($service['icon']) ?>"></i>
                            <h3><?= htmlspecialchars($service['title']) ?></h3>
                            <p><?= htmlspecialchars($service['description']) ?></p>
                            <span class="service-meta"><?= htmlspecialchars($service['meta']) ?></span>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="portfolio" class="container py-5">
            <div class="section-heading d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-5 fade-in-up">
                <div>
                    <p class="hero-kicker">Selected Work</p>
                    <h2 class="display-6 fw-bold mb-0">Recent Transformations</h2>
                </div>
                <a href="#contact" class="btn btn-outline-dark">Start Your Project</a>
            </div>
            <div class="row g-4">
                <?php foreach ($portfolio as $index => $project): ?>
                    <div class="col-lg-4 col-md-6 fade-in-up delay-<?= ($index % 3) + 1 ?>">
                        <article class="portfolio-card">
                            <img
                                src="<?= htmlspecialchars($project['image']) ?>"
                                data-fallback="<?= htmlspecialchars($project['fallback']) ?>"
                                alt="<?= htmlspecialchars($project['title']) ?>"
                                class="img-fluid"
                            >
                            <div class="portfolio-overlay">
                                <h3><?= htmlspecialchars($project['title']) ?></h3>
                                <p><?= htmlspecialchars($project['style']) ?></p>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="about" class="container py-5">
            <div class="about-wrap fade-in-up">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <p class="hero-kicker">Why Aura</p>
                        <h2 class="display-6 fw-bold mb-3">We Design For How You Live</h2>
                        <p class="mb-0">Our process blends creative direction with practical planning: layout strategy, finish selections, and styling layers that make each room feel intentional and lived-in from day one.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <button
                            type="button"
                            class="btn btn-brand btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#customerInfoModal"
                        >
                            Get a Free Design Call
                        </button>
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-sm-4">
                        <div class="mini-metric">
                            <h3>12+</h3>
                            <p>Years in Design Industry</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-metric">
                            <h3>9</h3>
                            <p>Core Designers & Stylists</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-metric">
                            <h3>24</h3>
                            <p>Cities Served Across US</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="container py-5">
            <div class="section-heading text-center mb-5 fade-in-up">
                <p class="hero-kicker">How We Work</p>
                <h2 class="display-6 fw-bold">Our Design Process</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($processSteps as $index => $item): ?>
                    <div class="col-md-6 col-lg-3 fade-in-up delay-<?= ($index % 3) + 1 ?>">
                        <article class="process-card h-100">
                            <span class="process-step"><?= htmlspecialchars($item['step']) ?></span>
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                            <p><?= htmlspecialchars($item['description']) ?></p>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="testimonials" class="container py-5">
            <div class="section-heading text-center mb-5 fade-in-up">
                <p class="hero-kicker">Client Feedback</p>
                <h2 class="display-6 fw-bold">What Clients Say</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($testimonials as $index => $item): ?>
                    <div class="col-lg-4 fade-in-up delay-<?= ($index % 3) + 1 ?>">
                        <article class="testimonial-card h-100">
                            <i class="bi bi-quote quote-icon"></i>
                            <p class="testimonial-quote mb-3"><?= htmlspecialchars($item['quote']) ?></p>
                            <h3><?= htmlspecialchars($item['name']) ?></h3>
                            <p class="testimonial-meta mb-0"><?= htmlspecialchars($item['project']) ?></p>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="faq" class="container py-5">
            <div class="section-heading text-center mb-5 fade-in-up">
                <p class="hero-kicker">Common Questions</p>
                <h2 class="display-6 fw-bold">Frequently Asked Questions</h2>
            </div>
            <div class="accordion faq-accordion fade-in-up" id="faqAccordion">
                <?php foreach ($faqs as $index => $item): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading<?= $index ?>">
                            <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="faqCollapse<?= $index ?>">
                                <?= htmlspecialchars($item['question']) ?>
                            </button>
                        </h2>
                        <div id="faqCollapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="faqHeading<?= $index ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= htmlspecialchars($item['answer']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="container py-5 pb-6">
            <div class="contact-card fade-in-up">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2">Ready to elevate your interiors?</h2>
                        <p class="mb-0">Tell us your vision and preferred style. We will send a personalized proposal in 48 hours.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <button
                            type="button"
                            class="btn btn-dark btn-lg px-4"
                            data-bs-toggle="modal"
                            data-bs-target="#customerInfoModal"
                        >
                            Request Proposal
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="customerInfoModal" tabindex="-1" aria-labelledby="customerInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content inquiry-modal">
                <div class="modal-header border-0 pb-0">
                    <div>
                        <p class="hero-kicker mb-1">Project Inquiry</p>
                        <h2 class="modal-title fs-3 fw-bold" id="customerInfoModalLabel">Tell Us About Your Space</h2>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3">
                    <form id="customerInfoForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="full_name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="+1 555 123 4567" required>
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="projectType" class="form-label">Project Type</label>
                                <select class="form-select" id="projectType" name="project_type" required>
                                    <option value="" selected disabled>Select project type</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Renovation">Renovation</option>
                                    <option value="Styling">Styling Consultation</option>
                                </select>
                                <div class="invalid-feedback">Please select a project type.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="budgetRange" class="form-label">Estimated Budget</label>
                                <select class="form-select" id="budgetRange" name="budget_range" required>
                                    <option value="" selected disabled>Select budget</option>
                                    <option value="Under $10k">Under $10k</option>
                                    <option value="$10k - $30k">$10k - $30k</option>
                                    <option value="$30k - $60k">$30k - $60k</option>
                                    <option value="$60k+">$60k+</option>
                                </select>
                                <div class="invalid-feedback">Please select your budget range.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="location" class="form-label">City / Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                                <div class="invalid-feedback">Please enter your location.</div>
                            </div>
                            <div class="col-12">
                                <label for="projectDetails" class="form-label">Project Details</label>
                                <textarea class="form-control" id="projectDetails" name="project_details" rows="4" placeholder="Tell us the rooms, style preference, and timeline." required></textarea>
                                <div class="invalid-feedback">Please share a few project details.</div>
                            </div>
                            <div class="col-12 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 pt-2">
                                <p class="modal-note mb-0">We typically respond within 48 hours.</p>
                                <button type="submit" class="btn btn-brand px-4" id="submitInquiryBtn">Submit Inquiry</button>
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-success mt-3 d-none" id="inquirySuccess" role="alert">
                        Thank you. Your inquiry has been received. Our team will contact you shortly.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container pb-4">
        <div class="footer-line d-flex flex-column flex-md-row justify-content-between gap-2">
            <p class="mb-0">&copy; 2020 Debarun Lahiri. All rights reserved.</p>
            <p class="mb-0">Designed with purpose and personality.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
