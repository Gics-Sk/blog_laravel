<p><label for="">Titre</label></p>
<p><input type="text" name="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}"></p>
@error('title')
    <div>{{ $message }}</div>
@enderror
<p><label for="">Corps</label></p>
<p><textarea name="body" id="" cols="30" rows="10">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea></p>
@error('body')
    <div>{{ $message }}</div>
@enderror
<p><input type="file" name="image"></p>
@error('image')
    <div>{{ $message }}</div>
@enderror
<button type="submit">Enregistrer</button>