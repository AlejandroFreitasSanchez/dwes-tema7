<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link {{setActive('welcome')}}" href="{{ route('welcome') }}">Home</a>
                <a class="nav-item nav-link {{setActive('cortos.index')}}" href="{{ route('cortos.index') }}">Cortos</a></div>
                <a class="nav-item nav-link {{setActive('directores.index')}}" href="{{ route('directores.index') }}">Directores</a></div>
            </div>
        </div>
    </nav>
</nav>