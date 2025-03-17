<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>
    <!-- pesan success -->
    @if(session('success'))
        <p>{{ session('success')}}</p> <!-- Menampilkan pesan sukses -->
    @endif

    <!-- menambahkan new item -->
    <a href="{{ route('items.create') }}">Add Item</a>
    <ul>
        @foreach ($items as $item) <!-- Melakukan looping pada setiap item dalam variabel $items -->
            <li>
                {{ $item->name }} - <!-- Menampilkan nama item -->
                <!-- Form untuk menghapus item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- mengedit item -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE') <!-- Menggunakan metode DELETE untuk menghapus item -->
                    <button type="submit">Delete</button> <!-- Tombol hapus item -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>