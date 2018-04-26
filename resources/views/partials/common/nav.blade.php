<nav class="navbar navbar-expand-sm navbar-light main__navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.html" class="navbar-brand">
            <img src="{{asset('images/logo.png')}}" alt="Fulcrum Logo" class="img-fluid main__navbar--logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="col">
                <div class="form-group main__navbar--search">
                    <input type="text"
                           class="main__navbar--input form-control"
                           placeholder="Search"  id="keyword" required
                           style="background-image: url({{asset('images/utilities/searchicon.png')}});">
                </div>
            </div>
            <ul class="navbar-nav ml-auto main__navbar--nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Agence</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>