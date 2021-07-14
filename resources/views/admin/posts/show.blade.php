<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('site/style.css') }}">
        <link rel="stylesheet" hrel="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


          <img src="{{ url("storage/{$post->image}") }}" class="img-fluid" style="width: 18rem;"alt={{$post->name}}>
          <div class="card-body">
            <h1 class="card-title">{{$post->title}}</h1>
            <h1 class="card-text">{{'Alcunha'}}: {{$post->alcunha}}</h1>
            <p class="card-text">{{'Nome'}}: {{$post->nome}}</p>
            <h5 class="card-text">{{'orcrim'}}: {{$post->orcrim}}</h5>
            <p class="card-text">{{'Hierarquia'}}: {{$post->hierarquia}}</p>
            <p class="card-text">{{ 'Nivel de segurança' }}: {{$post->nivel_de_seguranca}}</p>
            <p class="card-text">{{ 'Colaborador' }}: {{$post->colaborador}}</p>
            <p class="card-text">{{ 'Ccasp' }}: {{$post->ccaps}}</p>
            <p class="card-text">{{ 'Data de nascimento' }}:{{date('d/m/Y',strtotime($post->data_nascimento))}}</p>
            <p class="card-text">{{ 'Genero' }}: {{$post->genero}}</p>
            <p class="card-text">{{ 'CPF' }}: {{$post->cpf}}</p>
            <p class="card-text">{{ 'RG' }}: {{$post->rg}}</p>
            <p class="card-text">{{ 'UF' }}: {{$post->uf}}</p>
            <p class="card-text">{{'Nascionalidade'}}: {{$post->nascionalidade}}</p>
            <p class="card-text">{{ 'Mãe' }}: {{$post->mae}}</p>
            <p class="card-text">{{ 'Pai' }}: {{$post->pai}}</p>
            <p class="card-text">{{'Cidade'}}: {{$post->cidade}}</p>
            <p class="card-text">{{ 'Bairro' }}: {{$post->bairro}}</p>
            <p class="card-text">{{ 'Endereço' }}: {{$post->endereco}}</p>
            <p class="card-text">{{ 'CEP' }}:{{$post->cep}}</p>
            <p class="card-text">{{ 'OBS' }}:{{$post->obs}}</p>
            <p class="card-text">{{ 'Dados sencíveis' }}:{{$post->dados_sensiveis}}</p>
            <p class="card-text">{{'Detalhes'}}: {{$post->content}}</p>
            <div class="accordion" id="accordionExample">







            <form action="{{route('posts.destroy', $post->id)}}" method="post">
             @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit"class="btn btn-danger"> Deletar {{$post->title}}</button>
            <a href="{{route('posts.index')}}" class="btn btn-primary">Home</a>
            <a href="{{ route ('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
        </form>



</body>

            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
            <link rel="stylesheet" hrel="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


            <script> console.log('Hi!'); </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</html>











