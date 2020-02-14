<!-- Payable Type Field -->
<div class="form-group">
    {!! Form::label('payable_type', 'Payable Type:') !!}
    <p>{{ $transaction->payable_type }}</p>
</div>

<!-- Payable Id Field -->
<div class="form-group">
    {!! Form::label('payable_id', 'Payable Id:') !!}
    <p>{{ $transaction->payable_id }}</p>
</div>

<!-- Wallet Id Field -->
<div class="form-group">
    {!! Form::label('wallet_id', 'Wallet Id:') !!}
    <p>{{ $transaction->wallet_id }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $transaction->type }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

<!-- Confirmed Field -->
<div class="form-group">
    {!! Form::label('confirmed', 'Confirmed:') !!}
    <p>{{ $transaction->confirmed }}</p>
</div>

<!-- Meta Field -->
<div class="form-group">
    {!! Form::label('meta', 'Meta:') !!}
    <p>{{ $transaction->meta }}</p>
</div>

<!-- Uuid Field -->
<div class="form-group">
    {!! Form::label('uuid', 'Uuid:') !!}
    <p>{{ $transaction->uuid }}</p>
</div>

