document.addEventListener("DOMContentLoaded", () => {

    //contact form
    const form = document.querySelector("#contactForm");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            let isValid = true;

            const name = form.name.value.trim();
            const email = form.email.value.trim();
            const message = form.message.value.trim();

            document.querySelectorAll(".error").forEach(el => el.textContent = "");

            if (name.length < 2) {
                document.getElementById("nameError").textContent = "Name must be at least 2 characters";
                isValid = false;
            }

            if (!email.includes("@")) {
                document.getElementById("emailError").textContent = "Enter a valid email";
                isValid = false;
            }

            if (message.length < 10) {
                document.getElementById("messageError").textContent = "Message must be at least 10 characters";
                isValid = false;
            }

            if (isValid) {
                document.getElementById("formMessage").textContent = "✅ Message sent successfully!";
                form.reset();
            }
        });
    }

    //testamoniasl
    const slidesContainer = document.querySelector(".slides");
    const slides = document.querySelectorAll(".slide");
    const nextBtn = document.getElementById("next");
    const prevBtn = document.getElementById("prev");

    if (!slidesContainer || slides.length === 0 || !nextBtn || !prevBtn) {
        console.log("Slider not found");
        return;
    }

    const visibleSlides = 2;
    const totalSlides = slides.length;

    let index = 0;

    function updateSlider() {
        const slideWidth = 100 / visibleSlides;
        slidesContainer.style.transform = `translateX(-${index * slideWidth}%)`;
    }

    nextBtn.addEventListener("click", () => {
        console.log("NEXT CLICKED");
        index = (index < totalSlides - visibleSlides) ? index + 1 : 0;
        updateSlider();
    });

    prevBtn.addEventListener("click", () => {
        console.log("PREV CLICKED");
        index = (index > 0) ? index - 1 : totalSlides - visibleSlides;
        updateSlider();
    });

    setInterval(() => {
        index = (index < totalSlides - visibleSlides) ? index + 1 : 0;
        updateSlider();
    }, 4000);

});