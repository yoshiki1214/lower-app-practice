<?php

use function Livewire\Volt\{state,mount};

state(['word']);

mount(function () {
    $this->word_lower = strtolower($this->word);    
});

?>

<div class="m-2">
    <h1 class="text-4xl font-bold my-7">元の値</h1>    <p>
        {{ $word }}
    <h1>小文字に変換</h1>
        {{ $this->word_lower }}
    </p>
</div>
