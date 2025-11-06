<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-white hover:underline cursor-pointer">
        <i class="fa fa-sign-out px-1"></i>Logout
    </button>
</form>
