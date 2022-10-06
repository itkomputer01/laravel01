
<!DOCTYPE html>
<html>
<head>
  <title> {{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>



@include('partial.navbar')

<div class="container-fluid">

  @yield('container')
</div>

</body>
</html>
