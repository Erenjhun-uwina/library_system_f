<?php


namespace App\Actions;
use Illuminate\Http\UploadedFile;


class ImageUploader{

    /**
     * if filename is not given generate uniqe one based on date 
     */
    public function handle(UploadedFile $file = null,string $path,$filename=null)
    {
        $new_file_name=$filename;

        if ($file) {
            $ext = $file->getClientOriginalExtension();
            $date = date('YmdHi');
            $rand1 = rand(0,9);
            $rand2 = rand(0,9);
            $new_file_name = "$rand1$date$rand2.$ext";
            $file->move(public_path($path), $new_file_name);
        }
        return $new_file_name;
    }
}