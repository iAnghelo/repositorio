<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;
use Illuminate\Support\Facades\Storage; //Para utilizar STORAGE


class InformeController extends Controller
{

   public function index()
   {
      return view('panel.indexInformes');
   }

   public function add()
   {
      return view('informes.add');
   }

   public function store(Request $request)
   {
      $request->validate([
         'titulo' => 'required|string|max:255',
         'resumen' => 'required|string',
         'autores' => 'required|string',
         'fecha_emision' => 'required|date',
         'year_creacion' => 'required|integer',
         'estado' => 'required|string',
         'tipo_acceso' => 'required|string',
         'tipo_informe' => 'required|string',
         'caratula' => 'required|image|mimes:jpeg,png,jpg,gif',
      ]);

      $new = new Informe();
      $new->titulo = $request->titulo;
      $new->resumen = $request->resumen;
      $new->autores = $request->autores;
      $new->fecha_emision = $request->fecha_emision;
      $new->year_creacion = $request->year_creacion;
      $new->estado = $request->estado;
      $new->tipo_acceso = $request->tipo_acceso;
      $new->tipo_informe = $request->tipo_informe;

      $file = $request->file('caratula');
      $originalName = $file->getClientOriginalName(); // Obtener el nombre original del archivo
      $path = $file->storeAs('caratulas', $originalName, 'public');
      $new->ruta = $path;

      $new->save();

      session()->flash('success', '¡Informe añadido exitosamente!');

      return redirect('/informes');
   }

   public function update(Request $request, $id)
   {
      $informe = Informe::find($id);

      $request->validate([
         'titulo' => 'required|string|max:255',
         'resumen' => 'required|string',
         'autores' => 'required|string',
         'fecha_emision' => 'required|date',
         'year_creacion' => 'required|integer',
         'estado' => 'required|string',
         'tipo_acceso' => 'required|string',
         'tipo_informe' => 'required|string',
         'caratula' => 'nullable|image|mimes:jpeg,png,jpg,gif',
      ]);

      if ($informe->ruta) {
         Storage::disk('public')->delete($informe->ruta);
      }

      if ($request->hasFile('caratula')) {
         if ($informe->ruta) {
            Storage::disk('public')->delete($informe->ruta);
         }

         $file = $request->file('caratula');
         $filename = $file->getClientOriginalName();
         $path = $file->storeAs('caratulas', $filename, 'public');
         $informe->ruta = $path;
      }

      $informe->titulo = $request->titulo;
      $informe->resumen = $request->resumen;
      $informe->autores = $request->autores;
      $informe->fecha_emision = $request->fecha_emision;
      $informe->year_creacion = $request->year_creacion;
      $informe->estado = $request->estado;
      $informe->tipo_acceso = $request->tipo_acceso;
      $informe->tipo_informe = $request->tipo_informe;

      $informe->save();

      session()->flash('success', '¡Proyecto modificado exitosamente!');

      return redirect('/informes');
   }

   public function destroy($id)
   {
      $drop = Informe::find($id);
      Storage::disk('public')->delete($drop->ruta);
      $drop->delete();

      session()->flash('success', '¡Proyecto eliminado exitosamente!');

      return redirect('/informes');
   }

   public function showInformes()
   {
      $informes = Informe::orderBy('id', 'asc')->paginate(10);
      return view('panel.indexInformes', compact('informes'));
   }

   public function showByIdInformes($id)
   {
      $id = Informe::find($id);
      $tipos = [
         'TV/Monitores' => 'TV/Monitores',
         'PC' => 'PC',
         'Gaming/Consola' => 'Gaming/Consola',
         'Teléfonos' => 'Teléfonos'
      ];

      $estados = [
         'Publicar' => 'Publicar',
         'No Publicar' => 'No Publicar'
      ];

      $tipos_acceso = [
         'Publico' => 'Publico',
         'Privado' => 'Privado'
      ];

      return view('informes.edit', compact('id', 'tipos', 'estados', 'tipos_acceso'));
   }
}
