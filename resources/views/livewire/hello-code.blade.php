<div>
    <p>La date est : {{ $today->format('d/m/Y à H:i:s') }}</p>

    <button wire:click="setDate(5)">Refresh</button>
</div>
