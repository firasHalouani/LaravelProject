<h1>Créer un nouvel Article</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label for="titre">Titre :</label>
    <input type="text" name="titre" required>

    <label for="contenu">Contenu :</label>
    <textarea name="contenu" required></textarea>

    <label for="date_publication">Date de publication :</label>
    <input type="date" name="date_publication">

    <button type="submit">Enregistrer</button>
</form>

<a href="{{ route('articles.index') }}">Retour à la liste des articles</a>
