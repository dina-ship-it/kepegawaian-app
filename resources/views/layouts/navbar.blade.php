<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">SIP2D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lecturers.index') }}">Lecturers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('students.index') }}">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('research.index') }}">Research</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services.index') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('achievements.index') }}">Achievements</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
