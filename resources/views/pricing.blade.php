<style>
    .section-title h2 {
    color: #1d2025;
    position: relative;
    margin: 0;
    font-size: 24px;
}
@media (min-width: 768px) {
    .section-title h2 {
        font-size: 28px;
    }
}
@media (min-width: 992px) {
    .section-title h2 {
        font-size: 34px;
    }
}
.section-title.title-ex1 h2 {
    padding-bottom: 20px;
}
@media (min-width: 768px) {
    .section-title.title-ex1 h2 {
        padding-bottom: 30px;
    }
}
@media (min-width: 992px) {
    .section-title.title-ex1 h2 {
        padding-bottom: 40px;
    }
}
.section-title.title-ex1 h2:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 12px;
    width: 110px;
    height: 1px;
    background-color: #d6dbe2;
}
@media (min-width: 768px) {
    .section-title.title-ex1 h2:before {
        bottom: 17px;
    }
}
@media (min-width: 992px) {
    .section-title.title-ex1 h2:before {
        bottom: 25px;
    }
}
.section-title.title-ex1 h2:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 12px;
    width: 40px;
    height: 1px;
    background-color: #0cc652;
}
@media (min-width: 768px) {
    .section-title.title-ex1 h2:after {
        bottom: 17px;
    }
}
@media (min-width: 992px) {
    .section-title.title-ex1 h2:after {
        bottom: 25px;
    }
}
.section-title.title-ex1.text-center h2:before {
    left: 50%;
    transform: translateX(-50%);
}
.section-title.title-ex1.text-center h2:after {
    left: 50%;
    transform: translateX(-50%);
}
.section-title.title-ex1.text-right h2:before {
    left: auto;
    right: 0;
}
.section-title.title-ex1.text-right h2:after {
    left: auto;
    right: 0;
}
.section-title.title-ex1 p {
    font-family: "Montserrat", sans-serif;
    color: #8b8e93;
    font-size: 14px;
    font-weight: 300;
}


