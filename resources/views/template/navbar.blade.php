<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="img/Logo2.png" class="logo" height="140" width="auto">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            @if(Route::is('index'))
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ route('service') }}" class="nav-item nav-link">Company Value</a>
                <a href="{{ route('product') }}" class="nav-item nav-link">Products</a>
            @elseif(Route::is('service'))
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ route('service') }}" class="nav-item nav-link active">Company Value</a>
                <a href="{{ route('product') }}" class="nav-item nav-link">Products</a>
            @elseif(Route::is('product'))
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ route('service') }}" class="nav-item nav-link">Company Value</a>
                <a href="{{ route('product') }}" class="nav-item nav-link active">Products</a>
            @elseif(Route::is('about'))
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link active">About Us</a>
                <a href="{{ route('service') }}" class="nav-item nav-link active">Company Value</a>
                <a href="{{ route('product') }}" class="nav-item nav-link">Products</a>
            @endif
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block"><a href="
            javascript:void(0)"
                onclick="window.open('https://wa.me/6285246070090?text=Halo,',',%20Saya%20tertarik%20dengan%20produk%20pupuk%20anda%20','blank')">
                <img width="auto" height="48" src="img/contactus.png" alt="whatsapp--v1" />
            </a>
        </h4>
    </div>
</nav>
<!-- Navbar End -->
