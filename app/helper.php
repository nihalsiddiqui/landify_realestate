<?php

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Filesystem\Filesystem;

function deleteFolrder($path)
{
    File::deleteDirectory(public_path($path));
}

function removeFile($path, $file_name)
{
    if (!empty($file_name)) {
        $delete = public_path($path . "\\" . $file_name);
        if (File::exists($delete)) {
            unlink($delete);
            return true;
        }
        return false;
    }
    return true;
}

function saveFile($request, $destination, $attribute_name = null, $prefix = "", $sufix = "", $return_ext = false, $imageObj = null)
{
    if (isset($imageObj) && !empty($imageObj) && $attribute_name == null) {
//        dd($imageObj);
        $temp = $imageObj;
        $file = $imageObj->getClientOriginalName();
        $file_ext = $imageObj->getClientOriginalExtension();
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $image = time() . "-" . ((!empty($prefix)) ? (str_ireplace(" ", "-", $prefix) . "-") : "") . str_ireplace(" ", "-", $fileName) . ((!empty($sufix)) ? "-" . str_ireplace(" ", "-", $sufix) : "") . "." . $file_ext;
//        dd($image);
        $temp->move($destination, $image);
    } else if (isset($attribute_name) && $request->hasFile($attribute_name) && $attribute_name != null) {
//        dd($request -> file($attribute_name));
        $temp = $request->file($attribute_name);
        $file = $request->$attribute_name->getClientOriginalName();
        $file_ext = $request->$attribute_name->getClientOriginalExtension();
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $image = time() . "-" . ((!empty($prefix)) ? (str_ireplace(" ", "-", $prefix) . "-") : "") . str_ireplace(" ", "-", $fileName) . ((!empty($sufix)) ? "-" . str_ireplace(" ", "-", $sufix) : "") . "." . $file_ext;
        $temp->move($destination, $image);
    }

    if ($return_ext) {

        return ["name" => (isset($image)) ? $image : null, "ext" => (isset($file_ext)) ? $file_ext : null];
    }
    return (isset($image)) ? $image : null;
}

//function saveFile($request, $destination, $attribute_name, $width = 0, $height = 0,$prefix = "",$sufix = "")
//{
//    if ($request->hasFile($attribute_name)) {
//        if ($width != 0 && $height != 0) {
//            $originalImage = $request->file($attribute_name);
//            $thumbnailImage = Image::make($originalImage);
//            $thumbnailPath = public_path() . "/" . $destination . "/";
//            $thumbnailImage->resize($width, $height);
//            $thumbnailImage->save($thumbnailPath . time() . $originalImage->getClientOriginalName());
//            $image = time() . $originalImage->getClientOriginalName();
//        } else {
//            $temp = $request->file($attribute_name);
//            $image = $request->$attribute_name->getClientOriginalName();
//            $temp->move($destination, $image);
//        }
//    }
//    return (isset($image)) ? $image : null;
//}

if (!function_exists('checkAgent')) {
    function checkAgent($object)
    {
        if (!((auth()->user()->hasRole('agent') && $object->admin && $object->admin->id === \auth()->id()) || (!auth()->user()->hasRole('agent')))) {
            return true;
        }

        return false;
    }
}

if (!function_exists('addCount')) {
    function addCount($object)
    {
        $object->count = $object->count + 1;
        $object->save();
    }
}

if (!function_exists('getPossibleEnumValues')) {
    function getPossibleEnumValues($table_name, $column)
    {
//    $instance = new static;
        $enumStr = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table_name . ' WHERE Field = "' . $column . '"'))[0]->Type;
        preg_match_all("/'([^']+)'/", $enumStr, $matches);

        return isset($matches[1]) ? $matches[1] : [];
    }
}

if (!function_exists('convertArea')) {
    function convertArea($type, $area)
    {
        if($type == 'marla') {
            $convertion = [
                'kanal' => $area / 20,
                'acre' => $area / 160,
                'square guz' => $area * 30.543,
                'murabba' => $area * 0.0002499999999,
            ];

            return $convertion;
        } else if ($type == 'kanal') {
            $convertion = [
                'marla' => $area * 20,
                'acre' => $area / 8,
                'square guz' => $area * 611,
                'murabba' => $area * 0.004999999998,
            ];

            return $convertion;
        } else if ($type == 'acre') {
            $convertion = [
                'marla' => $area * 160,
                'kanal' => $area * 8,
                'square guz' => $area * 4887,
                'murabba' => $area * 0.004999999998,
            ];

            return $convertion;
        } else if ($type == 'square_guz') {
            $convertion = [
                'marla' => $area / 30.543,
                'kanal' => $area * 8,
                'acre' => $area / 4887,
                'murabba' => $area / 121001.007,
            ];

            return $convertion;
        } else if ($type == 'murabba') {
            $convertion = [
                'marla' => $area * 4000.000001,
                'kanal' => $area * 200.0000001,
                'square guz' => $area * 121001.007,
                'acre' => $area * 25,
            ];

            return $convertion;
        }

        return [
            'message' => 'invalid input',
        ];
    }
}
