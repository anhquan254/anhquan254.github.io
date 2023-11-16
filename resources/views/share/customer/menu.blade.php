<header class="header__section">
    <style>
        .categories__submenu {
            width: 200px;
        }

        .categories__submenu.style2 .categories__submenu--items {
            width: 100%;
        }

        .del_bottom_border {
            border-bottom: none;
            margin-bottom: 5px;
        }

        .ha {
            margin-left: 15px;
        }

        .bello {
            left: 2.0rem;
            top: -10px
        }

        .hi {
            margin-left: 15px;
        }

        .hello {
            padding-left: 15px
        }
    </style>
    <div id="app_header">
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="main__logo">
                        <h1 class="main__logo--title">
                            <a class="main__logo--link" href="{{ Route('indexHome') }}">
                                <img class="main__logo--img" src="/partsix/assets/img/logo/logo.png" alt="logo-img"
                                    style="width: 175px">
                            </a>
                        </h1>
                    </div>
                    <div class="header__search--widget d-none d-lg-block header__sticky--none">
                        <div class="d-flex header__search--form border-radius-5" action="#">
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Tìm kiếm" type="text">
                                </label>
                                <button class="header__search--button bg__primary text-white" aria-label="search button"
                                    type="submit">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header__menu d-none d-lg-block header__sticky--block">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('indexHome') ? 'active' : '' }}  "
                                        href="{{ Route('indexHome') }}">Trang Chủ </a>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('allProduct') ? 'active' : '' }}  "
                                        href="{{ Route('allProduct') }}">Tất Cả Xe </a>
                                </li>


                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('indexContact') ? 'active' : '' }}  "
                                        href="{{ Route('indexContact') }}">Liên Hệ </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    @if (Auth::guard('client')->check())
                        <div class="header__account header__sticky--none">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('indexProfile') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>
                                <li class="header__account--items header__minicart--items hi">
                                    <a v-on:click="listGioHang()" class="header__account--btn minicart__open--btn"
                                        href="javascript:void(0)" data-offcanvas="">
                                        <i class="fa-solid fa-car fa-xl"></i>
                                        <span id="mycar2" class="items__count mb-2 bello"></span>
                                        <span class="minicart__btn--text hello">My Car<br></span>
                                    </a>
                                </li>
                                <li class="header__account--items ha">
                                    <a class="header__account--btn" href="{{ Route('logOutClient') }}">
                                        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="header__account header__sticky--none">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('indexLoginCustomer') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="header__account header__sticky--block">
                        <ul class="header__account--wrapper d-flex align-items-center">
                            <li class="header__account--items  header__account--search__items d-sm-2-none">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                    data-offcanvas="">
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32">
                                        </path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448">
                                        </path>
                                    </svg>
                                    <span class="visually-hidden">Search</span>
                                </a>
                            </li>
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="{{ Route('indexProfile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class=" -user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="visually-hidden">My account</span>
                                </a>
                            </li>
                            @if (Auth::guard('client')->check())
                                <li class="header__account--items header__minicart--items hi">
                                    <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                        data-offcanvas="">
                                        <i class="fa-solid fa-car fa-xl"></i>
                                        <span id="mycar1" class="items__count mb-2 bello"></span>
                                        <span class="minicart__btn--text hello">My Car<br></span>
                                    </a>
                                </li>
                                <li class="header__account--items ha">
                                    <a class="header__account--btn" href="{{ Route('logOutClient') }}">
                                        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
                                    </a>
                                </li>
                            @else
                                <div class="header__account header__sticky--none">
                                    <ul class="header__account--wrapper d-flex align-items-center">
                                        <li class="header__account--items d-none d-lg-block">
                                            <a class="header__account--btn" href="{{ Route('indexLoginCustomer') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class=" -user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <span class="visually-hidden">My account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom d-none d-lg-block">
            <div class="container">
                <div
                    class="header__bottom--inner__style3 position__relative d-flex align-items-center justify-content-between">
                    <div class="header__menu header__menu--style4">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('indexHome') ? 'active' : '' }}"
                                        href="{{ Route('indexHome') }}">Trang Chủ</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('allProduct') ? 'active' : '' }}  "
                                        href="{{ Route('allProduct') }}">Tất Cả Xe</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('indexContact') ? 'active' : '' }} "
                                        href="{{ Route('indexContact') }}">Liên Hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Tìm Kiếm</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Tìm kiếm" type="text">
                    </label>
                    <button class="predictive__search--button text-white" aria-label="search button"><svg
                            class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                            width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        @php
            $checklogin = Auth::guard('client')->check();
        @endphp
        @if ($checklogin)
            <div class="offCanvas__minicart">
                <div class="minicart__header ">
                    <div class="minicart__header--top d-flex justify-content-between align-items-center">
                        <h3 class="minicart__title">My Cars</h3>
                        <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="minicart__product">
                    <template v-for='i in listCar.length'>
                        <div class="minicart__product--items d-flex">
                            <div class="minicart__thumb" style="display: flex;align-items: center">
                                <a v-bind:href="'/detail/' + listCar[i].slug_xe">
                                    <img v-bind:src="listCar[i].hinh_anh_xe" alt="prduct-img">
                                </a>
                            </div>
                            <div class="minicart__text">
                                <h4 class="minicart__subtitle">
                                    <a v-bind:href="'/detail/' + listCar[i].slug_xe">@{{ listCar[i].ten_xe }}</a>
                                </h4>
                                <span class="color__variant">
                                    <b>Số chỗ:</b> @{{ listCar[i].so_cho_ngoi }}
                                </span>
                                <div class="minicart__price">
                                    <span class="minicart__current--price">Giá thuê/ngày: @{{ numberFormat(listCar[i].gia_theo_ngay) }}</span>
                                </div>
                                <div class="minicart__text--footer d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-7">
                                            <input @blur='update(listCar[i]);index = i' v-model='listCar[i].so_luong'
                                                style="font-size: 13px" type="number"
                                                class="form-control text-center" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                        </div>
                                        <div class="col-5">
                                            <button v-on:click="xoa(listCar[i])" class="minicart__product--remove"
                                                type="button">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="minicart__amount">
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>Tổng tiền:</span>
                        <span><b>@{{ numberFormat(tongTien) }} </b></span>
                    </div>
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>Đặt cọc trước 30%:</span>
                        <span><b>@{{ numberFormat(tienCoc) }}</b></span>
                    </div>
                </div>
                <div class="minicart__conditions text-center">

                </div>
                <div class="minicart__button d-flex justify-content-center">
                    <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
                </div>
            </div>
        @endif
    </div>
