<thead class="table table-bordered">
 
    <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>
    <th scope="col" class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></th>
    <th scope="col" class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></th>
    <th scope="col" class="{{ setActivo('contactos') }}"><a href="contactos">Contactos</a></th>
    @guest
    <th><a href="{{ route('login') }}">Login</a></th>
    @else
    <th>
        <a href="#" onclick="event.preventDefual();
           document.getElementById('logout-form').submit();">Cerrar Sesión</a>
    </th>
    @endguest
    </tr>
</thead>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: nome;">
    @csrf
</form>


      