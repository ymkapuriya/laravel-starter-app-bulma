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
    <div class="control has-icons-left">
        <input type="tel" id="{{ $id }}" name="{{ $name }}" placeholder="XXXXXXXXXX" value="{{ $value }}" pattern="[0-9]{10}" class="input">
        <span class="icon is-small is-left">
            <i class="material-icons prefix">smartphone</i>
        </span>
    </div>
    @if (isset($attributes['hint']))
    <p class="help is-success">{{ $attributes['hint'] }}</p>
    @endif
</div>