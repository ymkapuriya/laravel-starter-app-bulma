<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$options = ['' => 'Select option'] + $options;
?>
<div class="field">
    @if (isset($attributes['label']))
    {{ Form::label($name, $attributes['label'], ['class' => 'label']) }}
    @else
    {{ Form::label($name, null, ['class' => 'label']) }}
    @endif
    <div class="control has-icons-left">
        <div class="select">
            {{ Form::select($name, $options, $value, ['class' => 'custom-select']) }}
        </div>
        <div class="icon is-small is-left">
            <i class="material-icons prefix">unfold_more</i>
        </div>
    </div>
</div>