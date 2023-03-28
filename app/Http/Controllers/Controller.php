<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\mesas;
use App\Models\Pase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function shearch(Request $request){
        $consultar=mesas::where('codigo','=',strtoupper($request->codigo))->first();
        if(isset($consultar))
        {
            return view('mesas',compact('consultar'));
        }else{
            return redirect()->route('index');
        }
    }

    public function giveMoreLove(int $id){
        $event = Evento::find($id);
        $event->love += 1;
        $event->save();

        return $event->love;
    }
    public function getPases(Request $request){
        try {
            $respuesta = Pase::where('code',$request->code)->first();
            if(empty($respuesta)){
                $respuesta = 0;
            }
            return $respuesta;
        } catch (\Throwable $th) {
            return $th;
        }

    }
    public function savePase(Request $request){
        try {
            $pase = Pase::where('code',$request->code)->first();
            if($request->action == "add"){
                if(isset($pase)){
                    return response()->json([
                        'status' => '0',
                        'msg' => 'Ya existe un pase con este código',
                    ]);
                }else{
                    Pase::create([
                        'id_evento' => $request->idEvento,
                        'code' => $request->code,
                        'persona' => $request->persona,
                        'mesa' => $request->mesa,
                        'pases' => $request->pases,
                        'confirm' => $request->confirm,
                    ]);
                }
            }else{
                $pase->persona = $request->persona;
                $pase->mesa = $request->mesa;
                $pase->pases = $request->pases;
                $pase->confirm = $request->confirm;
                $pase->save();
            }
            return response()->json([
                'status' => '1',
                'msg' => 'Guardado',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => '0',
                'msg' => $th,
            ]);
        }
    }

    public function confirm(Request $request){
        try {
            $pase = Pase::where('code',$request->code)->first();
            $pase->confirm = $request->pases;
            $pase->save();
            return 1;
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function panelAnfitrion(Request $request){
        $evento = Evento::findOrFail($request->id);
        if($evento->password == $request->password){
            $pases = Pase::where('id_evento', $request->id)->get();
            return view('panelAnfitrion',compact('pases','evento'));
        }else{
            return redirect()->back();
        }
    }
}
