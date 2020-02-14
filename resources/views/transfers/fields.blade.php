<!-- From Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_type', 'From Type:') !!}
    {!! Form::text('from_type', null, ['class' => 'form-control']) !!}
</div>

<!-- From Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_id', 'From Id:') !!}
    {!! Form::number('from_id', null, ['class' => 'form-control']) !!}
</div>

<!-- To Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_type', 'To Type:') !!}
    {!! Form::text('to_type', null, ['class' => 'form-control']) !!}
</div>

<!-- To Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_id', 'To Id:') !!}
    {!! Form::number('to_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Last Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_last', 'Status Last:') !!}
    {!! Form::text('status_last', null, ['class' => 'form-control']) !!}
</div>

<!-- Deposit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposit_id', 'Deposit Id:') !!}
    {!! Form::number('deposit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Withdraw Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdraw_id', 'Withdraw Id:') !!}
    {!! Form::number('withdraw_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uuid', 'Uuid:') !!}
    {!! Form::text('uuid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transfers.index') }}" class="btn btn-default">Cancel</a>
</div>
