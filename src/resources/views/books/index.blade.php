<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
</head>
<body>
    <header>
        <h1>BookShelf</h1>
    </header>
    <main>
        <section class="book-list">
            <h1>Liste des Livres</h1>
            <a class="btn-add" href="{{ route('books.create') }}">Ajouter un livre</a>
            @if(session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif
            <div class="books">
                @foreach($books as $book)
                    <div class="book-card">
                        <h2>{{ $book->title }}</h2>
                        <p><strong>Auteur :</strong> {{ $book->author }}</p>
                        <p><strong>Catégorie :</strong> {{ $book->category }}</p>
                        <p><strong>Genre :</strong> {{ $book->genre }}</p>
                        <div class="actions">
                            <a class="btn-edit" href="{{ route('books.edit', $book->id) }}">Modifier</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 BookShelf</p>
    </footer>
</body>
</html>
<style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #f5f5f5;
}

header {
    background-color: #333;
    color: white;
    padding: 1rem;
    text-align: center;
}

header nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

header nav ul li {
    display: inline;
}

header nav ul li a {
    color: white;
    text-decoration: none;
}

main {
    flex: 1;
    padding: 2rem;
}

.book-list {
    max-width: 800px;
    margin: 0 auto;
}

.book-list h1 {
    text-align: center;
    margin-bottom: 1rem;
}

.btn-add {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin-bottom: 1rem;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.alert {
    background-color: #d4edda;
    color: #155724;
    padding: 1rem;
    border-radius: 5px;
    margin-bottom: 1rem;
}

.books {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.book-card {
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    width: calc(50% - 1rem);
}

.book-card h2 {
    margin-top: 0;
}

.actions {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
}

.btn-edit, .btn-delete {
    padding: 0.5rem 1rem;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.btn-edit {
    background-color: #007bff;
    color: white;
}

.btn-delete {
    background-color: #dc3545;
    color: white;
}

.inline-form {
    display: inline;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem;
}

</style>