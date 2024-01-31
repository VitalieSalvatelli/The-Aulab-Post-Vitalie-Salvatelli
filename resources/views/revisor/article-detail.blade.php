<x-main title="Dettagli">

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$article->title}}</h1>
                        
                        <div class="text-muted fst-italic mb-2">Crearo il: {{$article->created_at}} Da: <a href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></div>
                        
                        <a class="badge bg-danger text-decoration-none link-light" href="{{route('articles.category', $article->category)}}">Categoria: {{$article->category->name}}</a>
                        @foreach ($article->tags as $tag)
                            <span class="badge bg-secondary text-decoration-none link-light">#{{$tag->name}}</span>
                        @endforeach
                        
                    </header>
                    
                    <figure class="mb-4"><img height="400" width="900" class="img-fluid rounded" src="{{Storage::url($article->image)}}" alt="..." /></figure>
                    
                    <section class="mb-5">
                        <h2 class="fw-bolder mb-4 mt-5">{{$article->subtitle}}</h2>
                        <p class="fs-5 mb-4">{{$article->text}}</p>
                    </section>
                </article>
                
            </div>

            <div class="col-lg-4">
                <div class="d-flex text-center">
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-success mx-5">Accetta</a>
                    <a href="{{route('revisor.reject', $article)}}" onclick="return confirm('Sei sicuro di voler rifiutare?')" class="btn btn-danger mx-5">Rifiuta</a>
                </div>
            </div>

        </div>
    </div>

</x-main>




