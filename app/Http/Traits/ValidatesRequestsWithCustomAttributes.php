<?php namespace App\Http\Traits;

use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Validator;
use Illuminate\Http\Exception\HttpResponseException;

trait ValidatesRequestsWithCustomAttributes {
	use ValidatesRequests;

	/**
	 * Validate the given request with the given rules and sets custom attributes (column names), overrides validate() in ValidatesRequests
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  array  $rules
	 * @param  array  $messages
	 * @param  array  $attributes
	 * @return void
	 */
	public function validateWithCustomAttributes(Request $request, array $rules, array $messages = array(), array $attributes = array())
	{
		$validator = $this->getValidationFactory()->make($request->all(), $rules, $messages, $attributes);

		if ($validator->fails())
		{
			$this->throwValidationException($request, $validator);
		}
	}

}