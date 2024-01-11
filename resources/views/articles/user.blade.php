<x-main title="Post di {{$user->name}}">

    <div class="text-center">
        <h1>Tutti i post di: {{$user->name}}</h1>
    </div>

    <div class="container">
        
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{Str::limit($article->text,200)}}</p>
                      <a href="{{route('articles.category', $article->category)}}" class="card-text me-5">{{$article->category->name}}</a>
                      <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi articolo</a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>

</x-main>