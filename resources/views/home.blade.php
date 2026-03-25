@extends('layouts.base')

@section('content')
    @php
        $categories = [
            ['name' => 'Sieraden', 'slug' => 'sieraden', 'description' => 'Handgemaakte kettingen, ringen en armbanden.'],
            ['name' => 'Keramiek', 'slug' => 'keramiek', 'description' => 'Unieke bekers, vazen en servies van lokale makers.'],
            ['name' => 'Textiel', 'slug' => 'textiel', 'description' => 'Zachte, duurzame en creatieve textielproducten.'],
            ['name' => 'Kunst', 'slug' => 'kunst', 'description' => 'Illustraties, prints en originele kunstwerken.'],
        ];
    @endphp

    <section class="space-y-10">
        <header class="rounded-2xl border border-gray-300 bg-white p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">Vind jouw stijl op Makers Markt</h1>
            <p class="mt-3 max-w-2xl text-gray-600">
                Kies een categorie en ga direct naar de productcatalogus.
            </p>
        </header>

        <section>
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-900">Categorieën</h2>
                <a href="{{ route('koper.catalogus') }}" class="text-sm font-medium text-gray-700 underline underline-offset-4 hover:text-black">
                    Naar volledige catalogus
                </a>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($categories as $category)
                    <a
                        href="{{ route('koper.catalogus', ['categorie' => $category['slug']]) }}"
                        class="group rounded-xl border border-gray-300 bg-white p-4 transition hover:border-gray-500 hover:shadow-sm"
                    >
                        <div class="mb-4 h-28 rounded-lg bg-gray-100"></div>

                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $category['name'] }}</h3>
                            <p class="mt-2 text-sm text-gray-600">{{ $category['description'] }}</p>
                        </div>
                        <div class="mt-4 flex justify-center">
                            <span class="inline-flex rounded-md border border-gray-300 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-gray-700 group-hover:bg-gray-100">
                                Bekijk in catalogus </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </section>
    <section class="mt-10 sm:mt-12 relative overflow-hidden rounded-3xl border border-gray-300 bg-white p-6 sm:p-10">        <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full bg-gray-100"></div>
        <div class="pointer-events-none absolute -bottom-24 -left-24 h-64 w-64 rounded-full border border-gray-200"></div>

        <div class="relative grid gap-8 lg:grid-cols-5 lg:items-start">
            <div class="lg:col-span-3 space-y-5">
                <span class="inline-flex items-center rounded-full border border-gray-300 bg-gray-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-gray-700">
                    Over MakersMarkt
                </span>

                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">
                    Waar vakmanschap en technologie elkaar versterken
                </h2>

                <p class="max-w-2xl text-gray-700 leading-relaxed">
                    MakersMarkt is ontwikkeld om kunstenaars en kopers op een gebruiksvriendelijke manier samen te brengen.
                    Handgemaakte producten verdienen een platform dat niet alleen mooi presenteert, maar ook praktisch werkt
                    voor dagelijks beheer, verkoop en ontdekking.
                </p>

                <p class="max-w-2xl text-gray-700 leading-relaxed">
                    Daarom bouwen we een systeem waarin makers eenvoudig hun creaties beheren en aanbieden, terwijl kopers
                    intuïtief kunnen zoeken, filteren en hun favoriete producten vinden in een heldere catalogus.
                </p>

                <div class="flex flex-wrap gap-3 pt-1">
                    <a href="{{ route('koper.catalogus') }}" class="rounded-lg bg-gray-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-black">
                        Bekijk catalogus
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 grid gap-3">
                <div class="rounded-xl border border-gray-300 bg-gray-50 p-4">
                    <p class="text-sm font-semibold text-gray-900">Voor makers</p>
                    <p class="mt-1 text-sm text-gray-600">Plaats en beheer producten snel en overzichtelijk.</p>
                </div>

                <div class="rounded-xl border border-gray-300 bg-gray-50 p-4">
                    <p class="text-sm font-semibold text-gray-900">Voor kopers</p>
                    <p class="mt-1 text-sm text-gray-600">Ontdek unieke creaties via een duidelijke productcatalogus.</p>
                </div>

                <div class="rounded-xl border border-gray-300 bg-gray-50 p-4">
                    <p class="text-sm font-semibold text-gray-900">Doel</p>
                    <p class="mt-1 text-sm text-gray-600">Een modern platform dat lokale creativiteit zichtbaar maakt.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
