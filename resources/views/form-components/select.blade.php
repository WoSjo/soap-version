<div class="form-group">
    {{ Form::label($name, $label ?? null, ['class' => 'col-sm-1 control-label']) }}
    <div class="col-sm-11">
        {{ Form::select($name, $items, $selected ?? null, ['class' => 'form-control']) }}
    </div>
</div>
