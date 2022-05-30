<option selected value="">উপজেলা</option>
@foreach ($upzillas as $upzilla)
    <option value="{{ $upzilla->id}}">{{ $upzilla->name}}</option>
@endforeach
