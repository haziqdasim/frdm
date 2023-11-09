<x-auth-layout>
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('login') }}">
        @csrf
        <div class="text-start mb-10">
            <h1 class="text-dark mb-3 fs-3x" data-kt-translate="password-reset-title">Selamat Kembali!</h1>
            <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="password-reset-desc">
                ke Portal Fire Rescue Department Malaysia
            </div>
        </div>
        {{-- <div class="row g-3 mb-9">
            <div class="col-md-6">
                <a href="{{ url('/auth/redirect/google') }}?redirect_uri={{ url()->current() }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                    <img alt="Logo" src="{{ image('svg/brand-logos/google-icon.svg') }}" class="h-15px me-3"/>
                    Sign in with Google
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                    <img alt="Logo" src="{{ image('svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3"/>
                    <img alt="Logo" src="{{ image('svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3"/>
                    Sign in with Apple
                </a>
            </div>
        </div>
        <div class="separator separator-content my-14">
            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
        </div> --}}
        <div class="fv-row mb-8">
            <input type="text" placeholder="Masukkan Alamat Emel" name="email" autocomplete="off" class="form-control bg-transparent" value=""/>
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="Masukkan Katalaluan Anda" name="password" autocomplete="off" class="form-control bg-transparent" value=""/>
        </div>
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <a href="{{ route('password.request') }}" class="link-primary">
                Anda Terlupa Katalaluan ?
            </a>
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Log Masuk'])
            </button>
        </div>
        {{-- <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="{{ route('register') }}" class="link-primary">
                Sign up
            </a>
        </div> --}}
    </form>
</x-auth-layout>
