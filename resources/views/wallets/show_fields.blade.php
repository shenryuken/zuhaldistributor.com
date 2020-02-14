<!-- Holder Type Field -->
<div class="form-group">
    {!! Form::label('holder_type', 'Holder Type:') !!}
    <p>{{ $wallet->holder_type }}</p>
</div>

<!-- Holder Id Field -->
<div class="form-group">
    {!! Form::label('holder_id', 'Holder Id:') !!}
    <p>{{ $wallet->holder_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $wallet->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $wallet->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $wallet->description }}</p>
</div>

<!-- Balance Field -->
<div class="form-group">
    {!! Form::label('balance', 'Balance:') !!}
    <p>{{ $wallet->balance }}</p>
</div>

<!-- Decimal Places Field -->
<div class="form-group">
    {!! Form::label('decimal_places', 'Decimal Places:') !!}
    <p>{{ $wallet->decimal_places }}</p>
</div>

