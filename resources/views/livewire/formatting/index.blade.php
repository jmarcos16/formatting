<div>
    @foreach ($formattings as $formatting)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $formatting->name }}</h5>
            </div>
        </div>
    @endforeach
</div>
