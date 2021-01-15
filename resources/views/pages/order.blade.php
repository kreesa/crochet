@extends('master')

@section('content')

@include('sections.pattern')
@include('sections.color')

<section id="order">
   <div class="container">
      <h1 class="center">Place your order</h1>
      <div class="row">

		<div class="wow fadeInUp col-sm-12" data-wow-delay="1.6s">
			<div class="order-form">
				<form id="order-form" method="post" action="#">
					<input name="name" type="text" class="form-control" placeholder="Your Name" required>
					<input name="email" type="email" class="form-control" placeholder="Your Email" required>
					<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
					<div class="order-submit">
						<input type="submit" class="form-control submit" value="Order Now">
					</div>
				</form>
			</div>
		</div>

		<div class="clearfix"></div>

      </div>
   </div>
</section>

@endsection