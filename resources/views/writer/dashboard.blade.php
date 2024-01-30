<x-main title="dashboard">

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    </div>    

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Bentornato, {{Auth::user()->name}}.</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @if (count(Auth::user()->articles)>0)
            
            <div class="co-12 my-3 text-center">
                <h1>Tutti i tuoi articoli</h1>
            </div>

            <div class="col-12 my-3">
                <x-articles-table :articles="Auth::user()->articles"/>
            </div>
        @else 

            <div class="col-12 my-3 text-center">
                <h1>Non hai ancora nessun articolo!</h1>
                <a href="{{route('articles.create')}}" class="btn btn-success">Crea il tuo primo articolo</a>
            </div>

        @endif
    </div>
</div>

</x-main>