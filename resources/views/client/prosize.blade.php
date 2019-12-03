@if(count($sizes) == 0)
<label for="">Size*</label>
<select name="size" class="form-control">
	<option selected value="">--</option>
</select>
@else
<label for="">Size*</label>
<select name="size" class="form-control">
	@foreach($sizes as $size)
	<option value="{{$size->size}}">
		{{$size->size}}
	</option>
	@endforeach
</select>
@endif