@extends('welcome')
@section('title', 'Shop Mua Sắm Thỏa Thích')
@section('ShopContent')
<div class="header-height"></div>
 <div class="breadcrumb-area hm-4-padding">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <hr>
            <h2 style="font-family:'Times New Roman', Times, serif"><strong>Cửa Hàng<strong></h2>
            <ul>
                <li>
                    <a href="#">Trangchu</a>
                </li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
@include('pages.banner')
<div class="shop-wrapper hm-3-padding pt-20 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-topbar-wrapper">
                        <div class="grid-list-options">
                            <ul class="view-mode">
                                <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                <li><a href="#product-list" data-view="product-list"><i class="ion-navicon"></i></a></li>
                            </ul>
                        </div>
                            <div class="shop-filter">
                                <button class="product-filter-toggle"><b>Hiển thị tất cả </b></button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-filter-wrapper">
                        <div class="row">
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5 style="font-family:'Times New Roman', Times, serif">Tất cả danh mục</h5>
                                <ul class="sort-by">
                                    @foreach ($categoryshopall as $category)
                                        <li><a href="{{route('getcategoryshop',$category->category_slug)}}">{{$category->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5 style="font-family:'Times New Roman', Times, serif">Tất cả thương hiệu</h5>
                                <ul class="color-filter">
                                    @foreach ($brandshopall as $brand)
                                            <li><a href="{{route('getbrandshop',$brand->brand_slug)}}">{{$brand->brand_name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5>tags</h5>
                                <div class="product-tags">
                                    @foreach ($categoryshopall as $categoryshop)
                                        <a href="{{route('getcategoryshop',$categoryshop->category_slug)}}">{{$categoryshop->category_name}}</a>,
                                    @endforeach
                                    @foreach ($brandshopall as $brandshop)
                                        <a href="{{route('getbrandshop',$brandshop->brand_slug)}}">{{$brandshop->brand_name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                {{-- <h5>Filter by price</h5>
                                <div id="price-range"></div>
                                <div class="price-values">
                                    <span>Price:</span>
                                    <input type="text" class="price-amount">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-list-product-wrapper">
                    <div class="product-grid product-view">
                        <div class="row">
                            @foreach ($productshop as $productshow)
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="{{route('productdetailindex',$productshow->prod_slug)}}">
                                                <img class="imageLazyLoad" data-src="{{asset('storage/app/'.$productshow->prod_code.'/'.$productshow->prod_img)}}" width="310px" height="375px" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>{{$productshow->prod_promotion}}</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" href="{{route('productdetailindex',$productshow->prod_slug)}}">
                                                    <i class="ti-plus"></i> Xem chi tiết
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a style="font-family:'Times New Roman', Times, serif" href="{{route('productdetailindex',$productshow->prod_slug)}}"><b>{{$productshow->prod_name}} (MSP: {{$productshow->prod_code}})</b></a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                        @if ($productshow->prod_sale < $productshow->prod_price && $productshow->prod_sale > 0 )
                                                            <span class="old">{{number_format($productshow->prod_price)}}VNĐ</span>
                                                            <span>{{number_format($productshow->prod_sale)}} VNĐ</span>
                                                        @else
                                                            <span>{{number_format($productshow->prod_price)}} VNĐ</span>
                                                        @endif
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="javascript:void(0)" onclick="addCartIndex('{{$productshow->prod_id}}')"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a style="font-family:'Times New Roman', Times, serif" href="{{route('productdetailindex',$productshow->prod_slug)}}"><b>{{$productshow->prod_name}} (MSP: {{$productshow->prod_code}})</b></a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                    @if ($productshow->prod_sale < $productshow->prod_price && $productshow->prod_sale > 0 )
                                                        <span class="old">{{number_format($productshow->prod_price)}}VNĐ</span>
                                                        <span>{{number_format($productshow->prod_sale)}} VNĐ</span>
                                                    @else
                                                        <span>{{number_format($productshow->prod_price)}} VNĐ</span>
                                                    @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="product-categories">
                                                            <h5 class="pd-sub-title">Phụ kiện</h5>
                                                        <ul>
                                                            <li>
                                                                <a>{{$productshow->prod_accessories}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-categories">
                                                            <h5 class="pd-sub-title">Bảo hành</h5>
                                                        <ul>
                                                            <li>
                                                                <a>{{$productshow->prod_warranty}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-categories">
                                                            <h5 class="pd-sub-title">Tình trạng</h5>
                                                        <ul>
                                                            <li>
                                                                <a>{{$productshow->prod_condition}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="product-categories">
                                                                <h5 class="pd-sub-title">Danh mục sản phẩm</h5>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">{{$productshow->category_name}}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <div class="product-categories">
                                                                <h5 class="pd-sub-title">Thương hiệu sản phẩm</h5>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">{{$productshow->brand_name}}</a>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-cart">
                                                <a href="javascript:void(0)" onclick="addCartIndex('{{$productshow->prod_id}}')"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row" style="float:right">
                            <ul>
                                    {{ $productshop->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
         <!-- modal -->
    </div>
@endsection
