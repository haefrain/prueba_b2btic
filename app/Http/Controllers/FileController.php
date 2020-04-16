<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;
use App\Type;
use App\File;
use DB;
use PDF;

class FileController extends Controller
{
    public function index()
    {
        $files = $this->getFiles();
        $types = $this->getTypes();
        return view('home', compact('files', 'types'));
    }

    public function storeFiles()
    {
        $url = 'http://test.analitica.com.co/AZDigital_Pruebas/WebServices/ServiciosAZDigital.wsdl';
        $params = [];
        try {
            $client = new SoapClient($url, $params);
            $client->__setLocation('http://test.analitica.com.co/AZDigital_Pruebas/WebServices/SOAP/index.php');
            $condition = ['Condiciones' =>  ['Condicion' => ['Tipo' => 'FechaInicial', 'Expresion' => '2019-07-01 00:00:00']]];
            $response = $client->BuscarArchivo($condition);
            if ($this->storeTypes($response)) {
                $extensions = Type::get();
                $arrExtensions = [];
                foreach ($extensions as $extension) {
                    $arrExtensions[$extension->name] = $extension->id;
                }

                $files = [];
                foreach ($response->Archivo as $file) {
                    $arrName = explode('.', $file->Nombre);
                    $extension = $this->validateType($arrName);
                    $files[] = ['code' => $file->Id, 'type_id' => $arrExtensions[$extension], 'name' => $file->Nombre];
                }
                DB::table('files')->insertOrIgnore($files);
                return redirect('/');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function exportTypes()
    {
        $types = $this->getTypes();
        $pdf = PDF::loadView('pdf.export_types', compact('types'));
        $pdf->save(public_path() . '_types_report.pdf');
        return $pdf->stream('_types_report.pdf');
    }

    public function exportFiles()
    {
        $files = $this->getFiles();
        $pdf = PDF::loadView('pdf.export_files', compact('files'))->setPaper('a4', 'portrait');
        $pdf->save(public_path() . '_files_report.pdf');
        return $pdf->stream('_files_report.pdf');
    }

    private function getFiles()
    {
        $files = File::get();
        if (!$files) {
            $files = [];
        }
        return $files;
    }

    private function getTypes()
    {
        $types = Type::withCount(['files'])->get();
        if (!$types) {
            $types = [];
        }
        return $types;
    }

    private function storeTypes($data)
    {
        foreach ($data->Archivo as $file) {
            $arrName = explode('.', $file->Nombre);
            $extension = $this->validateType($arrName);
            $extensions[] = ['name' => $extension];
        }
        $extensionsFiltered = array_unique($extensions, SORT_REGULAR);

        DB::table('types')->insertOrIgnore($extensionsFiltered);
        return true;
    }

    private function validateType($arrName)
    {
        if (is_array($arrName)) {
            $extension = count($arrName) > 1 ? $arrName[count($arrName) - 1] : 'Sin extension';
        } else {
            $extension = 'Sin extension';
        }

        return $extension;
    }
}
