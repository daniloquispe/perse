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
			<li><a href="/quienes-somos">Quiénes Somos</a></li>
			<li><a href="/contacto">Contáctenos</a></li>
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
			<li><a href="/politicas/politicas-de-envio">Políticas de Envío</a></li>
			<li><a href="/politicas/politicas-de-privacidad">Políticas de Privacidad</a></li>
			<li><a href="/politicas/politicas-de-cookies">Políticas de Cookies</a></li>
			<li><a href="/politicas/politicas-de-cambios-y-devoluciones">Políticas de Devoluciones</a></li>
			<li><a href="/politicas/terminos-y-condiciones">Términos y Condiciones</a></li>
		</ul>
	</nav>
	<nav>
		<p class="title">Libro de Reclamaciones</p>
		<ul>
			<li><a href="#"><img src="{{ asset('images/complaints-book.png') }}" alt="Libro de Reclamaciones" /></a></li>
		</ul>
	</nav>
</div>
