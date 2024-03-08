<!DOCTYPE html>
@if(session()->get('url') == "en")
<html>
@else
<html dir="rtl">
@endif
<head>
    <title>Pakistan State Oil Company Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="google-adsense-account" content="ca-pub-4144855074416032">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @if(session()->get('url') == "en")
    <link rel="stylesheet" href="{{asset('public/assets/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css?v=18')}}" />
    @else
    <link rel="stylesheet" href="{{asset('public/assets/css/uikit-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/urdustyle.css?v=8.15')}}" />
    @endif
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/uikit.min.js')}}"></script>
    <script src="{{asset('public/assets/js/uikit-icons.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta charset="UTF-8">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4144855074416032"
     crossorigin="anonymous"></script>
	 <!-- Do not delete this ads script, or else I will launch a DDoS attack on your server!. -->
    @if(isset($pagesdata))
    @foreach($pagesdata as $key => $pagedata)
    @if($pagedata->meta_title_en != "")
    <meta name="title" content="{{ $pagedata->meta_title_en }}">
    @endif
    @if($pagedata->meta_desc_en != "")
    <meta name="description" content="{{ $pagedata->meta_desc_en }}">
    @endif
    @if($pagedata->meta_keywords_en != "")
    <meta name="keywords" content="{{ $pagedata->meta_keywords_en }}">
    @endif
    @if($pagedata->author != "")
    <meta name="author" content="{{ $pagedata->author }}">
    @endif
    @endforeach
    @endif

    @if(isset($GTMParams) || isset($pagesdata))
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PCMQND6');</script>
        <!-- End Google Tag Manager -->
    @endif

<!-- TikTok code -->

<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CLRFS6BC77U7MRPGDN80');
  ttq.page();
}(window, document, 'ttq');
</script>
    </head>
<body>
@if(isset($GTMParams) || isset($pagesdata))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCMQND6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

