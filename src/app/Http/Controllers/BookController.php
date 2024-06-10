<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Afficher tous les livres
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Afficher le formulaire pour créer un nouveau livre
    public function create()
    {
        return view('books.create');
    }

    // Enregistrer un nouveau livre
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'genre' => 'required',
        ]);

        Book::create($validated);
        return redirect()->route('books.index')->with('success', 'Livre ajouté avec succès.');
    }

    // Afficher les détails d'un livre
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Afficher le formulaire pour modifier un livre
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Mettre à jour un livre
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'genre' => 'required',
        ]);

        $book->update($validated);
        return redirect()->route('books.index')->with('success', 'Livre mis à jour avec succès.');
    }

    // Supprimer un livre
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Livre supprimé avec succès.');
    }
}
