<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;

class UploadDicom extends Component
{
	
	use WithFileUploads;
	
	public $dicoms;
	
	public function save()
	{
		$this->validate([
			'dicoms' => 'image|max:1024',
		]);
		
		$this->photo->store('dicoms');
	}
	
    public function render()
    {
        return view('livewire.upload-dicom');
    }
}
