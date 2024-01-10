      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('mentor')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('learningpath')}}">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Learning Path</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logbooks_mentor')}}">
              <i class="mdi mdi-note-text menu-icon"></i>
              <span class="menu-title">Logbook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('task_mentor')}}">
              <i class="mdi mdi-book-open-variant menu-icon"></i>
              <span class="menu-title">Tugas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mentees')}}">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Akun</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->