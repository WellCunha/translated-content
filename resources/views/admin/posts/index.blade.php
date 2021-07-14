<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Crip Home</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">

<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
</head>
<body>
    <br>
    <br>
    <a href="{{route('posts.create')}}"class="btn btn-primary">Cadastrar nova pessoa</a>
    <br>
    <br>

    <form action="{{route('posts.search')}}" method="post">
        @csrf
    <input type="text" name="search" placeholder="Buscar:">
    <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

   <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-5 g-3">
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100 shadow-sm"><a href="{{ route ('posts.show', $post->id) }}"><img class="card-img-topc" src="{{ url("storage/{$post->image}") }}"  alt="{{$post->nome}}"></a>
                        <div class="label-top badge rounded-pill  ">{{$post->orcrim}}</div><div class="card-bodyc">
                            <div class="clearfix mb-1"><span class="float-start  rounded-pill price-hp"><hg>Nome:</hg>{{$post->nome}}</span><br><span class="float-start  rounded-pill price-hp">Alcunha:<hv>{{$post->alcunha}}</hv></span><br><br><br>
                                <span class="text-muted small"  class="float-start  rounded-pill price-hpb"> Bairro:{{$post->bairro}}</span></div>
                            <div> </div>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span>

                       </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
</html>






​
