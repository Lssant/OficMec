<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pagamento;

class ControllerPagamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('pagamentos.pagar',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagamento = new Pagamento();

        $pagamento->descricao = $request->input('descricao');
        $pagamento->valor = $request->input('valor');
        $pagamento->servico_id = $request->input('idServ');
        $pagamento->save();
        return redirect('servicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagamento = Pagamento::find($id);
        $s = $pagamento->servico_id;
        
        if (isset($id))
            $pagamento->delete();


        return redirect()->action('ControllerServico@show',['id'=>$s]);

        }
}
