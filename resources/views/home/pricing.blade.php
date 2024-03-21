<section class="pricing py-100" id="pricing" style="background: linear-gradient(45deg, #45B69F, #283480);
">
				<div class="container">
								<div class="row">
												@foreach ($subscriptions as $subscription)
																<div class="col-md-3 col-sm-6">
																				<div class="pricingTable">
																								<div class="pricingTable-header">
																												{{--							<i class="fa fa-adjust"></i> --}}
																												<div class="price-value"> ${{ $subscription->price }} <span
																																				class="month">{{ $subscription->duration }}</span> </div>
																								</div>
																								<h3 class="heading">{{ $subscription->name }}</h3>
																								<div class="pricing-content">
																												<ul>
																																<li><b>{{ $subscription->total_user }}</b> User Limit</li>
																																<li><b>{{ $subscription->total_document }}</b> Document Limit</li>
																																<li>Document History
																																				<b>{{ $subscription->enabled_document_history ? 'Enabled' : 'Disabled' }}</b>
																																</li>
																																<li>User History
																																				<b>{{ $subscription->enabled_user_history ? 'Enabled' : 'Enabled' }}</b>
																																</li>
																												</ul>
																								</div>
																								<div class="pricingTable-signup">
																												<a
																																href="{{ route('subscriptions.show', \Illuminate\Support\Facades\Crypt::encrypt($subscription->id)) }}">Purchase</a>
																								</div>
																				</div>
																</div>
												@endforeach
								</div>
				</div>
</section>
