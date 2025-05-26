<h1>Haii Karyawan</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="button">Logout</button>
</form>
