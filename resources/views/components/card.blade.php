<div class="col-md-4">
    <div class="card shadow-sm">
        <div class="card-body d-flex justify-content-between" style="min-height: 100px">
            <div>
                <h5 class="card-title">{{ $title }}</h5>
                
                @isset($subTitle)
                    <p class="card-text">{{ $subTitle }}</p>
                @endisset
            </div>
            <a href="{{ $route }}" class="btn btn-success btn-sm d-inline-flex align-items-center">View</a>
        </div>
    </div>
</div>