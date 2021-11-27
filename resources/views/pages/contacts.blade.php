@extends('layouts.default')
@section('infoheader')
@stop
@section('content')
@include('includes.contacts.contact')
@include('includes.contacts.map')
@stop
@section('includescripts')
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'>
</script>
<script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
<script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>
@stop