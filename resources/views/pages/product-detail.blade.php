@extends('welcome')
@section('imageOg', "https://diennuocphucloc.com/storage/app/$productcodeOg/$productimageOg")
@section('title', "$producttitle")
@section('ContentProductDetail')
<div class="header-height"></div>
            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2 style="font-family:'Times New Roman', Times, serif"><strong>Chi tiết sản phẩm</strong></h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">home</a>
                            </li>
                            <li>productdetails</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner-area hm-4-padding">
                <div class="container-fluid">
                   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- qc_x2 -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8602037860916317"
                         data-ad-slot="2334776613"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div> 
            @foreach ($productdetail as $productdetail)
            <div class="product-details-area mt-5 hm-3-padding ptb-3 pb-10">
                <div class="container-fluid">
                    <div class="row">
                        {{-- <div class="col-lg-">
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="pro-details1" style="">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}">
                                                    <img src="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details2">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}">
                                                    <img src="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details3">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}">
                                                    <img src="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details4">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}">
                                                    <img src="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details5">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}">
                                                    <img src="{{asset('storage/app/'.$productdetail->prod_code.'/'.$productdetail->prod_img)}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-3">

                            </div>
                            <div>

                            </div>
                            <div class="product-details-content">
                                <div class="mb-4">
                                    @if ($productdetail->prod_status == 1)
                                      <h2 style="font-family:'Times New Roman', Times, serif">Trạng thái: <strong style="color:green">Còn Hàng</strong>  </h2>
                                    @else
                                        <h2 style="font-family:'Times New Roman', Times, serif">Trạng thái: <strong style="color:red">Hết Hàng</strong>  </h2>
                                    @endif
                                </div>
                                <h2 style="font-family:'Times New Roman', Times, serif"><strong>{{$productdetail->prod_name}} ( MSP: {{$productdetail->prod_code}})</strong> </h2>
                                <div class="product-rating">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    {{-- <span> ( 01 Customer Review )</span> --}}
                                </div>
                                <div class="product-price">
                                        @if ($productdetail->prod_sale < $productdetail->prod_price && $productdetail->prod_sale > 0 )
                                            <span class="old">{{number_format($productdetail->prod_price)}}VNĐ</span>
                                            <span><b>{{number_format($productdetail->prod_sale)}} VNĐ</b></span>
                                        @else
                                            <span><b>{{number_format($productdetail->prod_price)}} VNĐ</b></span>
                                        @endif
                                </div>
                                
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Thông tin mô tả</h5>
                                            <button id="btn1" class="btn btn-primary ">Ẩn chi tiết</button>
                                            <span class="col-md-1"></span>
                                            <button id="btn2" class="btn btn-primary ">Hiện chi tiết</button>
                                            <span class="col-md-6"></span>
                                            <div id="content" style="display:none;margin-top:30px">
                                                    {!!$productdetail->prod_description !!}
                                            </div>
                                </div>
                                <form action="{{route('cartadd',$productdetail->prod_id)}}">
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
                                            <input type="number" min="1" name="qtybutton" class="cart-plus-minus-box" required>
                                        </div>
                                    @if ($productdetail->prod_status == 1)
                                        <div class="quickview-btn-cart">
                                            <button class="btn-style cr-btn" type="submit"><span>Thêm vảo giỏ hàng</span></button>
                                        </div>  
                                    @else
                                        <div class="quickview-btn-cart">
                                            <button class="btn-style cr-btn" disabled><span>Thêm vảo giỏ hàng</span></button>
                                        </div>  
                                    @endif
                                        
                                        {{-- <div class="quickview-btn-wishlist">
                                            <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                        </div> --}}
                                    </div>
                                </form>
                               
                                <div class="product-categories">
                                        <h5 class="pd-sub-title">Phụ kiện</h5>
                                    <ul>
                                        <li>
                                            <a>{{$productdetail->prod_accessories}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-categories">
                                        <h5 class="pd-sub-title">Bảo hành</h5>
                                    <ul>
                                        <li>
                                            <a>{{$productdetail->prod_warranty}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-categories">
                                        <h5 class="pd-sub-title">Tình trạng</h5>
                                    <ul>
                                        <li>
                                            <a>{{$productdetail->prod_condition}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Danh mục sản phẩm</h5>
                                    <ul>
                                        <li>
                                            <a href="#">{{$productdetail->category_name}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-categories">
                                        <h5 class="pd-sub-title">Thương hiệu sản phẩm</h5>
                                        <ul>
                                            <li>
                                                <a href="#">{{$productdetail->brand_name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-tumblr"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="ion-social-instagram-outline"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <script language="javascript">
                document.getElementById("btn1").onclick = function() {
                    document.getElementById("content").style.display = 'none';
                };  
                document.getElementById("btn2").onclick = function() {
                    document.getElementById("content").style.display = 'block';
                };
        </script>
@endsection