# AI-Solutions Ltd – Radiology AI Website

## Project Overview

AI-Solutions is a professional website for a Sunderland-based startup specialising in AI-powered radiology ML systems. The website promotes the company's software solutions, collects client inquiries, and provides a secure admin dashboard.

**Live Demo:** Local XAMPP deployment only (localhost)

**Course:** CET333 Product Development  
**Author:** Legakwa Selemogo  
**Date:** May 2026

---

## Features

### Public Pages
- **Homepage** – Hero carousel with 3 rotating images, service cards, statistics (50+ projects, 30+ clients, 5+ years, 24/7 support), client testimonials, upcoming events
- **Services** – Four AI software products: Triage, Lesion Detection, Workflow Optimisation, Reporting
- **Case Studies** – Four hospital case studies with Challenge, Solution, and Outcomes sections (Previous/Next navigation)
- **Testimonials** – Client reviews with star ratings and a submission form (pending approval)
- **Blog** – Blog posts listing with excerpts and full content pages
- **Gallery** – Photo carousel (6 images) and video carousel with play controls
- **Events** – Upcoming events with Register Interest buttons
- **Contact** – 7-field contact form (name, email, phone, company, country, job title, job details)

### Admin Area
- **Secure Login** – Password-protected admin login with password hashing
- **Dashboard** – View all customer inquiries in a table (ID, name, email, phone, company, country, job title, details, submitted_at)
- **Testimonial Management** – Approve or delete user-submitted testimonials
- **Session Management** – Login session tracking and last login timestamp

---

## Technology Stack

| Technology | Purpose |
|------------|---------|
| PHP 8.2 | Backend logic |
| MySQL | Database storage |
| XAMPP | Local server (Apache + MySQL + PHP) |
| Bootstrap 5.3.2 | Responsive frontend framework |
| HTML/CSS | Structure and styling |
| JavaScript | Carousels and interactive elements |
| Font Awesome | Icons and star ratings |

---

## Database Structure

Database: `selemogo_db`

| Table | Purpose |
|-------|---------|
| `admins` | Admin username, hashed password, last_login |
| `inquiries` | Contact form submissions (7 fields + timestamp) |
| `testimonials` | Client reviews with rating, service used, status (pending/approved) |
| `blog_posts` | Blog articles with title, content, author, date |
| `events` | Upcoming events with title, description, date, location |

---

## Security Features

- **Password Hashing** – `password_hash()` and `password_verify()`
- **SQL Injection Prevention** – PDO prepared statements
- **XSS Prevention** – `htmlspecialchars()` on all user output
- **Session Management** – `session_start()` for login state
- **Admin Panel Visibility** – Hidden from regular users (only visible when logged in)

---

## Local Deployment Instructions

### Requirements
- XAMPP (Apache + MySQL + PHP)
- 4GB RAM minimum
- Linux / Windows / macOS

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/mrselemogo777-gif/AI-Solutions---website.git
