<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('product_name', 'Menu Name') }}
    {{ Form::text('name',$product->name,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price',$product->price,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {{ Form::label('file','File') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('description') : '' }}</span>
</div>