<x-main-layout>
    
    <x-slot:title> Login </x-slot:title>
    
    <x-shared.section-title title="Accedi per ottenere tutte le funzionalità del nostro blog!" subtitle="" />
     <div class="row justify-content-center text-light align-items-center" style="min-height: 58vh;">
        <form action="{{route('login')}}" method="POST" class="col-md-6 shadow border rounded-3 bg-primary  p-4">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Indirizzo email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
           <div class="mt-5">
             <button type="submit" class="btn btn-dark">Accedi</button>
           </div>
           <a class="text-light" href="{{route('register')}}">Non sei ancora registrato? Fallo ora clickando qui</a>
        </form>
<x-shared.errors-component />
    </div>
    


</x-main-layout>