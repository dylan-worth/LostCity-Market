<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MarketShutdown
{
    public function handle(Request $request, Closure $next)
    {
        if (! config('market_shutdown.enabled')) {
            return $next($request);
        }

        if ($request->routeIs([
            'status.shutdown',
            'logout',
            'admin.*',
            'ban.*',
            'promote.store',
            'demote.destroy',
            'items.show',
        ])) {
            return $next($request);
        }

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Markets are temporarily shut down.',
            ], 503);
        }

        return redirect()->route('status.shutdown');
    }
}
