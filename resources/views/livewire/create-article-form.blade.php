<div class="py-5 container">

    <form class="bg-primary text-light shadow rounded p-5 my-5" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">{{__('ui.titoloForm')}}:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" wire:model.blur="title">
            @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{__('ui.descrizioneForm')}}:</label>
            <textarea cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.blur="description"> </textarea>
            @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{__('ui.prezzoForm')}}:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.blur="price">
            @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">{{__('ui.categoriaForm')}}:</label>
            <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                
                <option label> {{__('ui.selezioneForm')}} </option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{__("ui.$category->name") }}</option>
    
                @endforeach
            </select>
            @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn rounded btn-dark"><i class="fa-solid p-1 fa-upload"></i>{{__('ui.creaForm')}}</button>
        </div>
    
    
    @if(session()->has('success'))
    <div class="alert alert-success py-2 text-center">
        {{session('success')}}
    </div>
    @endif
    
    </form>
</div>


