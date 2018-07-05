@include('templates/header')
  <main>
    <div class="title-main">
      <h2> Liste des instruments </h2>
    </div>
    <div class="style-main">
      @foreach ($instrus as $instru)
        <div class="div-container">
          <div class="style-liste">
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
          </div>
          <div class="style-button">
            <form action="/delete" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $instru->id }}">
              <input type="submit" name="" value="Remove">
            </form>
            <form action="/update" method="GET">
              @csrf
              <input type="hidden" name="id" value="{{ $instru->id }}">
              <input type="submit" name="" value="Edit">
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
