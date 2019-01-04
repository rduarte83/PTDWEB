<?php
/**
 * Created by IntelliJ IDEA.
 * User: Joao
 * Date: 18/11/2018
 * Time: 16:25
 */
?>

<meta name="description" content="Grupo 2 ( OnGas )">
<meta name="author" content="Grupo 2 ( OnGas )">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{{csrf_token()}}" />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================
<link rel="icon" type="image/png" href="/images/icons/favicon.png"/>-->
<link rel="icon" type="image/png" href="{{URL::asset("images/icons/favicon.png") }}"/>
<!--===============================================================================================
<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("fonts/themify/themify-icons.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("fonts/elegant-font/html-css/style.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/animate/animate.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/animsition/css/animsition.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/daterangepicker/daterangepicker.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/slick/slick.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/lightbox2/css/lightbox.min.css")}}">
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("vendor/select2/select2.min.css")}}">
<script type="text/javascript" src="{{URL::asset("vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{URL::asset("css/util.css")}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset("css/main.css")}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset("css/custom_style.css")}}">
<!--===============================================================================================-->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet'/>

<title>OnGas - @yield("title")</title>
