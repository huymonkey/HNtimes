<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy giá trị token CSRF từ header
        $csrfTokenFromHeader = $request->header('X-CSRF-TOKEN');
        // Lấy token CSRF từ session
        $csrfTokenInSession = $request->session()->token();

        // Kiểm tra phương thức POST và CSRF token
        if (($request->isMethod('POST') || $request->isMethod('PUT') || $request->isMethod('PATCH') || $request->isMethod('DELETE')) && !$csrfTokenFromHeader) {
            // Trả về phản hồi tùy chỉnh nếu không có CSRF token trong header
            return response()->json([
                'message' => 'CSRF token is missing.'
            ], 419);
        }

        // Kiểm tra nếu token CSRF không khớp
        if (($request->isMethod('POST') || $request->isMethod('PUT') || $request->isMethod('PATCH') || $request->isMethod('DELETE')) && $csrfTokenFromHeader !== $csrfTokenInSession) {
            // Trả về phản hồi tùy chỉnh nếu CSRF token không khớp
            return response()->json([
                'message' => 'CSRF token is invalid.'
            ], 419);
        }

        return $next($request);

    }
}
