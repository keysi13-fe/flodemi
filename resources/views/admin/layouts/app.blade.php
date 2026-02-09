<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Flodemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
    <div class="bg-dark text-white p-3" style="width:250px">
        <h5>Flodemi Admin</h5>
        <a href="/admin/dashboard" class="text-white d-block">Dashboard</a>
        <a href="/admin/courses" class="text-white d-block">Course</a>
    </div>

    <div class="p-4 w-100">
        @yield('content')
    </div>
</div>

</body>
</html>