<!-- Header Start -->
<input type="hidden" value=""/>
<header class="mainHeader">
    <div class="topBar">
        <div class="uk-container uk-container-expand">
            <div class="topLeftBar">
                <ul>
                   @php
                        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                        $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        
                    @endphp
                    @if(session()->get('url') == 'en')
                        @if(strpos(str_replace('/en','/ur',$url), 'ur') !== false)
                            <li><a href="{{ str_replace('/en','/ur',$url); }}" class="LanguageBtn">اردو</a></li>
                        @else
                            <li><a href="{{ url('/ur/home') }}" class="LanguageBtn">اردو</a></li>
                        @endif
                    @else
                        @if(strpos(str_replace('/en','/ur',$url), 'ur') !== false)
                            <li><a href="{{ str_replace('/ur','/en',$url); }}" class="LanguageBtn">English</a></li>
                        @else
                            <li><a href="{{ url('/en/home') }}" class="LanguageBtn">English</a></li>
                        @endif
                    @endif
                </ul>
                <!-- {{url('/en/search')}} -->
                <div class="searchBox">
                    <form role="search" id="searchForm" action="javascript:void(0);" method="get">
                        <input type="search" name="searchfld" id="searchfld">
                        <!-- <label for="searchfld"></label> -->
                        <button type="button" class="search-btn"> <span uk-icon="search"></span> </button>
                    </form>
                </div>
            </div>
            <script>
                $('#searchfld').keypress(function (e) {
                    if (e.which == 13) {
                        if($('#searchfld').val() != ''){
                            $('#searchForm').attr('action', "<?php echo url('/en/search'); ?>");
                            $('#searchForm').submit();
                        }
                    }
                });
            </script>
            <a class="mainLogo" href="{{url('/')}}"><img src="{{asset('public/assets/images/homepage/logo.png')}}" alt="" /></a>
            <!-- <div class="topRightBar">
                <ul>
                    @if(isset($menu_items))
                        @foreach($menu_items as $menu_item)
                            @if(session()->get('url') == 'en')
                                @if($menu_item->link_type_en  == "internal")
                                    <li class="<?php if(str_contains($url, substr($menu_item->link_url_en,1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$menu_item->link_url_en) }}">{{ $menu_item->title_en }}</a></li>
                                @else
                                    <li class="<?php if(str_contains($url, substr($menu_item->link_url_en,1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$menu_item->link_url_en) }}">{{ $menu_item->title_en }}</a></li>
                                @endif
                            @else
                                @if($menu_item->link_type_ur  == "internal")
                                    <li class="<?php if(str_contains($url, substr($menu_item->link_url_ur,1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$menu_item->link_url_ur) }}">{{ $menu_item->title_ur }}</a></li>
                                @else
                                    <li class="<?php if(str_contains($url, substr($menu_item->link_url_ur,1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$menu_item->link_url_ur) }}">{{ $menu_item->title_ur }}</a></li>
                                @endif
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div> -->
            @if(session()->get('url') == "en")
            <div class="topRightBar">
               <ul>
                  <li class=""><a href="{{url('/en/investors')}}">Investors</a>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/en/investors/investors-information')}}">Investors Information</a></li>
                            <li><a href="{{url('/en/investors/financial')}}">Financials</a></li>
                            <li><a href="{{url('/en/investors/investors-relations')}}">Investors Relations</a></li>
                            <li><a href="{{url('/en/investors/notices-announcement')}}">Notices & Announcements</a></li>
                            <li><a href="{{url('/en/investors/corporate-briefing')}}">Corporate Briefing Session</a></li>
                            <li><a href="{{url('/en/investors/forms-for-shareholders')}}">Forms for Shareholders</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class=""><a href="{{url('/en/sustainability')}}">Sustainability</a>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/en/sustainability/hse')}}">Health, Safety & Environment</a></li>
                            <li><a href="{{url('/en/sustainability/quality-assurance')}}">Quality Assurance</a></li>
                            <li><a href="{{url('/en/sustainability/csr')}}">CSR</a></li>
                            <li><a href="{{url('/en/sustainability/sponsorships')}}">Sponsorships</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class=""><a href="{{url('/en/media')}}">Media</a>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/en/media/awards-recognition')}}">Awards & Recognitions</a></li>
                            <li><a href="{{url('/en/media/pso-in-media')}}">PSO in the Media</a></li>
                            <li><a href="{{url('/en/media/press-releases')}}">Press Releases</a></li>
                            <li><a href="{{url('/en/media/pso-times')}}">PSO Times</a></li>
                            <li><a href="{{url('/en/media/advertising-campaigns')}}">Advertising Campaigns</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class=""><a href="{{url('/en/career')}}">Careers</a>
                    <!-- <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/en/career/meet-our-people')}}">Meet Our People</a></li>
                            <li><a href="{{url('/en/career/life-at-pso')}}">Life at PSO</a></li>
                            <li><a href="{{url('/en/career/opportunities')}}">Opportunities</a></li>
                            <li><a href="{{url('/en/career/career-faqs')}}">Career FAQs</a></li> 
                        </ul>
                    </div> -->
                  </li>
                  <li class=""><a href="{{url('/en/contact-us')}}">Contact Us</a></li>
               </ul>
            </div>
            @else
            <div class="topRightBar">
               <ul>
                  <li class=""><a href="{{url('/ur/investors')}}">سرمایہ کار</a>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/ur/investors/investors-information')}}">سرمایہ کاری معلومات</a></li>
                            <li><a href="{{url('/ur/investors/financial')}}">مالیات </a></li>
                            <li><a href="{{url('/ur/investors/investors-relations')}}">انویسٹرز سے تعلقات</a></li>
                            <li><a href="{{url('/ur/investors/notices-announcement')}}">اطلاع نامے اور اعلانات</a></li>
                            <li><a href="{{url('/ur/investors/corporate-briefing')}}">کارپوریٹ بریفنگ سیشن</a></li>
                            <li><a href="{{url('/ur/investors/forms-for-shareholders')}}">شراکت داروں کے فارم</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class=""><a href="{{url('/ur/sustainability')}}">استحکام</a>
                    
                  </li>
                  <li class=""><a href="{{url('/ur/media')}}">میڈیا </a>
                  <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{url('/ur/media/awards-recognition')}}">ایوارڈز اور اعزازات</a></li>
                            <li><a href="{{url('/ur/media/pso-in-media')}}">پی ایس او خبروں میں</a></li>
                            <li><a href="{{url('/ur/media/press-releases')}}">پریس ریلیز</a></li>
                            <li><a href="{{url('/ur/media/pso-times')}}">پی ایس او ٹائمز</a></li>
                            <li><a href="{{url('/ur/media/advertising-campaigns')}}">اشتھاراتی مہمات</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class=""><a href="{{url('/ur/career')}}">کیریئرز</a>
                  </li>
                  <li class=""><a href="{{url('/ur/contact-us')}}">رابطہ </a></li>
               </ul>
            </div>
            @endif
           
        </div>
    </div>
    <div class="menuBar">
        <div class="uk-container">
            <div class="mainMenu">
                <ul>
                    @if(isset($menus_parents))
                        @php
                            $menu_data = array();
                            $index = 0;
                        @endphp
                        @if(session()->get('url') == 'en')
                            @foreach($menus_parents as $menu_key => $menu_row)
                                @php 
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['id'] = $menu_row->id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['title_en'] = $menu_row->title_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['description_en'] = $menu_row->description_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['menu_parent_item_id'] = $menu_row->menu_parent_item_id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_url_en'] = $menu_row->link_url_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['image_en'] = $menu_row->image_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_type_en'] = $menu_row->link_type_en;
                                    $index++; 
                                @endphp
                            @endforeach
                            @php
                                $index = 0;
                            @endphp
                            @foreach($menu_data[0] as $item_key => $item_rows)
                                @php
                                    $postImage = json_decode($item_rows['image_en']);
                                    if(isset($postImage[0])){
                                        $Img = $postImage[0];
                                    }else{
                                        $Img = "";
                                    }
                                    $postImg = URL::to('/')."/public/source/".$Img."";
                                    $mainImage = URL::to('/')."/public/source/".$Img."";
                                    $murl = URL::to('/').session()->get('url');

                                @endphp
                                <li class="dataGet <?php if(str_contains($url, substr($item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $item_rows['title_en'] }}" data-desc="{{ $item_rows['description_en'] }}" href="{{ url(session()->get('url').$item_rows['link_url_en']) }}">{{ $item_rows['title_en'] }}</a>
                                    <div class="dropDownBox" uk-dropdown="mode: hover; boundary: .menuBar; boundary-align: true; offset: 0; delay-hide: 0;">
                                        <div class="uk-container">
                                            <div class="" uk-grid>
                                                <div class="uk-width-1-2">
                                                    @if(!empty(($menu_data[$item_rows['id']])))
                                                        <ul class="subMenu">
                                                        @foreach($menu_data[$item_rows['id']] as $child_item_key => $child_item_rows)
                                                            @php
                                                                $postImage = json_decode($child_item_rows['image_en']);
                                                                if(isset($postImage[0])){
                                                                    $Img = $postImage[0];
                                                                }else{
                                                                    $Img = "";
                                                                }
                                                                $postImg = URL::to('/')."/public/source/".$Img."";
                                                                $murl = URL::to('/').session()->get('url');
                                                            @endphp
                                                            @if($child_item_rows['link_type_en']  == "internal")
                                                                <li class="<?php if(substr_count($url, "/") >= 0 && $child_item_rows['title_en'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_en'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $child_item_rows['title_en'] }}" data-desc="{{ $child_item_rows['description_en'] }}" data-img="{{ $postImg }}" href="{{ url(session()->get('url').$child_item_rows['link_url_en']) }}">{{ $child_item_rows['title_en'] }}</a>  
                                                            @else
                                                                <li class="<?php if(substr_count($url, "/") >= 0 && $child_item_rows['title_en'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_en'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $child_item_rows['title_en'] }}" data-desc="{{ $child_item_rows['description_en'] }}" data-img="{{ $postImg }}" href="{{ url($child_item_rows['link_url_en']) }}">{{ $child_item_rows['title_en'] }}</a>  
                                                            @endif
                                                            @if(!empty(($menu_data[$child_item_rows['id']])))
                                                                <ul>
                                                                @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                @php
                                                                    $postImage = json_decode($child_child_item_rows['image_en']);
                                                                    if(isset($postImage[0])){
                                                                        $Img = $postImage[0];
                                                                    }else{
                                                                        $Img = "";
                                                                    }
                                                                    $postImg = URL::to('/')."/public/source/".$Img."";
                                                                    $murl = URL::to('/').session()->get('url');
                                                                @endphp
                                                                @if($child_child_item_rows['link_type_en']  == "internal")
                                                                    <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$child_child_item_rows['link_url_en']) }}">{{ $child_child_item_rows['title_en'] }}</a></li>
                                                                @else
                                                                    <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a href="{{ url($child_child_item_rows['link_url_en']) }}">{{ $child_child_item_rows['title_en'] }}</a></li>
                                                                @endif
                                                                @endforeach
                                                                </ul>
                                                            @endif
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                    
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="menuContent">
                                                        <h3>{{ $item_rows['title_en'] }}</h3>
                                                        <p>{!! $item_rows['description_en'] !!}</p>
                                                        <img src="{{ $mainImage }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @php 
                                    $index++;
                                @endphp
                            @endforeach
                        @else
                            @foreach($menus_parents as $menu_key => $menu_row)
                                @php 
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['id'] = $menu_row->id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['title_ur'] = $menu_row->title_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['description_ur'] = $menu_row->description_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['menu_parent_item_id'] = $menu_row->menu_parent_item_id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_url_ur'] = $menu_row->link_url_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['image_ur'] = $menu_row->image_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_type_ur'] = $menu_row->link_type_ur;
                                    $index++; 
                                @endphp
                            @endforeach
                            @php
                                $index = 0;
                            @endphp
                            @foreach($menu_data[0] as $item_key => $item_rows)
                                @php
                                    $postImageM = json_decode($item_rows['image_ur']);
                                    if(isset($postImageM[0])){
                                        $ImgM = $postImageM[0];
                                    }else{
                                        $ImgM = "";
                                    }
                                    $postImgM = URL::to('/')."/public/source/".$ImgM."";
                                    $murl = URL::to('/').session()->get('url');

                                @endphp
                                <li class="dataGet <?php if(str_contains($url, substr($item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $item_rows['title_ur'] }}" data-desc="{{ $item_rows['description_ur'] }}" href="{{ url(session()->get('url').$item_rows['link_url_ur']) }}">{{ $item_rows['title_ur'] }}</a>
                                    <div class="dropDownBox" uk-dropdown="mode: hover; boundary: .menuBar; boundary-align: true; offset: 0; delay-hide: 0;">
                                        <div class="uk-container">
                                            <div class="" uk-grid>
                                                <div class="uk-width-1-2">
                                                @if(!empty(($menu_data[$item_rows['id']])))
                                                    <ul class="subMenu">
                                                    @foreach($menu_data[$item_rows['id']] as $child_item_key => $child_item_rows)
                                                        @php
                                                            $postImage = json_decode($child_item_rows['image_ur']);
                                                            if(isset($postImage[0])){
                                                                $Img = $postImage[0];
                                                            }else{
                                                                $Img = "";
                                                            }
                                                            $postImg = URL::to('/')."/public/source/".$Img."";
                                                            $murl = URL::to('/').session()->get('url');
                                                        @endphp
                                                        @if($child_item_rows['link_type_ur']  == "internal")
                                                            <li class="<?php if(substr_count($url, "/") >= 0 && $child_item_rows['title_ur'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_ur'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $child_item_rows['title_ur'] }}" data-desc="{{ $child_item_rows['description_ur'] }}" data-img="{{ $postImg }}" href="{{ url(session()->get('url').$child_item_rows['link_url_ur']) }}">{{ $child_item_rows['title_ur'] }}</a>  
                                                        @else
                                                            <li class="<?php if(substr_count($url, "/") >= 0 && $child_item_rows['title_ur'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_ur'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a class="dataCall" data-title="{{ $child_item_rows['title_ur'] }}" data-desc="{{ $child_item_rows['description_ur'] }}" data-img="{{ $postImg }}" href="{{ url($child_item_rows['link_url_ur']) }}">{{ $child_item_rows['title_ur'] }}</a>  
                                                        @endif
                                                        @if(!empty(($menu_data[$child_item_rows['id']])))
                                                            <ul>
                                                            @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                @php
                                                                    $postImage = json_decode($child_child_item_rows['image_ur']);
                                                                    if(isset($postImage[0])){
                                                                        $Img = $postImage[0];
                                                                    }else{
                                                                        $Img = "";
                                                                    }
                                                                    $postImg = URL::to('/')."/public/source/".$Img."";
                                                                    $murl = URL::to('/').session()->get('url');
                                                                @endphp
                                                                @if($child_child_item_rows['link_type_ur']  == "internal")
                                                                    <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$child_child_item_rows['link_url_ur']) }}">{{ $child_child_item_rows['title_ur'] }}</a></li>
                                                                @else
                                                                    <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a href="{{ url($child_child_item_rows['link_url_ur']) }}">{{ $child_child_item_rows['title_ur'] }}</a></li>
                                                                @endif
                                                            @endforeach
                                                            </ul>
                                                        @endif
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                @endif
                                                    
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="menuContent">
                                                        <h3>{{ $item_rows['title_ur'] }}</h3>
                                                        <p>{!! $item_rows['description_ur'] !!}</p>
                                                        <img src="{{ $postImgM }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @php 
                                    $index++;
                                @endphp
                            @endforeach
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Mobile Header Start -->
<header class="mobileHeader">
    <div class="uk-container">
        <div class="mobHeaderLeft">
            <a href="#mobileMenu" class="mobileMenuBtn" uk-toggle><img src="{{asset('public/assets/images/menuicon.svg')}}" uk-svg /></a>
            @php
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            @endphp
            @if(session()->get('url') == 'en')
                @if(strpos(str_replace('/en','/ur',$url), 'ur') !== false)
                    <a href="{{ str_replace('/en','/ur',$url); }}" class="LanguageBtn">اردو</a>
                @else
                    <a href="{{ url('/ur/home') }}" class="LanguageBtn">اردو</a>
                @endif
            @else
                @if(strpos(str_replace('/en','/ur',$url), 'ur') !== false)
                    <a href="{{ str_replace('/ur','/en',$url); }}" class="LanguageBtn">English</a>
                @else
                    <a href="{{ url('/en/home') }}" class="LanguageBtn">English</a>
                @endif
            
            @endif
            <div class="searchBox">
                <form action="/en/search" method="get">
                    <input type="search" name="searchfld" id="searchfld2">
                    {{-- <label for="searchfld2"><span uk-icon="search"></span></label> --}}
                    <button type="button" class="search-btn"> <span uk-icon="search"></span> </button>
                </form>
            </div>
        </div>
        <a class="mobileLogo" href="{{url('/')}}"><img src="{{asset('public/assets/images/homepage/logo.png')}}" alt="" /></a>
    </div>
