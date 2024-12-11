<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Staff</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <h1>Tambah Staff</h1>
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('staff.store') }}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="IDLibrary">IDLibrary:</label>
        <input type="text" id="IDLibrary" name="IDLibrary" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>
        <br>
        <label for="level">Level:</label>
        <select id="level" name="level" required>
            <option value="Admin">Admin</option>
            <option value="Pengunjung">Pengunjung</option>
        </select>
        <br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
