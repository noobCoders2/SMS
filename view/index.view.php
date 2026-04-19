<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>

         <div class="content">
            <!-- HEADER -->
            <div class="header">
                <div>
                <h1>Dashboard</h1>
                <p>Welcome to Student Management System</p>
                </div>
            </div>

            <!-- STATISTICS CARDS -->
            <div class="stats">
                <div class="card stat-card stat-total">
                    <div class="card-title">
                        <i class="ph ph-users stat-icon"></i>
                        <span>Total Students</span>
                    </div>
                    <h2><?php echo htmlspecialchars($total_students); ?></h2>
                    <p class="stat-change positive">+12% from last month</p>
                </div>
                <div class="card stat-card stat-employees">
                    <div class="card-title">
                        <i class="ph ph-user-gear stat-icon"></i>
                        <span>Total Employees</span>
                    </div>
                    <h2><?php echo htmlspecialchars($total_employees); ?></h2>
                    <p class="stat-change positive">+2 new this month</p>
                </div>
                <div class="card stat-card stat-revenue">
                    <div class="card-title">
                        <i class="ph ph-currency-dollar stat-icon"></i>
                        <span>Total Revenue</span>
                    </div>
                    <h2>₱<?php echo number_format($total_revenue, 2); ?></h2>
                    <p class="stat-change positive">+8% from last month</p>
                </div>
                <div class="card stat-card stat-attendance">
                    <div class="card-title">
                        <i class="ph ph-calendar-check stat-icon"></i>
                        <span>Today's Attendance</span>
                    </div>
                    <h2><?php echo htmlspecialchars($attendance_rate); ?>%</h2>
                    <p class="stat-change neutral">Rate today</p>
                </div>
            </div>

            <!-- CHARTS SECTION -->
            <div class="charts-grid">
                <!-- Monthly Enrollment Chart -->
                <div class="card chart-card">
                    <div class="card-title">
                        <h3>Monthly Enrollment</h3>
                    </div>
                    <div class="chart-container">
                        <canvas id="enrollmentChart"></canvas>
                    </div>
                </div>

                <!-- Revenue Chart -->
                <div class="card chart-card">
                    <div class="card-title">
                        <h3>Monthly Revenue</h3>
                    </div>
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>

                <!-- Student Distribution Chart -->
                <div class="card chart-card">
                    <div class="card-title">
                        <h3>Student Distribution by Program</h3>
                    </div>
                    <div class="chart-container">
                        <canvas id="distributionChart"></canvas>
                    </div>
                </div>

                <!-- Monthly Attendance Rate Chart -->
                <div class="card chart-card">
                    <div class="card-title">
                        <h3>Monthly Attendance Rate</h3>
                    </div>
                    <div class="chart-container">
                        <canvas id="attendanceChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- BOTTOM CARDS -->
            <div class="bottom-cards">
                <!-- Recent Enrollments -->
                <div class="card">
                    <div class="card-title">
                        <h3>Recent Enrollments</h3>
                        <a href="/StudentManagementSystem/student" class="view-all">View All</a>
                    </div>
                    <div class="enrollment-list">
                        <?php if (!empty($recent_enrollments)): ?>
                            <?php foreach ($recent_enrollments as $enrollment): ?>
                                <div class="enrollment-item">
                                    <div class="enrollment-info">
                                        <div class="enrollment-name">
                                            <?php echo htmlspecialchars($enrollment['first_name'] . ' ' . $enrollment['last_name']); ?>
                                        </div>
                                        <div class="enrollment-details">
                                            <?php echo htmlspecialchars($enrollment['student_id']); ?> • <?php echo htmlspecialchars($enrollment['program']); ?>
                                        </div>
                                    </div>
                                    <div class="enrollment-date">
                                        <?php echo date('M d, Y', strtotime($enrollment['created_at'])); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="no-data">No recent enrollments</div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="card">
                    <div class="card-title">
                        <h3>Upcoming Events</h3>
                        <a href="#" class="view-all">View Calendar</a>
                    </div>
                    <div class="events-list">
                        <div class="event-item">
                            <div class="event-icon">
                                <i class="ph ph-exam"></i>
                            </div>
                            <div class="event-info">
                                <div class="event-title">Midterm Examinations</div>
                                <div class="event-date">March 15-20, 2026</div>
                                <div class="event-description">Final examinations for all subjects</div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-icon">
                                <i class="ph ph-users-three"></i>
                            </div>
                            <div class="event-info">
                                <div class="event-title">Faculty Meeting</div>
                                <div class="event-date">March 25, 2026</div>
                                <div class="event-description">Monthly faculty coordination meeting</div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-icon">
                                <i class="ph ph-calendar-plus"></i>
                            </div>
                            <div class="event-info">
                                <div class="event-title">Enrollment Period</div>
                                <div class="event-date">April 1-30, 2026</div>
                                <div class="event-description">New student enrollment for next semester</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php require('partials/footer.php') ?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Monthly Enrollment Chart
