<?php

namespace App\Exceptions;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof TokenMismatchException) {
            if (Auth::guard('web')->check()){
                return redirect(route('logout'))->withInput($request->except('password', '_token'))->withErrors(["Validation token has expired. Please try again"]);
            }

            elseif(Auth::guard('admin')->check()){
                return redirect(route('admin.logout'))->withInput($request->except('password', '_token'))->withErrors(["Validation token has expired. Please try again"]);
            }

            elseif(Auth::guard('institution')->check()){
                return redirect(route('institution.logout'))->withInput($request->except('password', '_token'))->withErrors(["Validation token has expired. Please try again"]);
            }
        }
        return parent::render($request, $exception);
    }
}
