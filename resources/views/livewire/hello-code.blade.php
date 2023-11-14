<div class="text-sm space-y-3">
    <p>La date est : <span class="text-lg font-semibold font-mono">{{ $today->format('d/m/Y à H:i:s') }}</span></p>

    <button wire:click="setDate(5)" class="bg-indigo-800 text-white rounded px-4 py-1" type="button">Add 5 hours</button>
</div>
