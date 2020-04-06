<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role as R;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();           // fetch the user
        foreach($roles as $role) {
            $r = R::where('title', $role)->first();
            if ($user->roles->contains($r)) {        // check if user's role_id contains employee or admin
                return $next($request);
            }
        }
        return redirect('/admin');
    }
}
