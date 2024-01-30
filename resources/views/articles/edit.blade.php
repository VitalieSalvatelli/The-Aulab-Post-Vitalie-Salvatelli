<x-main title="Modifica articolo">

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif

                <form class="card p-5 shadow" method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 text-center">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$article->title}}" required>
                        @error('title')
                                <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{$article->subtitle}}">
                        @error('subtitle')
                                <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label">Categoria</label>
                
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            <option selected>Scegli la categoria del post</option>
                            @foreach ($categories as $category)
                                
                            <option value="{{$category->id}}" {{$category->id == $article->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                
                            @endforeach
                            @error('category_id')
                                <span class="small text-danger">{{$message}}</span>
                            @enderror
                        </select>
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label">Tags</label>
                
                        <select class="form-control @error('tags') is-invalid @enderror" name="tags[]" multiple>
                            @foreach ($tags as $tag)
                                
                            <option value="{{$tag->id}}" {{$article->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
                
                            @endforeach
                            @error('tags')
                                <span class="small text-danger">{{$message}}</span>
                            @enderror
                        </select>
                    </div>
            
                    <div class="my-3">
                        <label for="" class="form-label">Copertina attuale: </label> <br>
                        <div class="text-center">
                            <img width="300" src="{{Storage::url($article->image)}}" alt="Immagine non disponibile">
                        </div>
                    </div>
                
                    <div class="mb-3 text-center">
                        <label class="form-label">image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                
                    <div class="mb-3 text-center">
                        <label for="floatingTextarea2">Testo</label>
                        <textarea class="form-control @error('text') is-invalid @enderror" name="text" cols="30" rows="10" style="height: 100px">{{$article->text}}</textarea>
                        @error('text')
                                <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-success">Modifica</button>
                
                </form>                

            </div>
        </div>
    </div>

    
</x-main>