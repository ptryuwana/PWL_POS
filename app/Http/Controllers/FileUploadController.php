<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // return "Pemrosesan file upload di sini";

        $request->validate([
            'berkas' => 'required|file|image|max:5000',
        ]);
        // $path = $request->berkas->store('uploads');
        $extFile = $request->berkas->getClientOriginalName();

        $namaFileInput = $request->input('namaFileInput');

        $namaFile = 'web-'.time().".".$extFile;

        // $path = $request->berkas->storeAs('public', $namaFile);

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//",$path);
        // echo "Variable path berisi: $path <br>";

        $pathBaru = asset('gambar/'.$namaFile);
        echo "Gambar berhasil diupload di <a href='$pathBaru'>$namaFileInput.$extFile</a>";
        // echo "Proses upload berhasil, file berada di: $path";
        echo "<br><br>";
        echo "<img src='$pathBaru' alt='Ini Gambar' style='max-width: 400px; max-height: 400px;'>";
        // echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
        // echo $request->berkas->getClientOriginalName()." lolos validasi";

        // if($request->hasFile('berkas')){
        //     echo "path()= ". $request->berkas->path();
        //     echo "<br>";
        //     echo "extension()= ". $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension()= ". $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType()= ". $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName()= ". $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize()= ". $request->berkas->getSize();
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }
        }
}
