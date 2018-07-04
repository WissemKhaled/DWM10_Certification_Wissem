@include('templates/header')
<main>
  <form class="" action="/insert" method="POST">
      @csrf
      <label for="title">Nom de l'instrument :</label>
      <input id="title" type="text" name="title" >

      <label for="price"> Prix :</label>
      <input id="price" type="number" name="price" >

      <label for="material"> Genre :</label>
    	<select id="material" class="" name="material">
        @foreach ($materials as $material)
          <option value="{{ $material->id}}"> {{ $material->name}}</option>
        @endforeach
      </select>
      <label for="author[]"> Créateur :</label>
    	<select id="authors" multiple class="" name="author[]">
    		@foreach($authors as $author)
    			<option value="{{ $author->id }}">{{ $author->lastname }}</option>
    		@endforeach
    	</select>
      <label for="stock"> Stock :</label>
      <input id="stock" type="number" name="stock" >

      <input type="submit" name="" value="Ajouter">
  </form>
</main>
@include('templates/footer')
