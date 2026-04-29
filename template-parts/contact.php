<section id="contact" class="contact-section">
    <div class="container">
        <h2>Get in Touch</h2>
        <p class="contact-subtext">We’d love to hear from you. Send us a message and we’ll respond shortly.</p>

        <form id="contactForm" method="POST" novalidate>
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
                <small class="error" id="nameError"></small>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" required>
                <small class="error" id="emailError"></small>
            </div>

            <div class="form-group">
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <small class="error" id="messageError"></small>
            </div>

            <button type="submit" class="btn">Send Message</button>
        </form>

        <div id="formMessage" class="form-success"></div>
    </div>
</section>