<html>
<head>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<form action="{{route('editarMateria')}}" method="POST" class="container">
    @csrf
    <div class="mb-3">
        <label for="nome_materia" class="form-label">Nome Materia</label>
        <input type="text" name="nome_materia" class="form-control" id="nome_materia" placeholder="Nome Materia" value="{{$materia['nome_materia']}}">
    </div>
    <div class="mb-3">
        <label for="area_de_estudo" class="form-label">Area de Estudo</label>
        <input type="text" name="area_de_estudo" class="form-control" id="area_de_estudo" placeholder="Area de Estudo" value="{{$materia['area_de_estudo']}}">
    </div>
    <input type="hidden" value="{{$materia["id"]}}" name="id">
    <button type="submit" class="btn btn-outline-primary">Criar</button>

</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
