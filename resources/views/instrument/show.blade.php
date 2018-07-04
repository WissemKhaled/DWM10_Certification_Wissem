@include('templates/header')
  <main>
    <h2> Liste des instruments </h2>
    <a href="/insert"><input type="button" name="" value="Ajout"></a>
    <div class="style-main">
      @foreach ($instrus as $instru)
        <div>
          <ul>
            <li>Nom : {{ $instru->title }}</li>
            <li>Prix : {{ $instru->price }}</li>
            @foreach ($instru->authors as $author)
              <li> Créateur :{{ $author->lastname}}</li>
            @endforeach
            <li> Composant :{{ $instru->materials->name }}</li>
            <li> En Stock :{{ $instru->stock }}

            </li>
          </ul>
          <div class="style-button">
            <form action="/delete" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $instru->id }}">
              <input type="submit" name="" value="X">
            </form>
            <form action="/update" method="GET">
              @csrf
              <input type="hidden" name="id" value="{{ $instru->id }}">
              <input type="submit" name="" value="U">
            </form>
            <form action="/stock" method="GET">
              @csrf
              <input type="hidden" name="id" value="{{ $instru->id }}">
              <input type="submit" name="" value="Stock">
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </main>
@include('templates/footer')
