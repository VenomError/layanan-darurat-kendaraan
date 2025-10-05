<x-layout.auth>
    <div class="card-header">
        <div class="text-center">
            <h5 class="mb-1">Sign In</h5>
            <p>Sign in to Start Manage your DreamsTour Account</p>
        </div>
    </div>
    <div class="card-body">
        @if (session('logout'))
            <div
                class="alert alert-success text-capitalize mt-0 text-center"
                role="alert"
            >
                <b>{{ session('logout') }}</b>
            </div>
        @endif
        @error('login')
            <div
                class="alert alert-danger mt-0 text-center"
                role="alert"
            >
                <b>Login Failed </b> - {{ $message }}
            </div>
        @enderror
        <form
            action="{{ route('loginProcess') }}"
            method="post"
        >
            @csrf
            <div class="mb-3">
                <x-input-icon
                    name="email"
                    lable="Email"
                    type="email"
                    icon="ri-mail-line"
                    class="form-control-lg"
                />
            </div>
            <div class="mb-3">
                <x-input-icon-password
                    name="password"
                    lable="Password"
                    class="form-control-lg"
                />
            </div>
            <div class="mb-3 mt-3">
                <div class="d-flex align-items-center justify-content-between row-gap-2 flex-wrap">
                    <div class="form-check d-flex align-items-center mb-2">
                        <input
                            class="form-check-input mt-0"
                            type="checkbox"
                            name="remember"
                            id="remembers_me"
                        >
                        <label
                            class="form-check-label text-gray-9 fs-14 ms-2"
                            for="remembers_me"
                        >
                            Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button
                    type="submit"
                    class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100"
                >Login<i class="isax isax-arrow-right-3 ms-2"></i></button>
            </div>

            <div class="d-flex justify-content-center">
                <p class="fs-14">Don't you have an account? <a
                        href="{{ route('register') }}"
                        class="link-primary fw-medium"
                    >Sign up</a></p>
            </div>
        </form>
    </div>
</x-layout.auth>
