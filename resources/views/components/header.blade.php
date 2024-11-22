<header class="bg-success text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">{{ $title }}</h1>
        <p class="lead">{{ $subtitle }}</p>
        @if($route)
            <a href="{{ route($route) }}" class="btn btn-light btn-lg">{{ $buttonText }}</a>
        @endif
    </div>
</header>