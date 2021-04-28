@extends('index')    
@push('nav')

@section('content')
    
    
    <!-- section -->
{{-- <div class="section"> --}}
    <!-- container -->
<div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="section-row">
                    <br>
                    <h3>Contact Information</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <ul class="list-style">
                        <li><p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="93c4f6f1fef2f4d3f6fef2faffbdf0fcfe"> Bimbimmk24@gmail.com</span></a></p></li>
                        <li><p><strong>Phone:</strong> 082124590046</p></li>
                        <li><p><strong>Address:</strong> JL. AMD Rt/Rw. 001/09 No. 25 Gaga Larangan Ciledug Tangerang Banten 15154</p></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="section-row">
                    <h3>Send A Message</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span>Email</span>
                                    <input class="input" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span>Subject</span>
                                    <input class="input" type="text" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" placeholder="Message"></textarea>
                                </div>
                                <button class="primary-button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
    {{-- </div> --}}
    <!-- /container -->
    </div>        
    
</body>
</html>

@endsection