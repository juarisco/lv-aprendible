    <nav>
        {{-- <pre>{{ dump(request()->path()) }}</pre> --}}
        <ul>
            <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
            <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
            <li class="{{ setActive('portafolio') }}"><a href="/portafolio">Portafolio</a></li>
            <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>