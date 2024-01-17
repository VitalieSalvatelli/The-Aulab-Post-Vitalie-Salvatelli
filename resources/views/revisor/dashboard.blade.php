<x-main title="Dashboard">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Bentornato {{Auth::user()->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <x-revisor_table :articles="$articles"/>
            </div>
        </div>
    </div>

</x-main>