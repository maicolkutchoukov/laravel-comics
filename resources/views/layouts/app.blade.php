<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title') | Laravel Start 1</title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body>

        @include('partials.header')

        <main>

            <!-- JUMBOTRON -->
            <div class="container-fluid jumbotron px-0 w-100 h-50 mb-5">
                <div class="container">
                    <a class="current-series" href="">
                        CURRENT SERIES
                    </a>
                </div>
            </div>

            <!-- GRIGLIA MOVIES -->
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2 pb-3 mb-3">
                            <div class="img-card">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <p class="comic-title">{{ $comic['title'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="text-center pb-4">
                    <a class="load-more-btn" href="#">
                        Load More
                    </a>
                </div>
            </div>

            <!-- SEZIONE BUY -->
            <section id="section-buy">
                <div class="container">
                    <div class="row justify-content-between py-5">
                        <div class="col d-flex justify-content-center align-items-center">
                                <img class="px-2" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Buy-DC">
                            <p class="mb-0 text-white">DIGITAL COMICS</p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                                <img class="px-2" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Buy-DC">
                            <p class="mb-0 text-white">DC MERCHANDISE</p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                                <img class="px-2" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Buy-DC">
                            <p class="mb-0 text-white">SUBSCRIPTION</p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                                <img class="px-2" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Buy-DC">
                            <p class="mb-0 text-white">COMIC SHOP LOCATOR</p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                                <img class="px-2" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Buy-DC">
                            <p class="mb-0 text-white">DC POWER VISA</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('partials.footer')

        {{-- JS da importare nel body --}}
        @yield('body-imports')
    </body>
</html>
