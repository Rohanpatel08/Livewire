<div>

    <div style="text-align: center;">
        <h1>Hello World</h1>
        <button wire:click="increment" class="btn btn-success">+</button>
        <button wire:click="decreament" class="btn btn-danger">-</button>
        <h3>{{ $count }}</h3>
        <span class="mt-2 text-danger">{{$message}}</span>
    </div>
</div>