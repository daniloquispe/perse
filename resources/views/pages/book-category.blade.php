@extends('layouts.guest')

@section('title', 'Comics y Manga :: Persé Librerías')

@section('content')
	<div class="container-box">
		<x-breadcrumbs>Comics y Manga</x-breadcrumbs>
	</div>
	<div class="container-box content-wrapper book-category">
		<div class="filters-col">
			<div class="filters-box">
				<div class="title">Filtrar por:</div>
				<div class="content">
					<div>
						<p>Subcategory</p>
						<ul>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
						</ul>
						<button type="button" class="more-filters-button">Ver más 197</button>
					</div>
					<div>
						<p>Subcategory</p>
						<ul>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
						</ul>
						<button type="button" class="more-filters-button">Ver más 197</button>
					</div>
					<div>
						<p>Subcategory</p>
						<ul>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
							<li>
								<input type="checkbox" />
								<label>Filter</label>
							</li>
						</ul>
						<button type="button" class="more-filters-button">Ver más 197</button>
					</div>
				</div>
			</div>
		</div>
		<div class="center">
			<h2>Comics y Manga</h2>
			<div class="description-wrapper">
				<div>Se ha encontrado 111 libros</div>
				<div>
					<label>Ordenar por:</label>
					<select>
						<option>Relevancia</option>
						<option>Más reciente</option>
						<option>Precios más alto</option>
						<option>Precios más bajo</option>
						<option>Nombre, creciente</option>
						<option>Nombre, decreciente</option>
					</select>
				</div>
			</div>
			<div class="books">
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
				<x-book-list.item title="Book title" author="Book author" url="#" />
			</div>
			<button type="button" class="more-button">Mostrar más</button>
		</div>
	</div>
@endsection
