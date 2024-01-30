<x-main title="{{$category->name}}">

    <div class="p-5 text-center bg-image my-head">
        <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">The Aulab Post</h1>
                    <h4 class="mb-3">Life In An Alternate World With His Deepest Potential, And Will Keep It Real</h4>
                    @if (Auth::user() && Auth::user()->is_writer)
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{route('articles.create')}}" role="button">
                            Crea un articolo
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="text-center my-5 py-3">
        <h1>{{$category->name}}</h1>
    </div>


    <div class="container my-3">
        <div class="row">
            @foreach ($articles as $article)
        
            
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 ">
                    <div class="card ">
                        <img class="card-img" src="{{Storage::url($article->image)}}" alt="image">
                        
                        
                        <div class="card-body">                            
                            <h4 class="card-title">{{$article->title}}</h4>                            
                            <small class="text-muted cat">
                                <i class="bi bi-person-check-fill text-info"></i> {{$article->user->name}}
                            </small>
                            <p class="card-text">{{Str::limit($article->text,200)}}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{route('articles.show', $article)}}" class="btn btn-outline-info">Leggi articolo</a>
                                <a href="{{route('articles.category', $article->category)}}" class="btn btn-outline-danger btn-sm ">{{$article->category->name}}</a>
                            </div>      
                        </div>

                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">                            
                            <i class="bi bi-hourglass-split text-info"></i>
                            <div class="views">Tempo di lettura: {{$article->readDuration()}} minuti</div>                     
                        </div>

                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">                            
                            <i class="bi bi-calendar3 text-info"></i>
                            <div class="views">{{$article->created_at->format('d/m/y')}}</div>                     
                        </div>

                    </div>
                </div>
            
        
            @endforeach

        </div>  
    </div>

    <div class="mt-auto">
        {{$articles->links()}}
    </div>

</x-main>