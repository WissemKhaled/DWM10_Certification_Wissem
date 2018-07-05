@include('templates/header')
<main class="main-form">
  <div class="title-main">
    <h2>Ajouter un nouvel instrument</h2>
  </div>
    <form class="form-style" action="/insert" method="POST">
        @csrf
        <label for="title">Nom de l'instrument :</label>
        <input id="title" type="text" class="" name="title" >

        <label for="price"> Prix :</label>
        <input id="price" type="number" class="" name="price" >

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
