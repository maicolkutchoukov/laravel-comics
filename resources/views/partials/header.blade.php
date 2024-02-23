@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
        ],
        [
            'url' => '/characters',
            'label' => 'Characters',
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
        ],
        [
            'url' => '/movies',
            'label' => 'Movies',
        ],
        [
            'url' => '/tv',
            'label' => 'Tv',
        ],
        [
            'url' => '/games',
            'label' => 'Games',
        ],
        [
            'url' => '/collectibles',
            'label' => 'Collectibles',
        ],
        [
            'url' => '/videos',
            'label' => 'Videos',
        ],
        [
            'url' => '/fans',
            'label' => 'Fans',
        ],
        [
            'url' => '/news',
            'label' => 'News',
        ],
        [
            'url' => '/shop',
            'label' => 'Shop',
        ],
    ];
@endphp

<header>
    <div class="header-top fw-bold">
        <div class="container header-top py-1 d-flex align-items-center justify-content-end">
            <span class="text-white">DC POWER VISA®</span>
            <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle fw-bold ps-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADDITIONAL DC SITES 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between py-3">

                <div class="col-auto">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
                </div>

                <div class="col-auto">
                    <nav class="navbar navbar-expand-lg justify-content-center">
                        <ul class="navbar-nav">
                            @foreach ($links as $link)
                                @if ($link['label'] == 'Shop')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $link['label'] }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Opzione 1</a></li>
                                            <li><a class="dropdown-item" href="#">Opzione 2</a></li>
                                            <li><a class="dropdown-item" href="#">Opzione 3</a></li>
                                        </ul>
                                    </li>
                                @else 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $link['url'] }}">
                                            {{ $link['label'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="col-auto text-end">
                    <input class="text-end w-75" id="search" name="search" type="text" placeholder="Search..">
                </div>

            </div>
        </div>
    </div>
</header>
