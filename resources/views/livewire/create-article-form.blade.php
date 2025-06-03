<div class="py-5 container">

    <form class="bg-primary text-light shadow rounded p-5 my-5" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">{{__('ui.titoloForm')}}:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
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
        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images. *')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview :</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col d-flex flex-column align-items-center my-3">
                        <div class="img-preview mx-auto shadow rounded" style="background-image: url('{{ $image->temporaryUrl() }}');"></div>
                        <button type="button" class="btn mt-1 btn-danger rounded " wire:click="removeImage({{ $key }})">x</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
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