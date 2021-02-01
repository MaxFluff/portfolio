@extends('base.header')
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        
                    @else
                        <a href="/admin">Login</a> |
                    @endauth
                </div>
            @endif
@extends('base.base')