@if(count($sizes) == 0)

Không có sản phẩm thuộc danh mục này!
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