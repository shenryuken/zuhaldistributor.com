<!-- Payable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payable_type', 'Payable Type:') !!}
    {!! Form::text('payable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Payable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payable_id', 'Payable Id:') !!}
    {!! Form::number('payable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Wallet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wallet_id', 'Wallet Id:') !!}
    {!! Form::number('wallet_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Confirmed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirmed', 'Confirmed:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('confirmed', 0) !!}
        {!! Form::checkbox('confirmed', '1', null) !!}
    </label>
</div>


<!-- Meta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::textarea('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uuid', 'Uuid:') !!}
    {!! Form::text('uuid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transactions.index') }}" class="btn btn-default">Cancel</a>
</div>
