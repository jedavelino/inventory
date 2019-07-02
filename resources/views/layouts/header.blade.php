<header class="shadow">
    <nav class="flex items-center justify-between px-10 py-4">
        <div>
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div>
            <ul class="flex items-center">
                @guest
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li class="">
                        <a role="button">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="hidden">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>