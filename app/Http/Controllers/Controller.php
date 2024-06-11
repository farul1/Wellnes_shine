<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function shop(Request $request)
    {
        if ($request->has('kategory') && $request->has('type')) {
            $category = $request->input('kategory');
            $type = $request->input('type');
            $data = product::where('kategory', $category)
            ->orWhere('type', $type)->paginate(5);
        } else {
            $data = product::paginate(5);
        }
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();


        return view('pelanggan.page.shop', [
            'title'     => 'Shop',
            'data'      => $data,
            'count'     => $countKeranjang,
        ]);
    }

    public function transaksi()
    {
        $db = tblCart::with('product')->where(['idUser' => 'guest123', 'status' => 0])->get();
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        // dd($db->product->nama_product);die;
        return view('pelanggan.page.transaksi', [
            'title'     => 'Transaksi',
            'count'     => $countKeranjang,
            'data'      => $db
        ]);
    }

}
