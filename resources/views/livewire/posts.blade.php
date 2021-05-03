<div>
    @if(session()->has('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @foreach ($posts as $post)
    <div class="card mt-3">
            <livewire:post :post="$post" :key="$post->id"/>
    </div>
    @endforeach
</div>
