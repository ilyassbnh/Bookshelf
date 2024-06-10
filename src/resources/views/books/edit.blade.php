<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Livre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>BookShelf</h1>
    </header>
    <main>
        <section class="form-section">
            <h1>Modifier le Livre</h1>
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="author">Auteur :</label>
                    <input type="text" name="author" id="author" value="{{ $book->author }}">
                </div>
                <div class="form-group">
                    <label for="category">Catégorie :</label>
                    <input type="text" name="category" id="category" value="{{ $book->category }}">
                </div>
                <div class="form-group">
                    <label for="genre">Genre :</label>
                    <input type="text" name="genre" id="genre" value="{{ $book->genre }}">
                </div>
                <button type="submit" class="btn-add">Mettre à jour</button>
            </form>
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

.form-section {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 2rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-section h1 {
    text-align: center;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
}

.form-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-add {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    text-align: center;
    width: 100%;
}

.btn-add:hover {
    background-color: #218838;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem;
}

</style>