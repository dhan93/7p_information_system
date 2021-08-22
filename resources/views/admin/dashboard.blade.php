<form method="POST" class="hidden" id="logouter" action="{{ route('logout') }}">
  @csrf
  <input type="submit" value="logout">
</form>