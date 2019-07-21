    <nav>
        {{-- <pre>{{ dump(request()->path()) }}</pre> --}}
        <ul>
            <li class="{{ setActive('home') }}"><a href="/">@lang('Home')</a></li>
            <li class="{{ setActive('about') }}"><a href="/about">@lang('About')</a></li>
            <li class="{{ setActive('portafolio') }}"><a href="/portafolio">@lang('Portafolio')</a></li>
            <li class="{{ setActive('contact') }}"><a href="/contact">@lang('Contact')</a></li>
        </ul>
    </nav>