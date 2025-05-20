<x-main-layout>
    
    <x-slot:title> Login </x-slot:title>
    
    <x-shared.section-title title="Accedi per ottenere tutte le funzionalità del nostro blog!" subtitle="" />
     <div class="row justify-content-center text-light align-items-center" style="min-height: 58vh;">
        <form action="{{route('register')}}" method="POST" class="col-md-6 shadow border rounded-3 bg-primary  p-4">
            @csrf
             <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Indirizzo email</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label"> Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
           <div class="mt-5">
             <button type="submit" class="btn btn-dark">Registrati</button>
           </div>
           <a class="text-light" href="{{route('login')}}">Sei già un nostro utente? Accedi ora clickando qui</a>
        </form>
<x-shared.errors-component />
    </div>
    


</x-main-layout>