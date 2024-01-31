<x-main title="{{$article->title}}">

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$article->title}}</h1>
                        
                        <div class="text-muted fst-italic mb-2">Postato il: {{$article->created_at}} Da: <a href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></div>
                        
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
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Cerca un articolo che fa per te!</div>
                    <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0 mr-xl-0 p-3" action="{{route('search.article')}}" method="get">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="key" />
                        <button class="btn btn-outline-success" type="submit" data-mdb-ripple-color="dark">
                          Search
                        </button>
                      </form>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('articles.category', $category)}}">{{$category->name}}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">{{config('app.name')}}</div>
                    <div class="card-body">Tutti gli utenti possono lavorare con noi, fai richiesta subito!</div>
                    <a href="{{route('work.with.us')}}" class="btn btn-success">Lavora con noi</a>
                </div>
            </div>
        </div>
    </div>

</x-main>

