      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('learnings')}}">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Learning Path</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logbooks')}}">
              <i class="mdi mdi-note-text menu-icon"></i>
              <span class="menu-title">Logbook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('task')}}">
              <i class="mdi mdi-book-open-variant menu-icon"></i>
              <span class="menu-title">Tugas</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->