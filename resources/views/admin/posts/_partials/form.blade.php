
<div >
  @if ($errors->any())
<ul>
   @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
     @endif
</div>



<div class="container-md">

    @csrf

<div class="mb-3">
        <hr>

        <img style="width: 200px; height: 200px;"><br><br>
        <label for="inputfoto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="image" id="image"  onchange="previewImage()">
</div>

<div class="mb-3">
    <label for="inputtitulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo" value="{{ $post->title ?? old('title') }}">
</div>
<div class="mb-3">
    <label for="inptalcunha" class="form-label">Alcunha</label>
    <input type="text" class="form-control" name="alcunha"  id="alcunha" placeholder="Alcunha" value="{{ $post->alcunha ?? old('alcunha') }}">
</div>

<div class="mb-3">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="nome" value="{{ $post->nome ?? old('nome') }}">
</div>

<div class="mb-3">
    <label for="inputorcrim" class="form-label">Orcrim</label>
    <input type="text" class="form-control" name="orcrim" id="orcrim" placeholder="Orcrim" value="{{ $post->orcrim ?? old('orcrim') }}">
</div class="mb-3">

<div class="mb-3">
    <label for="inputhierarquia" class="form-label">Hierarquia</label>
    <input type="text" class="form-control" name="hierarquia" id="hierarquia" placeholder="Hierarquia" value="{{ $post->hierarquia ?? old('hierarquia') }}">
</div>

<div class="mb-3">
    <label for="inputuNivel_de_segurança" class="form-label">Nivel de segurança</label>
    <input type="text" class="form-control" name="nivel_de_seguranca" id="nivel_de_seguranca" placeholder="Nivel de seguranca" value="{{ $post->nivel_de_seguranca ?? old('nivel_de_seguranca') }}">
</div>


<div class="mb-3">
    <label for="inputendereço" class="form-label">Endereço</label>
      <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço:" value="{{ $post->endereco ?? old('endereco') }}">
  </div>


<div class="mb-3">
    <label for="inputColaborador" class="form-label">Colaborador</label>
    <select  name="colaborador" id"colaborador" class="form-select" >

        <option value="0">Sim</option>
        <option value="1">Não</option>

      </select>
</div>


  <div class="mb-3">
    <label for="inputccasp" class="form-label">Ccasp</label>
      <input type="text" class="form-control" name="ccaps" id="ccaps" placeholder="ccaps:" value="{{ $post->ccaps ?? old('ccaps') }}">
  </div>

  <div class="mb-3">
    <label for="inputdata_nascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento:" value="{{ $post->data_nascimento ?? old('data_nascimento') }}">
  </div>

  <div class="mb-3">
    <label for="inputgenero" class="form-label">Genero</label>
      <input type="text" class="form-control" name="genero" id="ccaps" placeholder="Genero:" value="{{ $post->ccaps ?? old('genero') }}">
  </div>

  <div class="mb-3">
    <label for="inputcpf" class="form-label">Cpf</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Cpf:" value="{{ $post->cpf ?? old('cpf') }}">
  </div>

  <div class="mb-3">
    <label for="inputrg" class="form-label">RG</label>
      <input type="text" class="form-control" name="rg" id="rg" placeholder="Rg:" value="{{ $post->rg ?? old('rg') }}">
  </div>

  <div class="mb-3">
    <label for="inputuf" class="form-label">Uf</label>
      <input type="text" class="form-control" name="uf" id="uf" placeholder="Uf:" value="{{ $post->uf ?? old('uf') }}">
  </div>

  <div class="mb-3">
    <label for="inpuntascionalidade" class="form-label">Nascionalidade</label>
      <input type="text" class="form-control" name="nascionalidade" id="nascionalidade" placeholder="Nascionalidade:" value="{{ $post->nascionalidade ?? old('nascionalidade') }}">
  </div>

  <div class="mb-3">
    <label for="inputmae" class="form-label">Mãe</label>
      <input type="text" class="form-control" name="mae" id="nae" placeholder="Mãe:" value="{{ $post->mae ?? old('mae') }}">
  </div>

  <div class="mb-3">
    <label for="inputpai" class="form-label">Pai</label>
      <input type="text" class="form-control" name="pai" id="pai" placeholder="Pai:" value="{{ $post->pai ?? old('pai') }}">
  </div>

  <div class="mb-3">
    <label for="inputcidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade:" value="{{ $post->cidade ?? old('cidade') }}">
  </div>

  <div class="mb-3">
    <label for="inputbairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro:" value="{{ $post->bairro ?? old('bairro') }}">
  </div>

  <div class="mb-3">
    <label for="inputcep" class="form-label">Cep</label>
      <input type="text" class="form-control" name="cep" id="cep" placeholder="Cep:" value="{{ $post->cep ?? old('cep') }}">
  </div>

  <div class="mb-3">
    <label for="inputobs" class="form-label">Obs</label>
      <input type="text" class="form-control" name="obs" id="obs" placeholder="obs:" value="{{ $post->obs ?? old('obs') }}">
  </div>


  <p>
      <div>
<button type="submit" class="btn btn-success" class="mb-3">Enviar</button>

      </div>

  </p>






<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function previewImage(){
            var image = document.querySelector('input[name=image]').files[0];
            var preview = document.querySelector('img');

            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if(image){
                reader.readAsDataURL(image);
            }else{
                preview.src = "";
            }
        }
    </script>

</body>
