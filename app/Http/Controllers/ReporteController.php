<?php

namespace App\Http\Controllers;

use App\Reporte;
use Illuminate\Http\Request;


class ReporteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth')->except('index');//solo esas rutas no estaran
        //$this->middleware('auth')->only('create','edit');//solo esas rutas estan protegidas
    }

    public function index()
    {
        $gymId = auth()->user()->gymActivo_id;

        return view('reportes.index', [
            'reportes' => Reporte::orderBy('created_at','DESC')
                ->gymId($gymId)
                ->paginate()//latest()
        ]);
    }

    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reportes.index')->with('status',__('Deleted successfully'));
    }

    public function store(Request $request){
        $fields = request()->validate([
            'producto' => 'required|string',
            'monto' => 'required|integer',
        ]);
        
        // $convertPrecio = (int)$fields['precio'];
        // $pago = $fields['cantidad']*$convertPrecio;
        //===============================================================
        //                          REPORTE
        //----------------------------------------------------------------
        $reporte = new Reporte();
        $reporte->nombre = $fields['producto'];
        $reporte->pago = $fields['monto'];
        $reporte->gym_id = auth()->user()->gymActivo_id;// le agregamos el gym id activo

        $reporte->save();
        
        return redirect()->route('productos.index')->with('status',__('Product was successfully added'));
    }


}
