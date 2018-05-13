<?php
namespace Legobox\QuickTraits\Http;

use Legobox\QuickTraits\Http\Responders;
use Legobox\QuickTraits\Events\RegisteredModel;
use Validator;
// use an event to broadcast the creation of new stuffs
// use an event to broadcast updates on new stuffs

trait RequestHelpers {
	use Responders;
	
	public function validator($data, $rules = null) {
		if($rules){
			return Validator::make($data, $rules);
		}
		return Validator::make($data);
	}

	public function newModel($data){
		// creating new model
		$model = $this->model();
		event(new RegisteredModel($registered = $this->model()::create($data)));
		return $registered;
	}

	public function create(){

	}
}