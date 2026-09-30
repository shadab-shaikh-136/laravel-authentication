@include('partials.header')

<div class="admin-app">
    @include('partials.navbar')

    <div class="admin-layout">
        @include('partials.sidebar')

        <main class="admin-main">
            <div class="container-fluid py-4 px-3 px-lg-4">
                @yield('content')
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>
