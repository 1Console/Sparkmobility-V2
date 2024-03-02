@extends("layouts.authenticated_layout")

@section("content")
	<div class="flex h-auto flex-col md:h-full md:flex-1 md:flex-row">
		<section class="mb-8 flex px-4 md:overflow-y-auto md:px-8">
			<div class="flex w-full max-w-3xl flex-col">
				<div class="mb-6 mt-6 space-y-1.5">
					<h1 class="text-xl font-medium text-gray-800">Overview</h1>
					<p>Dashboard overview of all major operations</p>
				</div>

				{{-- Graph section start --}}
				@include("partials.stats_overview")

				{{-- Admin overview section --}}
				{{-- @include('partials.admin_overview') --}}

				{{-- Reviews section --}}
				{{-- @include('partials.reviews_overview') --}}
			</div>
		</section>

		<aside
			class="transition-width h-auto w-full flex-shrink-0 flex-col border-l border-gray-200 bg-white shadow duration-75 md:ml-8 md:w-80 md:overflow-y-auto lg:flex"
			aria-label="Sidebar"
		>
			<div class="mt-5 flex h-full flex-1 flex-col px-4">
				<!-- partners, promos, tickets -->
				@include("partials.partners_overview")

				{{-- promos --}}
				@include("partials.promos_overview")

				{{-- tickets --}}
				@include("partials.tickets_overview")
			</div>
		</aside>
	</div>
@endsection
