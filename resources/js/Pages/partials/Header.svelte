<script>
	
  import { inertia } from "@inertiajs/svelte";
	
</script>

<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a use:inertia href="/" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a use:inertia href="/clients" class="nav-link link-body-emphasis px-2">Clients</a></li>
        <li class="nav-item"><a href="/" class="nav-link link-body-emphasis px-2">Pricing</a></li>
        <li class="nav-item"><a href="/" class="nav-link link-body-emphasis px-2">FAQs</a></li>
        <li class="nav-item"><a href="/" class="nav-link link-body-emphasis px-2">About</a></li>
      </ul>
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Crud App</span>
      </a>
    </div>
  </header>

