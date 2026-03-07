 <div class="dropdown-menu dropdown-menu-end header_drop_icon">
    <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" role="button"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="dropdown-item cursor-pointer">Log Out</a>
    </form>
</div>
