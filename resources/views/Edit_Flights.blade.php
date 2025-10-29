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
</style>
<body>

<h2>Update flight</h2>

<form action="{{ route('update_flight', $data['id']) }}" method="POST">
  @csrf
  <label for="fname">Name</label>
  <input type="text" id="name" name="name" value="{{ $data['name'] }}" placeholder="Flight name...">

  <input type="submit" class="submitBtn" value="Update">
</form>

</body>
</html>
