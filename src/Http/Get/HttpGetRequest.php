<?php
namespace Simovative\Zeus\Http\Get;

use Simovative\Zeus\Http\Request\HttpRequest;

/**
 * @author mnoerenberg
 */
class HttpGetRequest extends HttpRequest {
	
	/**
	 * @inheritdoc
	 * @author mnoerenberg
	 */
	public function isGet() {
		return true;
	}
}
