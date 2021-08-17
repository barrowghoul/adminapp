<div>
    <x-jet-button wire:click="$set('open', true)">
        Registrar Cliente
    </x-jet-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Registrar Cliente
        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name>

        </x-slot>
    </x-jet-dialog-modal>
</div>
