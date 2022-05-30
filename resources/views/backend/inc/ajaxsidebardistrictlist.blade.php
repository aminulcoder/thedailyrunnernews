<option selected value="">জেলা</option>
@foreach ($districts as $district)
    <option value="{{ $district->id}}">{{ $district->name}}</option>
@endforeach
