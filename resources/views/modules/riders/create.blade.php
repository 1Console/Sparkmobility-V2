@extends('layouts.authenticated_layout')

@section('content')

<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quam, delectus esse error explicabo atque excepturi, animi eius veniam molestias dicta quisquam unde incidunt maiores perferendis reprehenderit quos vel. Explicabo.</div>

<div class=" w-[24rem] bg-white  pl-6">
               {{-- <p>Partners, promos, tickets sectin</p> --}}
              
              @include('partials.profile_overview')

              @include('partials.partners_overview') 

              {{-- promos --}}
              @include('partials.promos_overview')

               {{-- tickets --}}
              @include('partials.tickets_overview')
              
             
       </div>
@endsection