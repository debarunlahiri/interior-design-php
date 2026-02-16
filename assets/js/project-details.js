(function () {
    const projects = {
        'calm-scandinavian-living-room': {
            title: 'Calm Scandinavian Living Room',
            category: 'Residential Transformation',
            summary: 'A bright, layered living room focused on natural light, soft textures, and clean-lined furniture for everyday comfort.',
            image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-1.svg',
            location: 'San Francisco, CA',
            area: '420 sq ft',
            timeline: '5 weeks',
            budget: '$28k',
            scope: ['Space planning and furniture zoning', 'Custom TV wall and lighting concept', 'Soft furnishing and styling package'],
            materials: ['White oak veneer', 'Linen upholstery', 'Matte brass accents']
        },
        'modern-earthy-bedroom': {
            title: 'Modern Earthy Bedroom',
            category: 'Bedroom Makeover',
            summary: 'A restful primary bedroom with layered neutrals, ambient lighting, and integrated storage for a hotel-like experience.',
            image: 'https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-2.svg',
            location: 'Seattle, WA',
            area: '280 sq ft',
            timeline: '4 weeks',
            budget: '$16k',
            scope: ['Bed-back feature wall design', 'Lighting and drapery planning', 'Accessory and decor curation'],
            materials: ['Textured paint', 'Warm walnut laminate', 'Performance fabric']
        },
        'artful-dining-concept': {
            title: 'Artful Dining Concept',
            category: 'Dining Styling',
            summary: 'A statement dining zone balancing sculptural furniture, soft stone tones, and dramatic pendant lighting.',
            image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-3.svg',
            location: 'Palo Alto, CA',
            area: '210 sq ft',
            timeline: '3 weeks',
            budget: '$12k',
            scope: ['Dining layout optimization', 'Feature lighting selection', 'Art and decor integration'],
            materials: ['Engineered stone top', 'Velvet chairs', 'Smoked glass lighting']
        },
        'luxury-kitchen-remodel': {
            title: 'Luxury Kitchen Remodel',
            category: 'Kitchen Renovation',
            summary: 'A high-performance kitchen with durable finishes, concealed storage, and clean modern lines built for daily use.',
            image: 'https://images.pexels.com/photos/6489127/pexels-photo-6489127.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-1.svg',
            location: 'Austin, TX',
            area: '360 sq ft',
            timeline: '7 weeks',
            budget: '$44k',
            scope: ['Cabinetry redesign and appliance planning', 'Countertop and backsplash detailing', 'Task + ambient lighting implementation'],
            materials: ['Quartz countertops', 'Matte black hardware', 'Woodgrain base cabinets']
        },
        'executive-office-lounge': {
            title: 'Executive Office Lounge',
            category: 'Commercial Interiors',
            summary: 'A refined office lounge built to support client meetings, focused work, and acoustic comfort in a compact footprint.',
            image: 'https://images.pexels.com/photos/6585755/pexels-photo-6585755.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-2.svg',
            location: 'New York, NY',
            area: '520 sq ft',
            timeline: '6 weeks',
            budget: '$38k',
            scope: ['Work-lounge zoning strategy', 'Acoustic panel and lighting design', 'Brand-aligned styling direction'],
            materials: ['Acoustic wall systems', 'Laminate paneling', 'Luxury vinyl flooring']
        },
        'boutique-cafe-interior': {
            title: 'Boutique Cafe Interior',
            category: 'Hospitality Design',
            summary: 'A warm and inviting cafe interior that improves circulation, seating density, and brand storytelling.',
            image: 'https://images.pexels.com/photos/5824907/pexels-photo-5824907.jpeg?auto=compress&cs=tinysrgb&w=1600',
            fallback: 'assets/images/portfolio-3.svg',
            location: 'Chicago, IL',
            area: '980 sq ft',
            timeline: '8 weeks',
            budget: '$62k',
            scope: ['Bar counter and seating planning', 'Signage and visual identity integration', 'Material + lighting mood development'],
            materials: ['Natural stone counters', 'Powder-coated metal', 'Warm ambient pendants']
        }
    };

    const params = new URLSearchParams(window.location.search);
    const slug = params.get('slug') || 'luxury-kitchen-remodel';
    const project = projects[slug] || projects['luxury-kitchen-remodel'];

    const setText = (id, value) => {
        const el = document.getElementById(id);
        if (el) el.textContent = value;
    };

    setText('projectCategory', project.category);
    setText('projectTitle', project.title);
    setText('projectSummary', project.summary);
    setText('projectLocation', project.location);
    setText('projectArea', project.area);
    setText('projectTimeline', project.timeline);
    setText('projectBudget', project.budget);

    const imageEl = document.getElementById('projectImage');
    if (imageEl) {
        imageEl.src = project.image;
        imageEl.alt = project.title;
        imageEl.onerror = () => {
            imageEl.src = project.fallback;
        };
    }

    const renderList = (id, items) => {
        const el = document.getElementById(id);
        if (!el) return;
        el.innerHTML = '';
        items.forEach((item) => {
            const li = document.createElement('li');
            li.textContent = item;
            el.appendChild(li);
        });
    };

    renderList('projectScope', project.scope);
    renderList('projectMaterials', project.materials);
})();
