<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Data Staff</h1>

        @if($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('staff.update', $staff->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $staff->nama) }}" required>

            <label for="IDLibrary">IDLibrary:</label>
            <input type="text" id="IDLibrary" name="IDLibrary" value="{{ old('IDLibrary', $staff->IDLibrary) }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $staff->email) }}" required>

            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $staff->no_hp) }}" required>

            <label for="level">Level:</label>
            <select id="level" name="level" required>
                <option value="Admin" {{ old('level', $staff->level) == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Pengunjung" {{ old('level', $staff->level) == 'Pengunjung' ? 'selected' : '' }}>Pengunjung</option>
            </select>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat">{{ old('alamat', $staff->alamat) }}</textarea>

            <button type="submit" class="edit">Update</button>
            <a href="{{ route('staff.index') }}" class="btn cancel">Batal</a>
        </form>
    </div>
</body>
</html>
