document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu functionality
  const mobileToggle = document.getElementById("mobile-menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");

      // Toggle aria-expanded for accessibility
      const isExpanded = mobileToggle.getAttribute("aria-expanded") === "true";
      mobileToggle.setAttribute("aria-expanded", !isExpanded);
    });
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
