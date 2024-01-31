<x-main title="Dashboard">

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    

    
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Bentornato {{Auth::user()->name}}</h1>
            </div>
        </div>

        <div class="row card shadow">
            <div class="col-12">
                <x-revisor_table :articles="$articles"/>
            </div>
        </div>
    </div>

</x-main>