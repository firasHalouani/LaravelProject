<style>
    .custom-table {
        border-collapse: collapse;
        width: 30%;
    }

    .custom-table th, .custom-table td {
        border: 1px solid black;
        padding: 8px; /* Ajoutez un espace autour du contenu */
    }
</style>

<h1>Liste des articles</h1>

<div class="table-responsive">
    <table class="custom-table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->titre }}</td>
                    <td>{{ $article->contenu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('articles.create') }}">Créer un nouvel article</a>
