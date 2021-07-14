<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();


        return view('admin.posts.index', compact('posts'));
    }

public function create()
{
    return view('admin.posts.create');
}

public function store(StoreUpdatePost $request)
{
       $data = $request->all();

    if ($request->image->isValid())
    {
        $image = $request->image->store('posts' );
        $data ['image'] = $image;
    }

       Post::create ($data);

       return redirect()
       ->route('posts.index')
       ->with('message', 'Post Criado com sucesso!');

}

public function show($id)
{
   $post = Post::find($id);

   if (!$post)  {
       return redirect()->route('posts.index');
   }

   return view('admin.posts.show', compact('post'));
}

public function destroy($id)
{
if (!$post = Post::find($id))
return redirect()->route('posts.index');

if (Storage::exists($post->image))
    Storage::delete($post->image);

$post->delete();
return redirect()
->route('posts.index')
->with('message', 'Post deletado com sucesso!');

}

public function edit($id)
{

   if (!$post =Post::find($id))  {
       return redirect()->back();
   }
   return view('admin.posts.edit', compact('post'));
}
public function update(StoreUpdatePost $request, $id)
{
   if (!$post = Post::find($id))  {
       return redirect()->back();
   }

   $data = $request->all();

    if ($request->image && $request->image->isValid())
    {
    if (Storage::exists($post->image))
        Storage::delete($post->image);

        $nameFILE = Str::of($request->title)->slug('-'). '.' .$request->image->getClientOriginalExtension();

        $image = $request->image->storeAs('posts', $nameFILE);
        $data ['image'] = $image;
    }
        $post->update($data);

        return redirect()
       ->route('posts.index')
       ->with('message', 'Post atualizado  com sucesso!');
    }

public function search(Request $request)
{
$filters = $request->except('_token');

$posts = Post::where('nome', '=', $request->search)

               ->orWhere('nome',  'LIKE', "%{$request->search}%")
               ->orWhere('alcunha',  'LIKE', "%{$request->search}%")
               ->orWhere('orcrim',  'LIKE', "%{$request->search}%")
               ->orWhere('hierarquia',  'LIKE', "%{$request->search}%")
               ->orWhere('nivel_de_seguranca',  'LIKE', "%{$request->search}%")
               ->orWhere('colaborador',  'LIKE', "%{$request->search}%")
               ->orWhere('ccaps',  'LIKE', "%{$request->search}%")
               ->orWhere('data_nascimento',  'LIKE', "%{$request->search}%")
               ->orWhere('genero',  'LIKE', "%{$request->search}%")
               ->orWhere('cpf',  'LIKE', "%{$request->search}%")
               ->orWhere('rg',  'LIKE', "%{$request->search}%")
               ->orWhere('uf',  'LIKE', "%{$request->search}%")
               ->orWhere('nascionalidade',  'LIKE', "%{$request->search}%")
               ->orWhere('mae',  'LIKE', "%{$request->search}%")
               ->orWhere('pai',  'LIKE', "%{$request->search}%")
               ->orWhere('cidade',  'LIKE', "%{$request->search}%")
               ->orWhere('bairro',  'LIKE', "%{$request->search}%")
               ->orWhere('endereco',  'LIKE', "%{$request->search}%")
               ->orWhere('cep',  'LIKE', "%{$request->search}%")
               ->orWhere('obs',  'LIKE', "%{$request->search}%")
               ->orWhere('content',  'LIKE', "%{$request->search}%")
               ->paginate();

        return view('admin.posts.index', compact('posts', 'filters'));

}

}
