<?php

namespace App\Livewire\File;

use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
class FileComponent extends Component
{
    use WithFileUploads;
    public $file, $name;
    public function render(){
        return view('livewire.file.file-component')
        ->layout('layout.app');
    }

    public function save()
    {
        try{
            if ($this->photo) {
                $this->photo->storeAs('public/files', name: md5($this->file->getClientOriginalName()).'.'.$this->file->getClientOriginalExtension());
            }
        }catch(Exception $ex){
        return response()->json(['error' => $ex->getMessage()]);
        }


    }


}
