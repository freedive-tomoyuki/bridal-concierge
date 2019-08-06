@if ($errors->has($field))
    {!! $errors->first($field, '<span class="help-block text-danger"><strong>:message</strong></span>') !!}
@endif


