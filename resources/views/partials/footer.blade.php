<footer class="footer footer-horizontal footer-center bg-base-200 text-base-content rounded p-10">
  <nav class="grid grid-flow-col gap-4">
      <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
      <a href="{{ route('about') }}" class="hover:text-primary">About</a>
      <a href="{{ route('blog') }}" class="hover:text-primary">Blog</a>
    </nav>
  <aside>
    <p>Copyright © {{ date('Y') }} - All right reserved by Group 2</p>
  </aside>
</footer>