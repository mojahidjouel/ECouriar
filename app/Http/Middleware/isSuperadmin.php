<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; //custome
use Illuminate\Http\Request;
use Session; // custome

class isSuperadmin
{
    use ResponseTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse

    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('userId') || Session::has('userId')==null || !Session::has('roleIdentity')){
            return redirect()->route('logOut');
        }else{
            $user=User::findOrFail(currentUserId());
            app()->setLocale($user->language); // language
            if(!$user){
                return redirect()->route('logOut');
            }else if(currentUser() != 'superadmin'){
                return redirect()->back()->with($this->resMessageHtml(false,'error','Access Denied'));
            }else{
                return $next($request);
            }
        }
        return redirect()->route('logOut');
    }
}

