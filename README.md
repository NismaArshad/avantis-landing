
- disclaimer: readme is writen using chatgpt

### Install WordPress
Set up a local WordPress environment using:
- LocalWP (recommended)

### Add Theme
Copy theme folder into: wp-content/themes/avantis-landing

### Set Homepage
- Homepage: "Sample Page" 
- Display: Static Page


### Advanced Custom Fields (ACF)
Used for:
- Hero title & subtitle
- About section content
- About image
- Optional testimonial role field

### Testimonials CPT
Supports:
- Title (used as Name)
- Content (used as Quote)
Optional ACF field:
- Role (text field)

##  Design Decisions

### 1. Lightweight Custom UI
No CSS frameworks (Bootstrap/Tailwind) were used to ensure:
- Clean custom styling
- Full control over layout
- Faster performance

### 2. Flexbox + Grid Layout
- Grid used for Features & About section
- Flexbox used for footer & slider
- Ensures responsive behavior across devices

---

### 3. ACF for Flexibility
ACF was used to allow:
- Easy admin editing of content
- Non-technical content management

---

### 4. Testimonials via CPT
Chosen instead of static PHP array to demonstrate:
- WordPress dynamic content handling
- Real-world CMS structure

---

### 5. Vanilla JavaScript
Used for:
- Contact form validation
- Testimonial slider

No external libraries used to keep theme lightweight.

---

## ⚖️ Trade-offs

### 1. No Page Builder
- Elementor/WPBakery intentionally avoided
- Result: more development effort but cleaner codebase

---

### 2. Minimal Backend Logic
- Contact form does not send emails
- Only frontend validation + success message
- (Can be extended with wp_mail if required)

---

### 3. Simple Slider Implementation
- Custom JS slider instead of Swiper.js
- Lightweight but less feature-rich

---

## 🧪 Features Implemented

- Custom WordPress Theme
- Custom Post Type (Testimonials)
- ACF Integration
- Responsive Design (Mobile / Tablet / Desktop)
- Vanilla JavaScript Interactions
- Form Validation
- Clean Semantic HTML Structure

---

## ⏱ Time Spent

Approximately:

- Theme setup: 1 hour  
- Layout & UI design: 2–3 hours  
- WordPress integration (CPT + ACF): 1–2 hours  
- JavaScript features: 1 hour  
- Debugging & responsiveness: 1–2 hours  

**Total: ~3.5 hours**

---

## 📌 Notes

- Designed for educational SaaS/marketing use case
- Fully responsive and mobile-friendly
- Built with scalability in mind
- Ready for production-level enhancements (email handling, animations, etc.)

---

## 👨‍💻 Author

Nisma Arshad  
WordPress Developer Candidate