<x-main title="Lavora con noi">

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, facilis iure? Eum, impedit. Aliquid voluptas similique recusandae deserunt commodi? Modi.</p>

                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, facilis iure? Eum, impedit. Aliquid voluptas similique recusandae deserunt commodi? Modi.</p>

                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, facilis iure? Eum, impedit. Aliquid voluptas similique recusandae deserunt commodi? Modi.</p>
            </div>
            <div class="col-12">

                <form method="POST" action="{{route('user.role.request')}}">
                    @csrf
                
                    <div class="mb-3 text-center">
                        <label class="form-label">Per quale posizione vuoi candidarti?</label>
                
                        <select class="form-control" name="role">
                            <option selected>Scegli una posizione</option>                        
                                
                            <option value="admin">Admin</option>
                            <option value="revisor">Revisor</option>
                            <option value="writer">Writer</option>
                            
                        </select>
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label h5">Inviaci la tua mail</label>
                        <input type="email" class="form-control" name="email" @auth value="{{Auth::user()->email }}" @endauth>
                        @error('email') {{$message}} @enderror
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label h5">Perche dovremmo assumerti</label>
                        <textarea class="form-control" name="presentation" cols="30" rows="10" style="height: 100px"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Invia candidatura</button>
                
                </form>

            </div>
        </div>
    </div>

</x-main>