@extends('layouts.admin')
@section('page-title', '')
@section('breadcrumb')
    @include('admin.partials.crumb', [
        'crumbs' => [
            route('admin.dashboard') => __('default.dashboard'),
            '#' => isset($pageTitle) ? $pageTitle : '',
        ],
    ])
@endsection

@section('content')
    <div class="card">

        <div class="card-body">


            <form method="post" action="{{ adminUrl(['controller' => 'account', 'action' => 'password']) }}">
                @csrf

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>


                <div class="form-footer">
                    <button type="submit" class="btn btn-primary float-right">{{ __lang('submit') }}</button>
                </div>

            </form>


        </div>

    </div>



@endsection
