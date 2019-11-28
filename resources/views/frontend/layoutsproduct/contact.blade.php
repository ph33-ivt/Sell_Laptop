@extends('frontend.layoutsproduct.design')

@section('title')
Contact
@endsection

@section('content')

<div class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                        @include('messages.msg')
                    <div class="contact-map-wrapper">
                            <div class="contact-title">
                                <h4>Contact Information</h4>
                            </div>
                        <form id="contact" class="contact-form" action="{{route('send.contact')}}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Name*</label>
                                            <input name="name" required="" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Email*</label>
                                            <input name="email" required="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Telephone</label>
                                            <input name="telephone" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>subject</label>
                                            <input name="subject" required="" type="text">
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="contact-textarea-style mb-30">
                                            <label>Comment*</label>
                                            <textarea class="form-control2" name="commnet" required=""></textarea>
                                        </div>
                                        <button class="submit contact-btn btn-hover" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-wrapper">
                        <div class="contact-title">
                            <h4>Location & Details</h4>
                        </div>
                        <div class="contact-info">
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Address:</span>  31 Le Duan.  <br> Hai Chau , Da Nang</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Email: </span> laptopsell@gmail.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Phone: </span>   +84 33 7548422</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
