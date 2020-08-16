<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = str_replace('_', '-', $name);
?>
<div class="field">
    @if (isset($attributes['label']))
    {{ Form::label($id, $attributes['label'], ['class' => 'label']) }}
    @else
    {{ Form::label($id, null, ['class' => 'label']) }}
    @endif
    <div class="control">
        {{ Form::date($name, $value, array_merge(['id' => $id, 'class' => 'input'], $attributes)) }}
    </div>
    @if (isset($attributes['hint']))
    <p class="help is-success">{{ $attributes['hint'] }}</p>
    @endif
</div>