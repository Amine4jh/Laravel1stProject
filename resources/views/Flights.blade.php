<!DOCTYPE html>
<html>
<head>
<style>
h1{
    text-align: center;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #2047d4;
  border: none;
  border-radius: 5px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px 20px 2px;
  cursor: pointer;
}
.button:hover {
  background-color: #0729a5;
}
.button.edit {
    background: #04AA6D;
}
.button.edit:hover {
  background-color: #058153;
}
.button.del {
    background: #b90e0e;
}
.button.del:hover {
  background-color: #830d0d;
}
</style>
</head>
<body>
<h1>A Flights Table</h1>
<a href="{{ route('create-flights') }}" class="button">Add</a>
<table>
  <tr>
    <th>Name</th>
    <th>Added Date</th>
    <th>Updated Date</th>
    <th>Actions</th>
  </tr>
@if (@isset($data) and !@empty($data))
@foreach ($data as $row)
    
<tr>
  <td>{{ $row->name }}</td>
  <td>{{ $row->created_at }}</td>
  <td>{{ $row->updated_at }}</td>
  <td>
    <a href="{{ route('edit_flight', $row->id) }}" class="button edit">Edit</a>
    <a href="{{ route('delete_flight', $row->id) }}" class="button del">Delete</a>
  </td>
</tr>

@endforeach    
@endif
</table>
</body>
</html>
