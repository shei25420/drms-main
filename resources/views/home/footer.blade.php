<footer class="lan-footer py-5">
    <div class="container">
        <div class="row">
            <!-- Helpful links -->
            <div class="col d-flex align-items-center">
                <div class="d-flex">
                    <a href="#" class="text-decoration-none me-3">Home</a>
                    <a href="#features" class="text-decoration-none me-3">Features</a>
                    <a href="#contact" class="text-decoration-none me-3">Contact</a>
                    <a href="#powerful-intro" class="text-decoration-none">About</a>
                </div>
            </div>

            <!-- Logo and copyright -->
            <div class="col text-end">
                <a href="javascript:void(0);" class="d-block mb-3">
                    <img class="img-fluid wow fadeInUp landing-logo"
                        src="{{asset(Storage::url('upload/logo/')).'/'.(isset($admin_logo) && !empty($admin_logo)?$admin_logo:'logo.png')}}" alt="">
                </a>
                <p class="mb-0">{{ __('Copyright') }} {{ date('Y') }} {{ env('APP_NAME') }}</p>
            </div>
        </div>
    </div>
</footer>