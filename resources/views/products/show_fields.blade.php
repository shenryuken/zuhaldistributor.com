<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Pic Field -->
<div class="form-group">
    {!! Form::label('pic', 'Pic:') !!}
    <p>{{ $product->pic }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{{ $product->desc }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Payment Link Field -->
<div class="form-group">
    {!! Form::label('payment_link', 'Payment Link:') !!}
    <p>{{ $product->payment_link }}</p>
</div>

