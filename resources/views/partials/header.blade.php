<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Expense Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/income">Income</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="/expenses">Expenses</a>
          </li>
        @endif
      </ul>
      @if (Auth::check())
      <button class="ml-auto btn btn-link">
        <a href="/logout" >Logout</a>
      </button>
      @else
      <button class="ml-auto btn btn-link">
        <a href="/login" >Login</a>
      </button>
      @endif
    </div>
  </nav>

