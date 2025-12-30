<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;

class OrderDetailController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $detail = OrderDetail::findOrFail($id);
        $detail->update(['status' => $request->status]);

        // Opsional: Cek jika SEMUA detail sudah selesai, update status Order Utama jadi 'Selesai'
        $order = $detail->order;
        if ($order->details()->where('status', '!=', 'Selesai')->count() == 0) {
            $order->update(['status_order' => 'Selesai']);
        }

        return back()->with('success', 'Status item berhasil diperbarui!');
    }
}