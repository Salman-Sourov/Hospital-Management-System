@if($paginator->hasPages())
<ul class="flex justify-between">

<li wire:click="previousPage">prev</li>
<li wire:click="nextPage">Next</li>
</ul>


@endif