@extends('layouts.authenticated_layout')

@section('content')
<div class="flex flex-col h-auto md:flex-row md:flex-1 md:h-full">

    <section class="mb-8 flex px-4 md:px-8 md:overflow-y-auto">
        <div class="w-full max-w-3xl flex flex-col">
            <div class="mt-6 mb-6 space-y-1.5">
                <h1 class="text-xl text-gray-800 font-medium">Overview</h1>
                <p>Dashboard overview of all major operations</p>
            </div>

            {{-- Graph section start --}}
            @include('partials.stats_overview')

            {{-- Admin overview section --}}
            {{-- @include('partials.admin_overview') --}}


            {{-- Reviews section --}}
            {{-- @include('partials.reviews_overview') --}}
        </div>
    </section>

    <aside
        class="bg-white flex-col flex-shrink-0 h-auto duration-75 w-full transition-width border-l border-gray-200 shadow md:overflow-y-auto md:w-80 md:ml-8 lg:flex"
        aria-label="Sidebar">
        <div class="mt-5 flex flex-col flex-1 h-full px-4">

            <!-- partners, promos, tickets -->
            @include('partials.partners_overview')

            {{-- promos --}}
            @include('partials.promos_overview')

            {{-- tickets --}}
            @include('partials.tickets_overview')
        </div>
    </aside>
</div>
@endsection