<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') || Request::is('book*') ? 'text-primary' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('category*') ? 'text-primary' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (\App\Models\Category::all() as $category)
                            <li>
                                <a class="dropdown-item"
                                    href="/category/{{ $category['name'] }}">{{ $category['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('publisher*') ? 'text-primary' : '' }}"
                        href="/publisher">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'text-primary' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
