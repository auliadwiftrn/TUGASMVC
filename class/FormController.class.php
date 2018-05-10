<?php 

 class FormController{
 	private $uiFormAwal;
 	private $uiFormAkhir;
 	private $ObjekModel;



 	public function getFormInput(){
 		$this->uiFormInput = new FormView();
 		$this->uiFormInput-> FormInput();
	}

	public function getFormOK(){
		$this->ObjekModel = new FormModel();
		$data = $this->ObjekModel->Ruangan();
		$this->uiFormOK = new FormView();
		$this->uiFormOK-> FormOK($data);
	}

 }