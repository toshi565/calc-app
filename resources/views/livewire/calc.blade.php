<?php

use function Livewire\Volt\{state, mount};

state(['value1', 'operator', 'value2', 'word', 'result']);

mount(function () {
    if ($this->operator == 'addition') {
    $this->word = '+';
    $this->result = $this->value1 + $this->value2;
    } elseif ($this->operator == 'subtraction') {
    $this->word = '-';
    $this->result = $this->value1 - $this->value2;
    } elseif ($this->operator == 'multiplication') {
    $this->word = '×';
    $this->result = $this->value1 * $this->value2;
    } elseif ($this->operator == 'division') {
    $this->word = '÷';
    $this->result = $this->value1 / $this->value2;
    } else {
    // どの演算子にも一致しなかった場合に実行される
    $this->word = '?';
    $this->result = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p>{{ $value1 }} {{ $word }} {{ $value2 }} = {{ $result }}</p>
</div>
