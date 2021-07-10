<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
	<p>
		<?php
		foreach ($pessoas as $pessoa) {
			echo "$pessoa->nome <br/>";
		}
		?>
	</p>
</x-app-layout>