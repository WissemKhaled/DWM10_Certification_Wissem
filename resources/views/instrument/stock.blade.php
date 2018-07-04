@include('templates.header')
<h2> Modifier le stock de l'article</h2>
	<form class="" action="/stock" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $instru->id }}">
    <label for="stock"> Stock : </label>
		<input id="stock" type="number" name="stock" value="{{ $instru->stock }}">


		<input id="title" type="text" name="title"  class="hidden" selected value="{{ $instru->title }}">


		<input id="price" type="number" name="price" class="hidden" selected value="{{ $instru->price }}">
		<select id="material" class="hidden" name="material">
		@foreach($materials as $material)
			@if($instru->materials_id == $material->id)
				<option  selected value="{{ $material->id }}">{{ $material->name }}</option>
			@else
				<option  value="{{ $material->id }}">{{ $material->name }}</option>
			@endif
		@endforeach
		<input type="submit" name="" value="Editer">
	</form>
@include('templates.footer')