const enrollmentCtx = document.getElementById('enrollmentChart').getContext('2d');
const enrollmentData = <?php echo json_encode($monthly_enrollment); ?>;
const enrollmentLabels = enrollmentData.map(item => {
    const date = new Date(item.month + '-01');
    return date.toLocaleDateString('en-US', { month: 'short', year: 'numeric' });
});
const enrollmentValues = enrollmentData.map(item => parseInt(item.count));

new Chart(enrollmentCtx, {
    type: 'line',
    data: {
        labels: enrollmentLabels,
        datasets: [{
            label: 'Enrollments',
            data: enrollmentValues,
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37, 99, 235, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    precision: 0
                }
            }
        }
    }
});

// Revenue Chart
const revenueCtx = document.getElementById('revenueChart').getContext('2d');
const revenueData = <?php echo json_encode($monthly_revenue); ?>;
const revenueLabels = revenueData.map(item => {
    const date = new Date(item.month + '-01');
    return date.toLocaleDateString('en-US', { month: 'short', year: 'numeric' });
});
const revenueValues = revenueData.map(item => parseFloat(item.revenue));

new Chart(revenueCtx, {
    type: 'bar',
    data: {
        labels: revenueLabels,
        datasets: [{
            label: 'Revenue (₱)',
            data: revenueValues,
            backgroundColor: '#10b981',
            borderColor: '#059669',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return '₱' + value.toLocaleString();
                    }
                }
            }
        }
    }
});

// Student Distribution Chart
const distributionCtx = document.getElementById('distributionChart').getContext('2d');
const distributionData = <?php echo json_encode($student_distribution); ?>;
const distributionLabels = distributionData.map(item => item.program);
const distributionValues = distributionData.map(item => parseInt(item.count));

new Chart(distributionCtx, {
    type: 'doughnut',
    data: {
        labels: distributionLabels,
        datasets: [{
            data: distributionValues,
            backgroundColor: [
                '#2563eb',
                '#10b981',
                '#f59e0b',
                '#ef4444',
                '#8b5cf6'
            ],
            borderWidth: 2,
            borderColor: '#ffffff'
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    padding: 20,
                    usePointStyle: true
                }
            }
        }
    }
});

// Monthly Attendance Rate Chart
const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
const attendanceData = <?php echo json_encode($monthly_attendance); ?>;
const attendanceLabels = attendanceData.map(item => {
    const date = new Date(item.month + '-01');
    return date.toLocaleDateString('en-US', { month: 'short', year: 'numeric' });
});
const attendanceValues = attendanceData.map(item => parseFloat(item.rate));

new Chart(attendanceCtx, {
    type: 'line',
    data: {
        labels: attendanceLabels,
        datasets: [{
            label: 'Attendance Rate (%)',
            data: attendanceValues,
            borderColor: '#8b5cf6',
            backgroundColor: 'rgba(139, 92, 246, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    callback: function(value) {
                        return value + '%';
                    }
                }
            }
        }
    }
});
</script>
