<x-main title="{{$category->name}}">

    <div class="my-head">

        <div class="container h-100">
            <div class="row h-100-align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 mt-5 pt-5" style="font-size: 100px">{{config('app.name')}}</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center my-5 py-3">
        <h1>{{$category->name}}</h1>
    </div>

    <div class="container-fluid mb-3">
        @foreach ($articles as $article)
        <div class="row py-5 bg-light">

            <div class="col-12 col-md-5 text-center text-md-right">

                <img src="{{Storage::url($article->image)}}" class="img-fluid mr-md-2" alt="...">

            </div>

            <div class="col-12 col-md-5 px-5">
                <h3 class="col-12 text-center text-md-left">{{$article->title}}</h3>
                <hr>
                <div class="row">
                    <div class="col-12 py-2">
                        <a href="{{route('articles.category', $article->category)}}" class=" me-5">{{$article->category->name}}</a>
                    </div>
                    <div class="col-12 py-2">
                        <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi articolo</a>
                    </div>
                </div>
                <p class="mt-2">{{Str::limit($article->text,200)}}</p>
            </div>
            <div class="col-md-2"></div>
            
           
            
        </div>
        @endforeach

        <div class="mt-auto">
            {{$articles->links()}}
        </div>

    </div>

</x-main>