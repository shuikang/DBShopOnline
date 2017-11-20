@extends('layouts.default')

@section('title'){{ trim('SHOPS') }}@endsection

@section('custom_head')
@endsection

@section('content')
	<section id="myshops">
		@include('utils.nav')
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1>SHOP</h1>
				</div>
			</div>
			<div class="row">
				@if(!empty($shops))
					@foreach($shops as $shop)
						<div class="col-6">
							<div class="card">
								<h4 class="card-header text-center">{{ $shop->name }}</h4>
								<div class="card-body">
									<h4 class="card-title">รายละเอียด</h4>
									<p class="card-text">{{ $shop->detail }}</p>
									<a href="{{ url('/shop/'.$shop->id) }}" class="btn btn-primary">จัดการ</a>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<div class="col-12">
						<h2>คุณไม่มีร้านค้า</h2>
					</div>
					<div class="col-12">
						<a href="/shop/create"><i class="fa fa-plus-square-o"></i>สร้างร้านค้า</a>
					</div>
				@endif
			</div>
		</div>
	</section>
@endsection