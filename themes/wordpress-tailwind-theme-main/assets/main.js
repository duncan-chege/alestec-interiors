document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu functionality (off-canvas drawer)
  const mobileToggle = document.getElementById("mobile-menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileClose = document.getElementById("mobile-menu-close");
  const mobileOverlay = document.getElementById("mobile-menu-overlay");

  if (mobileToggle && mobileMenu && mobileOverlay) {
    const openMobileMenu = () => {
      mobileMenu.classList.remove("translate-x-full");
      mobileOverlay.classList.remove("opacity-0", "invisible", "pointer-events-none");
      mobileToggle.setAttribute("aria-expanded", "true");
      document.body.classList.add("overflow-hidden");
    };

    const closeMobileMenu = () => {
      mobileMenu.classList.add("translate-x-full");
      mobileOverlay.classList.add("opacity-0", "invisible", "pointer-events-none");
      mobileToggle.setAttribute("aria-expanded", "false");
      document.body.classList.remove("overflow-hidden");
    };

    mobileToggle.addEventListener("click", () => {
      const isExpanded = mobileToggle.getAttribute("aria-expanded") === "true";
      isExpanded ? closeMobileMenu() : openMobileMenu();
    });

    mobileClose?.addEventListener("click", closeMobileMenu);
    mobileOverlay.addEventListener("click", closeMobileMenu);
  }

  // Services carousel prev/next controls
  const servicesTrack = document.getElementById("services-track");
  const servicesPrev = document.getElementById("services-prev");
  const servicesNext = document.getElementById("services-next");

  if (servicesTrack && servicesPrev && servicesNext) {
    const scrollByCard = (direction) => {
      const card = servicesTrack.querySelector("a");
      if (!card) return;

      const gap = parseFloat(getComputedStyle(servicesTrack).columnGap) || 0;
      const amount = card.getBoundingClientRect().width + gap;

      servicesTrack.scrollBy({ left: direction * amount, behavior: "smooth" });
    };

    servicesPrev.addEventListener("click", () => scrollByCard(-1));
    servicesNext.addEventListener("click", () => scrollByCard(1));
  }

  // Play .reveal animations only once their containing .reveal-section scrolls into view.
  // Watching the section (not the transformed .reveal elements themselves) keeps the
  // intersection math stable — a .reveal element's own "paused" slide-offset can push
  // most of its box outside the viewport, which would throw off a per-element threshold.
  const revealSections = document.querySelectorAll(".reveal-section");

  if (revealSections.length) {
    const playReveals = (section) => {
      section.querySelectorAll(".reveal").forEach((el) => {
        el.style.animationPlayState = "running";
      });
    };

    if ("IntersectionObserver" in window) {
      const revealObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              playReveals(entry.target);
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.2 }
      );

      revealSections.forEach((section) => revealObserver.observe(section));
    } else {
      // No IntersectionObserver support: just play immediately rather than staying stuck paused
      revealSections.forEach(playReveals);
    }
  }

  // Lazy loading for images (if not using WordPress native lazy loading)
  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.removeAttribute("data-src");
            observer.unobserve(img);
          }
        }
      });
    });

    const lazyImages = document.querySelectorAll("img[data-src]");
    lazyImages.forEach((img) => imageObserver.observe(img));
  }
});
