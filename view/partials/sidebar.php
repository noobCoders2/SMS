<div class="sidebar">
        <div class="menu-btn">
          <i class="ph-bold ph-caret-left"></i>
        </div>
        <!-- header Sidebar -->
        <div class="head">
          <div class="user-img">
            <img src="./assets/img/logo.png" alt="" />
          </div>
          <div class="user-details">
            <p class="title">Ericson Academy</p>
            <p class="name">Management System</p>
          </div>
        </div>
        <!-- main navigation bar -->
        <div class="nav">
          <div class="menu">
            <p class="title">Main</p>
            <ul>
              <li class="<?= uriIs('/StudentManagementSystem/') || uriIs('/StudentManagementSystem/index') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/">
                  <i class="icon ph-bold ph-squares-four"></i>
                  <span class="text">Dashboard</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/student') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/student">
                  <i class="icon ph-bold ph-student"></i>
                  <span class="text">Student Management</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/employee') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/employee">
                  <i class="icon ph-bold ph-user-list"></i>
                  <span class="text">Employee Management</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-user-circle-gear"></i>
                  <span class="text">Academic Management</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="/StudentManagementSystem/academic">
                      <span class="text">Courses</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Subjects</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Schedule</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/enrollment') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/enrollment">
                  <i class="icon ph-bold ph-user-plus"></i>
                  <span class="text">Enrollment</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/grades') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/grades">
                  <i class="icon ph-bold ph-folder-user"></i>
                  <span class="text">Grade Management</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/attendance') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/attendance">
                  <i class="icon ph-bold ph-user-check"></i>
                  <span class="text">Attendance</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/payments') || uriIs('/StudentManagementSystem/fee') ? 'active' : '' ?>">
                <a href="#">
                  <i class="icon ph-bold ph-chart-bar"></i>
                  <span class="text">Accounting Management</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li class="<?= uriIs('/StudentManagementSystem/payments') ? 'active' : '' ?>">
                    <a href="/StudentManagementSystem/payments">
                      <span class="text">Payment</span>
                    </a>
                  </li>
                  <li class="<?= uriIs('/StudentManagementSystem/fee') ? 'active' : '' ?>">
                    <a href="/StudentManagementSystem/fee">
                      <span class="text">Fee Structure</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/payroll') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/payroll">
                  <i class="icon ph-bold ph-paypal-logo"></i>
                  <span class="text">Payroll</span>
                </a>
              </li>
              <li class="<?= uriIs('/StudentManagementSystem/reports') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/reports">
                  <i class="icon ph-bold ph-trend-up"></i>
                  <span class="text">Reports</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="menu">
            <p class="title">System Settings</p>
            <ul>
              <li class="<?= uriIs('/StudentManagementSystem/setting') ? 'active' : '' ?>">
                <a href="/StudentManagementSystem/setting">
                  <i class="icon ph-bold ph-gear"></i>
                  <span class="text">Settings</span>
                </a>
              </li>
            </ul>
        </div>
</div>