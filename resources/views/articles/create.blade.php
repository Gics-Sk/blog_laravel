@section('title')
Formulaire
@endsection
<form action="create" enctype="multipart/form-data" method="post">
@csrf
@include('partials.article-form')
</form>