</header>
<!-- Mobile Header End -->
<!-- Mobile Menu Start -->
<div id="mobileMenu" class="mobileMenu" uk-offcanvas="mode: none; overlay: true">
    <div class="mobileMenuBox">
        <div class="mobileMenuHead">
            <div class="uk-container">
                <div class="mobHeaderLeft">
                    <a href="javascript:;" class="mobileMenuBtn uk-offcanvas-close" uk-close></a>
                    <!-- <a href="javascript:;" class="LanguageBtn">اردو</a> -->

                    <div class="searchBox">
                        <form>
                            <input type="search" name="searchfld" id="searchfld3">
                            <label for="searchfld3"><span uk-icon="search"></span></label>
                        </form>
                    </div>
                </div>
                <a class="mobileLogo" href="{{url('/')}}"><img src="{{asset('public/assets/images/homepage/logo.png')}}" alt="" /></a>
            </div>
        </div>
        <div class="mobMenuList">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                @if(isset($menus_parents))
                    @if(session()->get('url') == 'en')
                        @if(isset($menus_parents))
                            @php 
                                $menu_data = array();
                                $index = 0;
                            @endphp

                            @foreach($menus_parents as $menu_key => $menu_row)
                                @php 
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['id'] = $menu_row->id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['title_en'] = $menu_row->title_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['description_en'] = $menu_row->description_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['menu_parent_item_id'] = $menu_row->menu_parent_item_id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_url_en'] = $menu_row->link_url_en;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_type_en'] = $menu_row->link_type_en;
                                    $index++; 
                                @endphp
                            @endforeach
                            @php 
                                $index = 0;
                                $mCount = 0;
                            @endphp
                            @foreach($menu_data[0] as $item_key => $item_rows)
                                @if($item_rows['title_en'] != "")
                                    <li class="uk-parent <?php if(str_contains($url, substr($item_rows['link_url_en'],1))) { echo 'active'; } ?>">
                                        <a href="{{ url($item_rows['link_url_en']) }}">{{ $item_rows['title_en'] }}</a>
                                        <ul class="uk-nav-sub">
                                            @if(!empty(($menu_data[$item_rows['id']])))
                                                @foreach($menu_data[$item_rows['id']] as $child_item_key => $child_item_rows)
                                                    <?php $mCount = 0; ?>
                                                    @if($child_item_rows['title_en'] != "")
                                                        @if(!empty(($menu_data[$child_item_rows['id']])))
                                                            @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                <?php $mCount += 1; ?>
                                                            @endforeach
                                                        @endif
                                                        <li class="<?php if($mCount > 0) { echo "mobSubMenu "; } if(substr_count($url, "/") >= 0 && $child_item_rows['title_en'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_en'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_en'],1))) { echo 'active'; } ?>">
                                                        <span class="mmicon"></span>
                                                        @if($child_item_rows['link_type_en']  == "internal")
                                                            <a href="{{ url(session()->get('url').$child_item_rows['link_url_en']) }}">{{ $child_item_rows['title_en'] }}</a>  
                                                        @else
                                                            <a href="{{ url($child_item_rows['link_url_en']) }}">{{ $child_item_rows['title_en'] }}</a>  
                                                        @endif
                                                        @if(!empty(($menu_data[$child_item_rows['id']])))
                                                            <ul>
                                                            @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_en'],1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$child_child_item_rows['link_url_en']) }}">{{ $child_child_item_rows['title_en'] }}</a></li>
                                                            @endforeach
                                                            </ul>
                                                        @endif
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                                @php 
                                    $index++;
                                @endphp
                            @endforeach
                        @endif
                        @if(isset($menu_items))
                            @foreach($menu_items as $menu_item)
                                @if($menu_item->title_en != "")
                                    <li><a href="{{ url(session()->get('url').$menu_item->link_url_en) }}">{{ $menu_item->title_en }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @else
                        @if(isset($menus_parents))
                            @php 
                                $menu_data = array();
                                $index = 0;
                            @endphp

                            @foreach($menus_parents as $menu_key => $menu_row)
                                @php 
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['id'] = $menu_row->id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['title_ur'] = $menu_row->title_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['description_ur'] = $menu_row->description_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['menu_parent_item_id'] = $menu_row->menu_parent_item_id;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_url_ur'] = $menu_row->link_url_ur;
                                    $menu_data[$menu_row->menu_parent_item_id][$index]['link_type_ur'] = $menu_row->link_type_ur;
                                    $index++; 
                                @endphp
                            @endforeach
                            @php 
                                $index = 0;
                                $mCount = 0;
                            @endphp
                            @foreach($menu_data[0] as $item_key => $item_rows)
                                @if($item_rows['title_ur'] != "")
                                    <li class="uk-parent <?php if(str_contains($url, substr($item_rows['link_url_ur'],1))) { echo 'active'; } ?>">
                                        <a href="{{ url($item_rows['link_url_ur']) }}">{{ $item_rows['title_ur'] }}</a>
                                        <ul class="uk-nav-sub">
                                            @if(!empty(($menu_data[$item_rows['id']])))
                                                @foreach($menu_data[$item_rows['id']] as $child_item_key => $child_item_rows)
                                                    <?php $mCount = 0; ?>
                                                    @if($child_item_rows['title_ur'] != "")
                                                        @if(!empty(($menu_data[$child_item_rows['id']])))
                                                            @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                <?php $mCount += 1; ?>
                                                            @endforeach
                                                        @endif
                                                        <li class="<?php if($mCount > 0) { echo "mobSubMenu "; } if(substr_count($url, "/") >= 0 && $child_item_rows['title_ur'] != "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } else if(substr_count($url, "/") == 0 && $child_item_rows['title_ur'] == "Overview" && str_contains($url, substr($child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>">
                                                        <span class="mmicon"></span>
                                                        @if($child_item_rows['link_type_ur']  == "internal")
                                                            <a href="{{ url(session()->get('url').$child_item_rows['link_url_ur']) }}">{{ $child_item_rows['title_ur'] }}</a>  
                                                        @else
                                                            <a href="{{ url($child_item_rows['link_url_ur']) }}">{{ $child_item_rows['title_ur'] }}</a>  
                                                        @endif
                                                        @if(!empty(($menu_data[$child_item_rows['id']])))
                                                            <ul>
                                                            @foreach($menu_data[$child_item_rows['id']] as $child_child_item_key => $child_child_item_rows)
                                                                <li class="<?php if(str_contains($url, substr($child_child_item_rows['link_url_ur'],1))) { echo 'active'; } ?>"><a href="{{ url(session()->get('url').$child_child_item_rows['link_url_ur']) }}">{{ $child_child_item_rows['title_ur'] }}</a></li>
                                                            @endforeach
                                                            </ul>
                                                        @endif
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                                @php 
                                    $index++;
                                @endphp
                            @endforeach
                        @endif
                        @if(isset($menu_items))
                            @foreach($menu_items as $menu_item)
                                @if($menu_item->title_ur != "")
                                    <li><a href="{{ url(session()->get('url').$menu_item->link_url_ur) }}">{{ $menu_item->title_ur }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endif
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
