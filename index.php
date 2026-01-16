<?php
$pageTitle = "Student Management System";
$bodyClass = "landing-page";
require_once 'includes/header.php';
?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Complete Student Management Solution</h1>
                <p class="hero-description">
                    Streamline academic operations, track student progress, and manage courses efficiently with our comprehensive system.
                </p>
                <div class="hero-buttons">
                    <a href="auth/login.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-sign-in-alt"></i> Admin Login
                    </a>
                    <a href="student/login.php" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-user-graduate"></i> Student Portal
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/dashboard-preview.png" alt="Dashboard Preview">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Key Features</h2>
            <p class="section-description">Everything you need to manage educational institutions effectively</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Student Management</h3>
                    <p>Complete student profiles, enrollment, attendance tracking, and academic records management.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Course Management</h3>
                    <p>Create, schedule, and manage courses with assignments, materials, and student enrollment.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Results & Analytics</h3>
                    <p>Record marks, generate report cards, and analyze student performance with detailed reports.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Attendance System</h3>
                    <p>Track student attendance, generate reports, and send notifications for absences.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Fee Management</h3>
                    <p>Manage fee structures, track payments, generate invoices, and send payment reminders.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Reporting Dashboard</h3>
                    <p>Interactive dashboards with real-time analytics and customizable reports.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <i class="fas fa-users"></i>
                    <h3>1,250+</h3>
                    <p>Students Managed</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>85+</h3>
                    <p>Courses Offered</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-chart-bar"></i>
                    <h3>98%</h3>
                    <p>User Satisfaction</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-clock"></i>
                    <h3>24/7</h3>
                    <p>System Availability</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Transform Your Institution?</h2>
            <p>Join hundreds of educational institutions using our system to streamline their operations.</p>
            <div class="cta-buttons">
                <a href="auth/login.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-rocket"></i> Get Started Now
                </a>
                <a href="contact.php" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-envelope"></i> Contact Sales
                </a>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>