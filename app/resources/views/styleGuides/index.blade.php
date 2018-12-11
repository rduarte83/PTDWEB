<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{URL('images/icons/favicon.png')}}" />

  <link rel="stylesheet" type="text/css" href="{{URL('vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('fonts/themify/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('fonts/elegant-font/html-css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('vendor/animate/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('vendor/css-hamburgers/hamburgers.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('vendor/animsition/css/animsition.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('vendor/select2/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('vendor/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('css/main.css')}}">

  <link rel="stylesheet" type="text/css" href="{{URL('css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL('css/custom_style.css')}}">

  <script src='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/default.min.css">
  <title>Stylesheet</title>
</head>

<body>

  <div class="row header" style="text-align: center;">
    <h1>Styleguide</h1>
  </div>

  <!---------- 
    --------------
    ---------------
    ---COMPONENTES---
    ---------------
    --------------
    ----------->

  <div class="row header">
    <h2>Títulos</h2>
  </div>

  <h1>H1</h1>
  <h2>H2</h2>
  <h3>H3</h3>
  <h4>H4</h4>
  <h5>H5</h5>
  <h6>H6</h6>

  <div class="row header">
    <h2>Pesquisa</h2>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="pos-relative bo4 of-hidden size15 m-b-20 w-size300">
        <input class="sizefull s-text7 p-l-22 p-r-22" type="tel" name="phone-number" placeholder="Telemóvel">
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
          &lt;div class=&quot;pos-relative bo4 of-hidden size15 m-b-20 w-size300&quot;&gt;
            &lt;input class=&quot;sizefull s-text7 p-l-22 p-r-22&quot; type=&quot;tel&quot; name=&quot;phone-number&quot; placeholder=&quot;Telem&oacute;vel&quot;&gt;
          &lt;/div&gt;
      </code></pre>
    </div>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="pos-relative bo4 of-hidden size15 m-b-20 w-size300">
        <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="phone-number" placeholder="Email">
      </div>
    </div>

    <div class="col mx-auto">
      <pre><code class="html">
          &lt;div class=&quot;pos-relative bo4 of-hidden size15 m-b-20 w-size300&quot;&gt;
            &lt;input class=&quot;sizefull s-text7 p-l-22 p-r-22&quot; type=&quot;email&quot; name=&quot;phone-number&quot; placeholder=&quot;Email&quot;&gt;
          &lt;/div&gt;
      </code></pre>
    </div>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="pos-relative bo4 of-hidden size15 m-b-20 w-size300">
        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Texto">
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
            &lt;div class=&quot;pos-relative bo4 of-hidden size15 m-b-20 w-size300&quot;&gt;
              &lt;input class=&quot;sizefull s-text7 p-l-22 p-r-22&quot; type=&quot;text&quot; name=&quot;phone-number&quot; placeholder=&quot;Texto&quot;&gt;
            &lt;/div&gt;
        </code></pre>
    </div>
  </div>

  <!-- ButtonS -->
  <div class="row header">
    <h2>Buttons</h2>
  </div>


  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="w-size1">
        <a href="#" class="flex-c-m size2 m-text1 bg-accent hov69 trans-0-4 bo-rad-23">
          Accent
        </a>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
        &lt;div class=&quot;w-size1&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;flex-c-m size2 m-text1 bg-accent hov69 trans-0-4 bo-rad-23&quot;&gt;
            Accent
          &lt;/a&gt;
        &lt;/div&gt; 
      </code></pre>
    </div>
  </div>


  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="w-size1">
        <a href="#" class="flex-c-m size2 m-text1 bg-sucess hov1 trans-0-4 bo-rad-23">
          Sucess
        </a>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
        &lt;div class=&quot;w-size1&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;flex-c-m size2 m-text1 bg-sucess hov1 trans-0-4 bo-rad-23&quot;&gt;
            Sucess
          &lt;/a&gt;
        &lt;/div&gt;
      </code></pre>
    </div>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="w-size1">
        <a href="#" class="flex-c-m size2 m-text1 bg-error hov1 trans-0-4 bo-rad-23">
          Error
        </a>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
        &lt;div class=&quot;w-size1&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;flex-c-m size2 m-text1 bg-error hov1 trans-0-4 bo-rad-23&quot;&gt;
            Error
          &lt;/a&gt;
        &lt;/div&gt;
      </code></pre>
    </div>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="w-size1">
        <button class="flex-c-m size2 bg7 m-text1 bo-rad-23 hov1 trans-0-4">
          Primary
        </button>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
        &lt;div class=&quot;w-size1&quot;&gt;
          &lt;!-- Button --&gt;
          &lt;button class=&quot;flex-c-m size2 bg7 m-text1 bo-rad-23 hov1 trans-0-4&quot;&gt;
            Primary
          &lt;/button&gt;
        &lt;/div&gt;
      </code></pre>
    </div>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="w-size1">
        <a href="#" class="flex-c-m size2 m-text1 bg-neutral hov69 trans-0-4 bo-rad-23">
          Neutral
        </a>
      </div>
    </div>

    <div class="col mx-auto">
      <pre><code class="html">
            &lt;div class=&quot;w-size1&quot;&gt;
              &lt;a href=&quot;#&quot; class=&quot;flex-c-m size2 m-text1 bg-neutral hov69 trans-0-4 bo-rad-23&quot;&gt;
                Neutral
              &lt;/a&gt;
            &lt;/div&gt;
        </code></pre>
    </div>
  </div>



  <!-- Search rectangular-->

  <div class="row header">
    <h2>Search bars</h2>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">

      <div class="search-product pos-relative bo4 of-hidden w-size300">
        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Procurar produtos...">

        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
          <i class="fs-12 fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
            &lt;div class=&quot;search-product pos-relative bo4 of-hidden w-size300&quot;&gt;
              &lt;input class=&quot;s-text7 size6 p-l-23 p-r-50&quot; type=&quot;text&quot; name=&quot;search-product&quot; placeholder=&quot;Procurar produtos...&quot;&gt;

              &lt;button class=&quot;flex-c-m size5 ab-r-m color2 color0-hov trans-0-4&quot;&gt;
                &lt;i class=&quot;fs-12 fa fa-search&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
              &lt;/button&gt;
            &lt;/div&gt;
        </code></pre>
    </div>
  </div>

  <!-- Search round-->

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="pos-relative bo11 of-hidden w-size300">
        <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Procurar">

        <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
          <i class="fs-13 fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
            &lt;div class=&quot;pos-relative bo11 of-hidden w-size300&quot;&gt;
              &lt;input class=&quot;s-text7 size16 p-l-23 p-r-50&quot; type=&quot;text&quot; name=&quot;search-product&quot; placeholder=&quot;Procurar&quot;&gt;

              &lt;button class=&quot;flex-c-m size5 ab-r-m color1 color0-hov trans-0-4&quot;&gt;
                &lt;i class=&quot;fs-13 fa fa-search&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
              &lt;/button&gt;
            &lt;/div&gt;

        </code></pre>
    </div>
  </div>

  <div class="row header">
    <h2>Elemento da lista</h2>
  </div>
  <!-- Elemento de lista
  -->

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
            <img src="images/item-02.jpg" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Herschel supply co 25l
            </a>

            <span class="block2-price m-text6 p-r-5">
              $75.00
            </span>
          </div>
        </div>
      </div>

    </div>


    <div class="col mx-auto">
      <pre><code class="html">

        &lt;div class=&quot;col-sm-12 col-md-6 col-lg-4 p-b-50&quot;&gt;
          &lt;!-- Block2 --&gt;
          &lt;div class=&quot;block2&quot;&gt;
            &lt;div class=&quot;block2-img wrap-pic-w of-hidden pos-relative block2-labelnew&quot;&gt;
              &lt;img src=&quot;images/item-02.jpg&quot; alt=&quot;IMG-PRODUCT&quot;&gt;
      
              &lt;div class=&quot;block2-overlay trans-0-4&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;block2-btn-addwishlist hov-pointer trans-0-4&quot;&gt;
                  &lt;i class=&quot;icon-wishlist icon_heart_alt&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                  &lt;i class=&quot;icon-wishlist icon_heart dis-none&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                &lt;/a&gt;
      
                &lt;div class=&quot;block2-btn-addcart w-size1 trans-0-4&quot;&gt;
                  &lt;!-- Button --&gt;
                  &lt;button class=&quot;flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4&quot;&gt;
                    Add to Cart
                  &lt;/button&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
      
            &lt;div class=&quot;block2-txt p-t-20&quot;&gt;
              &lt;a href=&quot;product-detail.html&quot; class=&quot;block2-name dis-block s-text3 p-b-5&quot;&gt;
                Herschel supply co 25l
              &lt;/a&gt;
      
              &lt;span class=&quot;block2-price m-text6 p-r-5&quot;&gt;
                $75.00
              &lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;      
        </code></pre>
    </div>
  </div>

  <!-- FIM Elemento de lista-->


  <!-- Dropdown-->
  <div class="row header">
    <h2>Dropdown</h2>
  </div>

  <div class="row" style="background-color: #F0F0F0;">
    <div class="col-auto" style="margin: auto;">
      <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 w-size300">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
          Drop Title
          <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
          <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>
        <div class="dropdown-content dis-none p-t-15 p-b-23" style="display: none;">
          <p class="s-text8">
            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin
            gravida arcu nisl, a dignissim mauris placerat
          </p>
        </div>
      </div>
    </div>


    <div class="col mx-auto">
      <pre><code class="html">
            &lt;div class=&quot;wrap-dropdown-content bo6 p-t-15 p-b-14 w-size300&quot;&gt;
              &lt;h5 class=&quot;js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4&quot;&gt;
                Drop Title
                &lt;i class=&quot;down-mark fs-12 color1 fa fa-minus dis-none&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;up-mark fs-12 color1 fa fa-plus&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
              &lt;/h5&gt;
              &lt;div class=&quot;dropdown-content dis-none p-t-15 p-b-23&quot; style=&quot;display: none;&quot;&gt;
                &lt;p class=&quot;s-text8&quot;&gt;
                  Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin
                  gravida arcu nisl, a dignissim mauris placerat
                &lt;/p&gt;
              &lt;/div&gt;
            &lt;/div&gt;

        </code></pre>
    </div>
  </div>

  <!-- Fim Dropdown-->


  <!-- FIM ELEMENTOS -->

  <script type="text/javascript" src="{{ URL("vendor/jquery/jquery-3.2.1.min.js") }}"></script>
  <script type="text/javascript" src="{{ URL("vendor/animsition/js/animsition.min.js") }}"></script>
  <script type="text/javascript" src="{{ URL("vendor/bootstrap/js/popper.js") }}"></script>
  <script type="text/javascript" src="{{ URL("vendor/bootstrap/js/bootstrap.min.js") }}"></script>
  <script type="text/javascript" src="{{ URL("vendor/select2/select2.min.js") }}"></script>
  <script type="text/javascript">
    $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect2')
    });
  </script>
  <script src="{{URL("js/main.js") }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>

</body>

</html>
