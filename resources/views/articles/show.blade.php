<x-main title="{{$article->title}}">

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-5 pb-5" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="text-center">{{$article->title}}</h1>
                <hr>
                <div class="align-items-center">
                    <img src="{{Storage::url($article->image)}}" class="img-fluid mr-md-2 rounded mx-auto d-block" alt="...">
                </div>
                <hr>
                <h3 class="text-center">{{$article->subtitle}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">{{$article->text}}</p>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-12 justify-content-center">
                <p>Pubblicato da: <a href="{{route('articles.user', $article->user)}}" class=" btn btn-primary">{{$article->user->name}}</a> il: {{$article->created_at->format('d/m/y')}}</p>
                <a href="{{route('articles.category', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
            </div>
        </div>
    </div>

</x-main>

