<!DOCTYPE html>
<html>
<style>
form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
label {display: block;}
input[type=text] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.submitBtn {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.submitBtn:hover {
  background-color: #45a049;
}
.error{
  color: red;
}
</style>
<body>

<h2>Create a new flight</h2>

<form action="{{ route('store_flight') }}" method="POST">
  @csrf
  <label for="fname">Name</label>
  <input type="text" id="name" name="name" placeholder="Flight name...">

  {{-- Validate with a Custom Request --}}
  @error('name')
      <p class="error">{{ $message  }}</p>
  @enderror

  {{-- Simple Validation (Show Error) --}}
  {{-- @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li class="error">{{ $error }}</li>
    @endforeach
  </ul>
  @endif --}}
  <input type="submit" class="submitBtn" value="Add">
</form>

</body>
</html>
