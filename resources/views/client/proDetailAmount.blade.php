@if($sizes->amount == 0)
<label for="">Số lượng <span style="color: red">(hết hàng)</span></label>
<input type="number" name="amount" disabled="" class="form-control" placeholder="--"  min="1" id="amount">
@else
<label for="">Số lượng</label>
<input type="number" name="amount" class="form-control" value="1" max="{{$sizes->amount}}" min="1" id="amount">
@endif