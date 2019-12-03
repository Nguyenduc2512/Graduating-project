@if(count($sizes) == 0)
<label for="">Size*</label>
<select name="size" class="form-control">
	<option selected value="">--</option>
</select>
@else
<label for="">Size*</label>
<select name="size" class="form-control" id="size">
	@foreach($sizes as $size)
	<option value="{{$size->size}}">
		{{$size->size}}
	</option>
	@endforeach
</select>
@if($errors->first('size'))
<span class="text-danger"> {{$errors->first('size')}} </span>
@endif
@if($errors->first('size_order'))
<span class="text-danger"> {{$errors->first('size_order')}} </span>
@endif
@endif