</header>
<script>
    new Vue({
        el: '#app_header',
        data: {
            listCar: [],
            tongTien: 0,
            tienCoc: 0,
            index: 0,
        },
        created() {
            this.listGioHang();
        },
        methods: {
            listGioHang() {
                axios
                    .get('{{ Route('dataGioHang') }}')
                    .then((res) => {
                        this.listCar = res.data.data;
                        mycar1 = this.listCar.length;
                        mycar2 = this.listCar.length;
                        $("#mycar1").html(mycar1);
                        $("#mycar2").html(mycar2);

                        this.tongTien = 0;
                        this.listCar.forEach(i => {
                            this.tongTien += i.tong_tien
                        });
                        this.tienCoc = 0;
                        this.listCar.forEach(i => {
                            this.tienCoc += i.tien_coc
                        });
                    });
            },
            xoa(value) {
                axios
                    .post('{{ Route('delGioHang') }}', value)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công');
                            this.listGioHang();
                            $("#hello").html(res.data.soLuong + ' xe có sẵn');
                            // this.data.so_luong = res.data.soLuong;
                        } else {
                            toastr.error(res.data.message, 'Lỗi');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            numberFormat(number) {
                return new Intl.NumberFormat('vi-VI', {
                    style: 'currency',
                    currency: 'VND'
                }).format(number);
            },
            update(v) {
                axios
                    .post('{{ Route('updateGioHang') }}', v)
                    .then((res) => {
                        if (res.data.status == 1) {
                            this.listGioHang();
                        } else if (res.data.status == -2) {
                            toastr.error(res.data.message, 'Lỗi');
                            this.listCar[this.index].so_luong = 100;
                            $("#hello").html(res.data.soLuong + ' xe có sẵn');
                        } else if (res.data.status == -1) {
                            toastr.error(res.data.message, 'Lỗi');
                            this.listCar[this.index].so_luong = 1
                            $("#hello").html(res.data.soLuong + ' xe có sẵn');
                        } else {
                            toastr.error(res.data.message, 'Lỗi');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

        },
    });
</script>
