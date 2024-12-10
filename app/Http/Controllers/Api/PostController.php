<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function destroy($id)
    {
        try {
            // Cari post berdasarkan ID
            $post = Post::find($id);

            // Jika post tidak ditemukan, kembalikan respons 404
            if (!$post) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Post Tidak Ditemukan!',
                    'data' => null
                ], 404);
            }

            // Hapus post
            $post->delete();

            // Kembalikan respons berhasil
            return response()->json([
                'success' => true,
                'message' => 'Data Post Berhasil Dihapus!',
                'data' => null
            ], 200);
        } catch (\Exception $e) {
            // Tangani error tak terduga
            return response()->json([
                'success' => false,
                'message' => 'Terjadi Kesalahan pada Server!',
                'data' => null
            ], 500);
        }
    }
}
