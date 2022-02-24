<div class="form-group">
    <label for="street">street</label>
    <input type="text" class="form-control" id="street" name="street" value="{{ old('street') }}" required>
</div>
<div class="form-group">
    <label for="city">city</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
</div>
<div class="form-group">
    <label for="zip">zip</label>
    <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}" required>
</div>
<div class="form-group">
    <label for="country">country</label>
    <select class="form-control" id="country" name="country">
        @foreach($countries as $country)
            <option value="{{ $country }}">{{ $country }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="state">state</label>
    <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
</div>
<div class="form-group">
    <label for="price">price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
</div>
<div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" id="description" name="description" rows="4" required>
        {{ old('description') }}
    </textarea>
</div>
