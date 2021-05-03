<div class="card-body">
    <div>
        <p class="card-subtitle">{{ $name }} {{ $post->user->name }} - {{ $date }}</p>
    </div>
    <hr>
    <div>
        {{ $post->body }}
    </div>
</div>
