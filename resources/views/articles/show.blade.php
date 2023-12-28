<h1>{{ $article->titre }}</h1>
<p>{{ $article->contenu }}</p>

<a href="{{ route('articles.edit', $article->id) }}">Modifier</a>

<form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>

<a href="{{ route('articles.index') }}">Retour à la liste des articles</a>
