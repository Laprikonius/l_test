<!-- dashboard.blade.php -->
@if (Auth::check())
    <h1>Добро пожаловать, {{ Auth::user()->name }}!</h1>
@else
    <h1>Вы не авторизованы.</h1>
@endif
