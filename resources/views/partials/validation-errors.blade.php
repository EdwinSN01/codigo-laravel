@if($errors->any())
  <ul>
    @foreach($errors->all() as $errors)
        <li>{{ $errors }} </li>
  </ul>
  @endforeach
@endif