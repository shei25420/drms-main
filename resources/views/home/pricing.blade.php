<section class="pricing py-100" id="pricing" style="background: linear-gradient(45deg, #7538fd, #f00);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="land-title text-center">
                    <h2 class="wow fadeInUp" style="color: #fff;" data-wow-duration="1s">{{ __('Pricing') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($subscriptions as $subscription)
                <div class="col-lg-3">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><span
                                    style="color: #0d6efd;">{{ $subscription->name }}</span></h5>
                            <h6 class="card-price text-center"
                                style="font-weight: bold; font-family: Arial, sans-serif;">
                                ${{ $subscription->price }}<span
                                    class="period">{{ $subscription->period }}</span></h6>
                            <hr>
                            <ul class="cdxprice-list">
                                <li><i class="text-success mr-4"
                                        data-feather="check-circle"></i>{{ $subscription->total_user }}</span>
                                    {{ __('User Limit') }}</li>
                                <li><i class="text-success mr-4"
                                        data-feather="check-circle"></i><span>{{ $subscription->total_document }}</span>
                                    {{ __('Document Limit') }}</li>
                                <li>
                                    <div class="delet-mail">
                                        @if ($subscription->enabled_document_history == 1)
                                            <i class="text-success mr-4" data-feather="check-circle"></i>
                                        @else
                                            <i class="text-danger mr-4" data-feather="x-circle"></i>
                                        @endif

                                        {{ __('Document History') }}
                                    </div>
                                </li>
                                <li>
                                    <div class="delet-mail">
                                        @if ($subscription->enabled_logged_history == 1)
                                            <i class="text-success mr-4" data-feather="check-circle"></i>
                                        @else
                                            <i class="text-danger mr-4" data-feather="x-circle"></i>
                                        @endif
                                        {{ __('User Logged History') }}
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center align-items-center"
                                style="margin-top:15px;">
                                <button class="btn btn-outline-primary btn-sm"><a
                                        data-bs-toggle="tooltip" data-bs-original-title="{{ __('Detail') }}"
                                        href="{{ route('subscriptions.show', \Illuminate\Support\Facades\Crypt::encrypt($subscription->id)) }}">Subscribe</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>