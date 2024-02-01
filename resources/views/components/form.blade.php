<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form class="card p-5 shadow" method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-3 text-center">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" >
                    @error('title')
                            <span class="small text-danger">{{$message}}</span>
                    @enderror
                </div>
            
                <div class="mb-3 text-center">
                    <label class="form-label">Sottotitolo</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{old('subtitle')}}">
                    @error('subtitle')
                            <span class="small text-danger">{{$message}}</span>
                    @enderror
                </div>
            
                <div class="mb-3 text-center">
                    <label class="form-label">Categoria</label>
            
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                        
                        @foreach ($categories as $category)
                            
                        <option value="{{$category->id}}">{{$category->name}}</option>
            
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
                            
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
            
                        @endforeach
                        @error('tags')
                            <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </select>
                </div>
            
                <div class="mb-3 text-center">
                    <label class="form-label">image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            
                <div class="mb-3 text-center">
                    <label for="floatingTextarea2">Testo</label>
                    <textarea class="form-control @error('text') is-invalid @enderror" name="text" cols="30" rows="10" style="height: 100px">{{old('text')}}</textarea>
                    @error('text')
                            <span class="small text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Manda al revisor</button>
            
            </form>

        </div>
    </div>
</div>


