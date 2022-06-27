<header>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{ asset('images/dc-logo.png') }}" alt="">
            </div>
            <ul class="menu">
                @foreach ($menu as $item)
                    <li>
                        <a href="{{ route($item) }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="search">
                <div><input placeholder="Search" type="text" name="" id="search-input"></div>
                <label for="search-input"><i class="fas fa-search"></i></label>
            </div>
        </nav>
    </div>
</header>
