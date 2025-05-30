<x-main-layout>
    
    <x-slot:title> Register </x-slot:title>
    
    <x-shared.section-title title="{{__('ui.registratiTitle')}}" subtitle="" />
     <div class="row justify-content-center text-light align-items-center mx-0 myloginheight" style="min-height: 58vh;">
        <form action="{{route('register')}}" method="POST" class="col-md-6 shadow border rounded-3 bg-primary  p-4">
            @csrf
             <div class="mb-3">
                <label for="name" class="form-label">{{__('ui.nomeUtente')}}</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{__('ui.mailUtente')}}</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{__('ui.pswUtente')}}</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{__('ui.pswConfirm')}}</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
           <div class="mt-5">
             <button type="submit" class="btn btn-dark rounded">{{__('ui.registrati')}}</button>
           </div>
           <a class="text-light" href="{{route('login')}}">{{__('ui.seiRegistrato')}}</a>
        </form>
<x-shared.errors-component />
    </div>
    


</x-main-layout>