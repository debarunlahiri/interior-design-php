document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('img[data-fallback]').forEach((img) => {
        img.addEventListener('error', () => {
            const fallback = img.getAttribute('data-fallback');
            if (fallback && img.src !== fallback) {
                img.src = fallback;
            }
        });
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.18 }
    );

    document.querySelectorAll('.fade-in-up').forEach((el) => observer.observe(el));

    const customerInfoForm = document.getElementById('customerInfoForm');
    const inquirySuccess = document.getElementById('inquirySuccess');
    const submitInquiryBtn = document.getElementById('submitInquiryBtn');

    if (customerInfoForm && submitInquiryBtn) {
        customerInfoForm.addEventListener('submit', (event) => {
            event.preventDefault();

            if (!customerInfoForm.checkValidity()) {
                customerInfoForm.classList.add('was-validated');
                return;
            }

            submitInquiryBtn.disabled = true;
            submitInquiryBtn.textContent = 'Sending...';

            setTimeout(() => {
                customerInfoForm.reset();
                customerInfoForm.classList.remove('was-validated');
                submitInquiryBtn.disabled = false;
                submitInquiryBtn.textContent = 'Submit Inquiry';

                if (inquirySuccess) {
                    inquirySuccess.classList.remove('d-none');
                }
            }, 500);
        });
    }

    const customerInfoModal = document.getElementById('customerInfoModal');
    if (customerInfoModal && inquirySuccess && customerInfoForm) {
        customerInfoModal.addEventListener('show.bs.modal', () => {
            inquirySuccess.classList.add('d-none');
            customerInfoForm.classList.remove('was-validated');
        });
    }

    const imagePreviewModalEl = document.getElementById('imagePreviewModal');
    const previewModalImage = document.getElementById('previewModalImage');
    const previewModalCaption = document.getElementById('previewModalCaption');
    if (imagePreviewModalEl && previewModalImage && previewModalCaption) {
        const previewModal = bootstrap.Modal.getOrCreateInstance(imagePreviewModalEl);

        document.querySelectorAll('[data-preview-trigger]').forEach((trigger) => {
            trigger.addEventListener('click', () => {
                const title = trigger.getAttribute('data-title') || 'Project Preview';
                const primary = trigger.getAttribute('data-image');
                const fallback = trigger.getAttribute('data-fallback');
                const imageEl = trigger.querySelector('img');
                const selectedSrc = primary || (imageEl ? imageEl.currentSrc || imageEl.src : '');

                previewModalImage.src = selectedSrc;
                previewModalImage.alt = title;
                previewModalCaption.textContent = title;

                previewModalImage.onerror = () => {
                    if (fallback) {
                        previewModalImage.src = fallback;
                    }
                };

                previewModal.show();
            });
        });
    }
});
