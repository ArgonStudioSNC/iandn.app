@extends('layouts.header')

@section('pageTitle', 'Get the app!')

@section('body')
  <script type="text/javascript">
  if(navigator.userAgent.match(/Android/i)){
    window.location.href='https://play.google.com/store/apps/details?id=com.argonstudio.iandn';
  }
  else if(navigator.userAgent.match(/iPhone/i)){
    window.location.href='https://itunes.apple.com/ch/app/ils-se-marient-wedding-app/id1465633874?l=fr&mt=8';
  }
  else {
    document.write('<p>Utilisez un mobile</p>');
  }
  </script>
@endsection
