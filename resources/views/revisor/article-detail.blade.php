<x-main title="Dettagli">

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Revisiona Articolo</h1>
            </div>
        </div>
        <div class="row my-5 text-center">
            <div class="col-12">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12">
                <h3 class="my-3"> <span class="h5">Titolo : </span> {{$article->title}} </h3>
                <h3 class="my-3"> <span class="h5">Testo : </span> {{$article->text}} </h3>
                <h3 class="my-3"> <span class="h5">Autore : </span> {{$article->user->name}} </h3>
                <h3 class="my-3"> <span class="h5">Categoria : </span> {{$article->category->name}} </h3>
                <h3 class="my-3"> <span class="h5">Creato il : </span> {{$article->created_at->diffForHumans()}} </h3>
                <div class="d-flex text-center">
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-success mx-5">Accetta</a>
                    <a href="{{route('revisor.reject', $article)}}" class="btn btn-danger mx-5">Rifiuta</a>
                </div>
            </div>
        </div>
    </div>

</x-main>