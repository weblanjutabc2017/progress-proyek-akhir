<div class="panel-heading">ADMIN Login</div>
<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
{{ csrf_field() }}