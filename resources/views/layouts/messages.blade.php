@if(Session::has('success'))
<div class="alert alert-success">{{ Session::get('success')}}</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info">{{ Session::get('info')}}</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning">{{ Session::get('warning')}}</div>
@endif

