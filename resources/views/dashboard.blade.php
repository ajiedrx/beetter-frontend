@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Dashboard</title>
</head>
<body>
<div id="content">
    @php $team=true @endphp
    @include('includes.navbar')
    @if(!$team)
        <div class="wrapper bg-light">
            <div class="row vh-100 d-flex align-items-center col justify-content-center">
                <div class="col">
                    <p>You don't have any team yet</p>
                </div>
            </div>
        </div>
    @endif
    @if($team)
        <div class="wrapper vh-100 bg-light">
            <div class="card-columns pr-4 pl-4 pt-4" style="column-count: 5">
                <div class="card" style="width: auto; border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                    <div class="card-header bg-secondary d-flex flex-row" style="border-top-left-radius: 8px; border-top-right-radius: 8px">
                        <div class="p-2 text-light mr-5">Team name</div>
                        <div class="p-2 ml-auto"><i class="fas fa-user-circle" style="width: 40px; height: 40px;"></i></div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="font-weight-bold text-center" style="font-size: 14px; margin-bottom: -10px">Buddy</div>
                        <hr width="150px">
                        <div class="text-center text" style="font-size: 12px; margin-top: -10px">Project Manager</div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
</body>
</html>
