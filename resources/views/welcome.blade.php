<x-main title="Homepage">

    <div class="my-head">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 mt-5 pt-5" style="font-size: 10vw">{{config('app.name')}}</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="container text-center my-5 py-3">
        <h3 class="h1">I post più recenti</h3>
    </div>

    @if (session('message'))
        <div class="alert" role="alert">
            {{session('message')}}
        </div>
    @endif

    <div class="container col-12 my-3">
        <form action="{{route('search.article')}}" method="get">
            <input type="text" name="key" class="form-control me-2" placeholder="Search">
            <button class="btn btn-primary mt-2" type="submit">Search</button>
        </form>
    </div>

    <div class="container-fluid">
        @foreach ($articles as $article)
        <div class="row py-5 bg-light ">

            <div class="col-12 text-center text-md-right image">

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
            
            
           
            
        </div>
        @endforeach

        <div class="mt-auto">
            {{$articles->links()}}
        </div>

    </div>

</x-main>