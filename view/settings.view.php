<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
?>

<div class="settings-container">
  <div class="settings-header">
    <div>
      <h1>System Settings</h1>
      <p>Configure system preferences and controls</p>
    </div>
  </div>

  <div class="settings-grid">
    <div class="card">
      <div class="card-title">
        ⚙️ <span>General Settings</span>
      </div>

      <div class="form-group">
        <label>School Name</label>
        <input type="text" value="ABC College">
      </div>

      <div class="form-group">
        <label>School Year</label>
        <input type="text" value="2024-2025">
      </div>

      <div class="form-group">
        <label>Semester</label>
        <select>
          <option>1st Semester</option>
          <option>2nd Semester</option>
        </select>
      </div>
    </div>

    <!-- User Management -->
    <div class="card">
      <div class="card-title">
        👥 <span>User Management</span>
      </div>

      <div class="list-item">Manage User Accounts</div>
      <div class="list-item">Role Permissions</div>
      <div class="list-item">Activity Logs</div>
    </div>

    <!-- Database -->
    <div class="card">
      <div class="card-title">
        💾 <span>Database & Backup</span>
      </div>

      <div class="backup-card">
        <h4 class="sub-text">Last Backup:</h4>
        <p>March 3, 2026</p>
      </div>
      
      <div class="backup-card">
        <h4>Payroll Summary</h4>
        <p>Employee salary data</p>
      </div>

      <button class="btn-outline">Create Backup</button>
      <button class="btn-light">Backup Schedule</button>
    </div>

    <!-- Security -->
    <div class="card">
      <div class="card-title">
        🔐 <span>Security Settings</span>
      </div>

      <div class="toggle-row">
        <span>Two-Factor Authentication</span>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
      </div>

      <div class="form-group">
        <label>Session Timeout</label>
        <select>
          <option>15 minutes</option>
          <option>30 minutes</option>
        </select>
      </div>
    </div>

    <!-- Notifications -->
    <div class="card">
      <div class="card-title">
        🔔 <span>Notifications</span>
      </div>

      <div class="toggle-row">
        <span>Email Notifications</span>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <div class="toggle-row">
        <span>SMS Notifications</span>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- System Info -->
    <div class="card">
      <div class="card-title">
        🖥️ <span>System Info</span>
      </div>

      <div class="info-row">
        <span>Version</span>
        <strong>v1.0.0</strong>
      </div>

      <div class="info-row">
        <span>Status</span>
        <strong class="green">Connected</strong>
      </div>

      <div class="info-row">
        <span>Users</span>
        <strong>1,335</strong>
      </div>

    </div>

  </div>
</div>
      <?php require('partials/footer.php') ?>
