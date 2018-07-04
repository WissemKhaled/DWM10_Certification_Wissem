@include('templates.header')
<h2> Modifier le registre d'un instrument</h2>
	<form class="" action="/update" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $instru->id }}">

    <label for="title"> Nom de l'instrument : </label>
		<input id="title" type="text" name="title" value="{{ $instru->title }}">

    <label for="price"> Prix : </label>
		<input id="price" type="number" name="price" value="{{ $instru->price }}">

		<label for="material"> Composant :</label>
    	<select id="material" class="" name="material">
    		@foreach($materials as $material)
    			@if($instru->materials_id == $material->id)
    				<option selected value="{{ $material->id }}">{{ $material->name }}</option>
    			@else
    				<option value="{{ $material->id }}">{{ $material->name }}</option>
    			@endif
    		@endforeach
    	</select>
			<label for="author[]"> Genre :</label>
    	<select id="authors" multiple class="" name="author[]">
    		@foreach($authors as $author)
    			<option value="{{ $author->id }}">{{ $author->lastname }}</option>
    		@endforeach
    	</select>
			<input id="stock" type="number" class ="hidden" name="stock" selected value="{{ $instru->stock }}">

		<input type="submit" name="" value="Editer">
	</form>
@include('templates.footer')
