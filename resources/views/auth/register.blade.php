<x-layout.auth>
    <div class="card-header">
        <div class="text-center">
            <h5 class="mb-1">Sign Up</h5>
            <p>Create your DreamsTour Account</p>
        </div>
    </div>
    <div class="card-body">
        @error('register')
            <div class="alert alert-danger mt-0 text-center" role="alert">
                <b>Register Failed </b> - {{ $message }}
            </div>
        @enderror
        <form {{ route('registerProcess') }} method="post">
            @csrf
            <div class="mb-3">
                <x-input-icon-select name="role" label="Role" icon="isax isax-profile-tick" >
                    <option @selected(old('role') == \App\Enum\UserRole::BENGKEL->value ) value="{{ \App\Enum\UserRole::BENGKEL->value }}">Bengkel</option>
                    <option @selected(old('role') == \App\Enum\UserRole::PUBLIC->value ) value="{{ \App\Enum\UserRole::PUBLIC->value }}">Pengguna</option>
                </x-input-icon-select>

            </div>
            <div class="mb-3">
                <x-input-icon name="name" label="Name" placeholder="Enter Full Name" icon="ri-user-line" />
            </div>
            <div class="mb-3">
                <x-input-icon
                    name="email"
                    type="email"
                    label="email"
                    placeholder="Enter Email Address"
                    icon="ri-mail-line"
                />
            </div>
            <div class="mb-3">
                <x-input-icon-password name="password" label="password" placeholder="Enter Password"
                    icon="ri-lock-line" />
            </div>
            <div class="mb-3">
                <x-input-icon-password name="password_confirmation" label="password confirmation"
                    placeholder="Enter Password confirmation" icon="ri-lock-line"
                />
            </div>

            <div class="mb-3">
                <button class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100"
                    type="submit"
                >Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
            </div>
            <div class="d-flex justify-content-center">
                <p class="fs-14">Already have an account? <a class="link-primary fw-medium"
                        href="{{ route('login') }}">Sign In</a></p>
            </div>
        </form>
    </div>
</x-layout.auth>
