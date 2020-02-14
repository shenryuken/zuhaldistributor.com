<!-- From Type Field -->
<div class="form-group">
    {!! Form::label('from_type', 'From Type:') !!}
    <p>{{ $transfer->from_type }}</p>
</div>

<!-- From Id Field -->
<div class="form-group">
    {!! Form::label('from_id', 'From Id:') !!}
    <p>{{ $transfer->from_id }}</p>
</div>

<!-- To Type Field -->
<div class="form-group">
    {!! Form::label('to_type', 'To Type:') !!}
    <p>{{ $transfer->to_type }}</p>
</div>

<!-- To Id Field -->
<div class="form-group">
    {!! Form::label('to_id', 'To Id:') !!}
    <p>{{ $transfer->to_id }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transfer->status }}</p>
</div>

<!-- Status Last Field -->
<div class="form-group">
    {!! Form::label('status_last', 'Status Last:') !!}
    <p>{{ $transfer->status_last }}</p>
</div>

<!-- Deposit Id Field -->
<div class="form-group">
    {!! Form::label('deposit_id', 'Deposit Id:') !!}
    <p>{{ $transfer->deposit_id }}</p>
</div>

<!-- Withdraw Id Field -->
<div class="form-group">
    {!! Form::label('withdraw_id', 'Withdraw Id:') !!}
    <p>{{ $transfer->withdraw_id }}</p>
</div>

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $transfer->discount }}</p>
</div>

<!-- Fee Field -->
<div class="form-group">
    {!! Form::label('fee', 'Fee:') !!}
    <p>{{ $transfer->fee }}</p>
</div>

<!-- Uuid Field -->
<div class="form-group">
    {!! Form::label('uuid', 'Uuid:') !!}
    <p>{{ $transfer->uuid }}</p>
</div>

