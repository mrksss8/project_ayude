<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Welfare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('navigate', 'index') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'causes') }}" class="nav-link">Causes</a></li>
          <li class="nav-item active"><a href="{{ route('navigate', 'donation') }}" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'blog') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'gallery') }}" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'events') }}" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="{{ route('navigate', 'contact') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
</nav>