<!-- Holder Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('holder_type', 'Holder Type:') !!}
    {!! Form::text('holder_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Holder Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('holder_id', 'Holder Id:') !!}
    {!! Form::number('holder_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Decimal Places Field -->
<div class="form-group col-sm-6">
    {!! Form::label('decimal_places', 'Decimal Places:') !!}
    {!! Form::number('decimal_places', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('wallets.index') }}" class="btn btn-default">Cancel</a>
</div>
