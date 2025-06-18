<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait RenderToJson {
    /**
     * Render the exception as a JSON response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function render(): JsonResponse {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage()
        ], $this->getCode());
    }
}