.price-card {
    padding: 40px 35px;
    position: relative;
    border-radius: 2px;
    overflow: hidden;
}
.price-card1{
    background-color: #faf9f8;
}
.price-card2{
    background-color: #faf9f8;
}
.price-card3{
    background-color: #fff0da;
}
.price-card:before {
    position: absolute;
    content: "";
    top: 0;
    right: -35px;
    width: 88px;
    height: 88px;
    background: #FEA116;
    opacity: 0.2;
    border-radius: 8px;
    transform: rotate(45deg);
}
.price-card:after {
    position: absolute;
    content: "";
    top: 30px;
    right: -35px;
    width: 88px;
    height: 88px;
    background: #FEA116;
    opacity: 0.2;
    border-radius: 8px;
    transform: rotate(45deg);
}
.price-card h2 {
    font-size: 26px;
    font-weight: 600;
}
.price-card .btn {
    font-size: 11px;
    border-radius: 100px;
    padding: 0 25px;
    border: 0;
    color: #fff;
    float: right;
}
.price-card .btn.btn-primary {
    border: 0 !important;
}
.price-card.featured {
    border: 1px solid #ebebeb;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}
.price-card:hover .btn {
    background: #FEA116;
    border-color: #0cc652;
}
p.price span.price {
    display: inline-block;
    /* padding: 45px 15px 50px; */
    padding-right: 0;
    font-size: 50px;
    font-weight: 600;
    color: #FEA116;
    position: relative;
}
p.price{
    text-align: center;
}
.pricing-offers {
    padding: 0 0 10px;
}
.pricing-offers li {
    padding: 0 0 16px;
   
}
ul li {
    list-style-type: none;
}
.btn.btn-mid {
    height: 40px;
    line-height: 40px;
    padding: 0 20px;
}
</style>

<section id="pricing" class="pricing-section">
    <div class="container">
		<h2 class="text-center">Choose your subscription period</h2>
		<!-- Pricing Table starts -->
		<div class="row mt-5"> 
            <div class="col-md-4">
                <div class="price-card price-card1">
                    <h2>1-Month <br> Premium Plus IPTV Subscription</h2>
                    <form action="{{route('checkoutDetail')}}" method="POST">
                        @csrf
                        <p class="price"><span class="price">19</span><span style="color: #FEA116;font-size:30px">$</span></p>
                        <ul class="pricing-offers">
                            <input type="hidden" name="price" value="19"/>
                            <input type="hidden" name="month" value="1-Month Premium Plus IPTV Subscription"/>
                            <input type="hidden" name="course" value="Course Master In MySql"/>
                            <input type="hidden" name="thankyou" value="bootcoders"/>
                            <li> •	Premium Subscription: Over 21,000 Channels + 74,000 VOD</li>
                            <li>•	Backup Subscription: Over 20,000 Channels + 70,000 VOD </li>
                            <li>•	Quality Range: SD to 4K</li>
                            <li>•	24/7 Support, Fast Delivery</li>
                            <li>•	Uninterrupted Service</li>
                            <li>•	Access PPV, cinema, Netflix, Amazon Prime</li>
                            <li>•	Exclusive content: MMA, boxing, WWE</li>
                            <li>•	Seamless integration with popular apps</li>
                            <li>•	Compatible with various devices</li>
                            <li>•	Satisfaction guaranteed</li>
                            <li style="visibility: hidden">•Exclusive discounts for loyal customers</li>
                        </ul>
                        <button type="submit" class="btn btn-primary btn-mid fw-bold" >{{__('pricing.button')}}</button>
                    </form>
                </div>
            </div>
			<div class="col-md-4">
				<form action="{{route('checkoutDetail')}}" method="POST">
                    @csrf
                    <div class="price-card featured price-card2">
                        <h2>6-Month <br> Premium Plus IPTV Subscription</h2>
                        <p class="price"><span class="price">59</span><span style="color: #FEA116;font-size:30px">$</span></p>
                        <ul class="pricing-offers">
                            <input type="hidden" name="price" value="59"/>
                            <input type="hidden" name="month" value="6-Month Premium Plus IPTV Subscription"/>
                            <input type="hidden" name="course" value="Course Master In Java"/>
                            <input type="hidden" name="thankyou" value="bootcoders"/>
                            <li> •	Premium Subscription: Over 21,000 Channels + 74,000 VOD</li>
                            <li>•	Backup Subscription: Over 20,000 Channels + 70,000 VOD </li>
                            <li>•	Quality Range: SD to 4K</li>
                            <li>•	24/7 Support, Fast Delivery</li>
                            <li>•	Uninterrupted Service</li>
                            <li>•	Access PPV, cinema, Netflix, Amazon Prime</li>
                            <li>•	Exclusive content: MMA, boxing, WWE</li>
                            <li>•	Seamless integration with popular apps</li>
                            <li>•	Compatible with various devices</li>
                            <li>•	Satisfaction guaranteed</li>
                            <li style="visibility: hidden">•	Exclusive discounts for loyal customers</li>
                        </ul>
                        <button type="submit" class="btn btn-primary btn-mid">{{__('pricing.button')}}</button>
                    </div>
                </form>
			</div>
			<div class="col-md-4">
				<form action="{{route('checkoutDetail')}}" method="POST">
                    @csrf
                    <div class="price-card price-card3">
                        <h2>12-Month Premium Plus IPTV Subscription</h2> 
                        <p class="price"><span class="price">99</span><span style="color: #FEA116;font-size:30px">$</span></p>
                        <ul class="pricing-offers">
                            <input type="hidden" name="price" value="99"/>
                            <input type="hidden" name="month" value="12-Month Premium Plus IPTV Subscription"/>
                            <input type="hidden" name="course" value="Course Master In SpringBoot"/>
                            <input type="hidden" name="thankyou" value="bootcoders"/>
                            <li>•	Premium Subscription: Over 21,000 Channels + 74,000 VOD</li>
                            <li>•	Backup Subscription: Over 20,000 Channels + 70,000 VOD </li>
                            <li>•	Quality Range: SD to 4K</li>
                            <li>•	24/7 Support, Fast Delivery</li>
                            <li>•	Uninterrupted Service</li>
                            <li>•	Access PPV, cinema, Netflix, Amazon Prime</li>
                            <li>•	Exclusive content: MMA, boxing, WWE</li>
                            <li>•	Seamless integration with popular apps</li>
                            <li>•	Compatible with various devices</li>
                            <li>•	Satisfaction guaranteed</li>
                            <li>•	Exclusive discounts for loyal customers</li>
                        </ul>
                        <button type="submit" class="btn btn-primary btn-mid">{{__('pricing.button')}}</button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</section>