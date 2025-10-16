<title>
  @yield('title', 'Home Page')
</title>

<!-- Start CSS -->
<style>
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
</style>
<!-- End CSS -->

<!-- Start HTMl -->
<div class="header">
  <h1>Header</h1>
  <p>My supercool header</p>
</div>

@yield('content')

@include('login.copy')

<div class="footer">
  <h2>Footer</h2>
</div>
<!-- End HTMl -->
