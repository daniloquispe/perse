<div class="footer-menu-box">
	<div>
		{{-- Logo --}}
		<img src="{{ asset('images/footer-logo.png') }}" alt="Persé Librerías" />
		{{-- Social links --}}
		<x-site-footer.social-links />
	</div>
	<nav>
		<p class="title">Sobre nosotros</p>
		<ul>
			<li><a href="{{ route('page.id-' . \App\PageRole::AboutUs->value) }}">Quiénes Somos</a></li>
			<li><a href="{{ route('page.id-' . \App\PageRole::Contact->value) }}">Contáctenos</a></li>
			<li><a href="#">Suscríbete</a></li>
			<li><a href="#">Blog</a></li>
		</ul>
	</nav>
	<nav>
		<p class="title">Mi cuenta</p>
		<ul>
			<li><a href="#">Iniciar Sesión</a></li>
			<li><a href="#">Ver mis Pedidos</a></li>
			<li><a href="#">Crear Cuenta</a></li>
			<li><a href="#">Recuperar Contraseña</a></li>
		</ul>
	</nav>
	<nav>
		<p class="title">Atención al cliente</p>
		<ul>
			<li><a href="{{ route('page.id-' . \App\PageRole::DeliveryPolitics->value) }}">Políticas de Envío</a></li>
			<li><a href="{{ route('page.id-' . \App\PageRole::PrivacyPolitics->value) }}">Políticas de Privacidad</a></li>
			<li><a href="{{ route('page.id-' . \App\PageRole::CookiesPolitics->value) }}">Políticas de Cookies</a></li>
			<li><a href="{{ route('page.id-' . \App\PageRole::ReturningPolitics->value) }}">Políticas de Devoluciones</a></li>
			<li><a href="{{ route('page.id-' . \App\PageRole::Terms->value) }}">Términos y Condiciones</a></li>
		</ul>
	</nav>
	<nav>
		<p class="title">Libro de Reclamaciones</p>
		<ul>
			<li><a href="{{ route('page.id-' . \App\PageRole::ComplaintsBook->value) }}"><img src="{{ asset('images/complaints-book.png') }}" alt="Libro de Reclamaciones" /></a></li>
		</ul>
	</nav>
</div>
