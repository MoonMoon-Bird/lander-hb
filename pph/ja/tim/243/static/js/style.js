const slideDown = (el) => {
  el.style.height = "auto";
  let h = el.offsetHeight;
  el.style.height = h + "px";
  el.animate([{ height: 0 }, { height: h + "px" }], { duration: 300 });
};

const slideUp = (el) => {
  el.style.height = 0;
};

const accordions = document.querySelectorAll("ul.include-accordion");
accordions.forEach((accordion) => {
  const accordionBtns = accordion.querySelectorAll(".accordionBtn");
  accordionBtns.forEach((accordionBtn, index) => {
    accordionBtn.addEventListener("click", (e) => {
      e.target.parentNode.classList.toggle("active");
      const content = accordionBtn.nextElementSibling;

      if (e.target.parentNode.classList.contains("active")) {
        slideDown(content);
      } else {
        slideUp(content);
      }

      let container = accordion.closest(".scroll-control");
      if (accordionBtn.parentNode.classList.contains("active") == false && container !== null) {
        container.classList.remove("active");
      } else if (container !== null) {
        container.classList.add("active");
      }
    });
  });
});
