<x-main title="{{$article->title}}">

    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h1>{{$article->title}}</h1>
                <h3>{{$article->subtitle}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>{{$article->text}}</p>
                <a href="{{route('articles.category', $article->category)}}" class=" btn btn-primary">{{$article->category->name}}</a>
                <p>Pubblicato da: <a href="{{route('articles.user', $article->user)}}" class=" btn btn-primary">{{$article->user->name}}</a> il: {{$article->created_at->format('d/m/y')}}</p>
            </div>
        </div>
    </div>

</x-main>

