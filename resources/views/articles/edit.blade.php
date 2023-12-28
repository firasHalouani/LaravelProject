<h1>Modifier l'article</h1>

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="titre">Titre :</label>
    <input type="text" name="titre" value="{{ $article->titre }}" required>

    <label for="contenu">Contenu :</label>
    <textarea name="contenu" required>{{ $article->contenu }}</textarea>

    <label for="date_publication">Date de publication :</label>
    <input type="date" name="date_publication" value="{{ $article->date_publication }}">

    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('articles.show', $article->id) }}">Annuler</a>
