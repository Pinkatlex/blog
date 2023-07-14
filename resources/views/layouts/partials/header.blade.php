<div class="row fw-bolder bg-black bg-gradient text-white mb-5">
<div class="col-12 p-4">
    <h2>Blog de cursos</h2>
    <nav>
        <ul class="nav nav-tabs  justify-content-center">
            <li class="nav-link {{request()->routeIs('home') ? 'active' : ""}}"><a href="{{route('home')}}">Home</a></li>
            <li class="nav-link {{request()->routeIs('cursos.*') ? 'active' : ""}}"><a href="{{route('cursos.index')}}" >Cursos</a></li>
            <li class="nav-link {{request()->routeIs('nosotros') ? 'active' : ""}}"><a href="{{route('nosotros')}}">Nosotros</a></li>
            <li class="nav-link {{request()->routeIs('contactanos.index') ? 'active' : ""}}"><a href="{{route('contactanos.index')}}">Contáctanos</a></li>
        </ul>
    </nav>
</div>
</div>