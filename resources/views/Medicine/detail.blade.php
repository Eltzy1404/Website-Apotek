<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $detail->name}}</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 py-6">
  <ol class="flex items-center gap-1 text-sm text-gray-700">
    <li>
      <a href="#" class="block transition-colors hover:text-gray-900" aria-label="Home">
        <svg
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          class="size-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
          />
        </svg>
      </a>
    </li>

    <li class="rtl:rotate-180">
      <svg
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        class="size-4"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd"
        />
      </svg>
    </li>

    <li>
      <a href="#" class="block transition-colors hover:text-gray-900"> Detail </a>
    </li>

  </ol>
</nav>

<input type="checkbox" id="nav-toggle" class="peer sr-only" />

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
  <nav aria-label="Breadcrumb">
    <ol class="flex flex-wrap items-center gap-1 text-xs text-gray-500">
      <li><a href="#" class="hover:text-gray-800">Home</a></li>
      <li aria-hidden="true">/</li>
      <li><a href="#" class="hover:text-gray-800">Tents &amp; shelters</a></li>
      <li aria-hidden="true">/</li>
      <li aria-current="page" class="text-gray-800">Kestrel 2P Ultralight</li>
    </ol>
  </nav>

  <div class="mt-6 grid gap-10 lg:grid-cols-2 lg:gap-16">
    <div>
      <div class="overflow-hidden rounded-lg bg-gray-100">
        <img
          id="ProductGalleryImage"
          alt="Kestrel 2P Ultralight tent pitched on a ridgeline at dawn"
          src="{{ asset('gambars/'. $detail->medicine_image)}}"
          class="aspect-square w-full object-cover"
        />
      </div>


    </div>

    <div>
      <h1 class="text-2xl font-semibold text-gray-900 sm:text-3xl">Kestrel 2P Ultralight</h1>

      <a href="#reviews" class="mt-2 flex items-center gap-2">
        <span class="flex items-center gap-0.5 text-amber-500">
          <span class="sr-only">Rated 4 out of 5 stars</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="size-4"
            aria-hidden="true"
          >
            <path
              d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="size-4"
            aria-hidden="true"
          >
            <path
              d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="size-4"
            aria-hidden="true"
          >
            <path
              d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="size-4"
            aria-hidden="true"
          >
            <path
              d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="size-4 text-gray-200"
            aria-hidden="true"
          >
            <path
              d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
            />
          </svg>
        </span>
        <span class="text-sm text-gray-500 underline underline-offset-2">126 reviews</span>
      </a>

      <p class="mt-4 text-2xl font-medium text-gray-900">$389.00</p>

      <p class="mt-4 text-gray-600">
        A freestanding 2-person shelter built for three-season trips where every gram in the
        pack has to earn its place. Double-wall construction sheds condensation without
        sacrificing the 1.4kg trail weight.
      </p>

      <div class="mt-6 flex flex-wrap items-end gap-4">
        <div>
          <label for="Quantity" class="block text-sm font-medium text-gray-900">Quantity</label>
          <div class="mt-1 flex items-center gap-1">
            <button
              type="button"
              class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
            >
              &minus;
            </button>
            <input
              type="number"
              id="Quantity"
              value="1"
              class="h-10 w-16 rounded-md border-gray-300 text-center sm:text-sm"
            />
            <button
              type="button"
              class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
            >
              &plus;
            </button>
          </div>
        </div>

        <button
          type="button"
          class="flex-1 rounded-md bg-emerald-700 px-6 py-3 text-sm font-medium text-white transition hover:bg-emerald-800"
        >
          Add to cart
        </button>
      </div>

      <p>Expired : {{ \Carbon\Carbon::parse($detail->expired)->format('d M Y') }}</p>
    </div>
  </div>

  <div class="mt-16">
    <div class="border-b border-gray-200">
      <div role="tablist" class="-mb-px flex gap-6">
        <button
          type="button"
          id="tab-description"
          role="tab"
          aria-selected="true"
          aria-controls="description"
          class="border-b-2 py-3 text-sm font-medium aria-selected:border-emerald-700 aria-selected:text-emerald-700 aria-[selected=false]:border-transparent aria-[selected=false]:text-gray-500 aria-[selected=false]:hover:text-gray-700"
        >
          Description
        </button>
        <button
          type="button"
          id="tab-shipping"
          role="tab"
          aria-selected="false"
          aria-controls="shipping"
          tabindex="-1"
          class="border-b-2 py-3 text-sm font-medium aria-selected:border-emerald-700 aria-selected:text-emerald-700 aria-[selected=false]:border-transparent aria-[selected=false]:text-gray-500 aria-[selected=false]:hover:text-gray-700"
        >
          Shipping &amp; returns
        </button>
        <button
          type="button"
          id="tab-reviews"
          role="tab"
          aria-selected="false"
          aria-controls="reviews"
          tabindex="-1"
          class="border-b-2 py-3 text-sm font-medium aria-selected:border-emerald-700 aria-selected:text-emerald-700 aria-[selected=false]:border-transparent aria-[selected=false]:text-gray-500 aria-[selected=false]:hover:text-gray-700"
        >
          Reviews (126)
        </button>
      </div>
    </div>

    <div
      id="description"
      role="tabpanel"
      aria-labelledby="tab-description"
      class="mt-6 max-w-2xl text-gray-600"
    >
      <p>
        {{ $detail->description }}
      </p>

      <ul class="mt-4 grid grid-cols-2 gap-x-6 gap-y-2 text-sm">
        <li><span class="text-gray-500">Packed weight</span> &middot; 1.4kg</li>
        <li><span class="text-gray-500">Floor area</span> &middot; 2.7m&sup2;</li>
        <li><span class="text-gray-500">Peak height</span> &middot; 104cm</li>
        <li><span class="text-gray-500">Season rating</span> &middot; 3-season</li>
      </ul>
    </div>

    <div
      id="shipping"
      role="tabpanel"
      aria-labelledby="tab-shipping"
      hidden
      class="mt-6 max-w-2xl text-gray-600"
    >
      <p>
        Ships within 2 business days from our EU and US warehouses. Free returns within 30 days
        if it hasn't been pitched outside &mdash; unused, tags on, original packaging.
      </p>

      <ul class="mt-4 grid grid-cols-2 gap-x-6 gap-y-2 text-sm">
        <li><span class="text-gray-500">Delivery</span> &middot; 2&ndash;4 business days</li>
        <li><span class="text-gray-500">Returns window</span> &middot; 30 days</li>
        <li><span class="text-gray-500">Warranty</span> &middot; 2 years</li>
        <li><span class="text-gray-500">Repair kit</span> &middot; Included</li>
      </ul>
    </div>

    <div
      id="reviews"
      role="tabpanel"
      aria-labelledby="tab-reviews"
      hidden
      class="mt-6 max-w-2xl scroll-mt-20"
    >
      <div class="flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-900">Reviews</h2>
        <span class="text-sm text-gray-500">4.6 average from 126 reviews</span>
      </div>

      <ul class="mt-6 space-y-4">
        <li class="rounded-lg border border-gray-200 p-6">
          <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-0.5 text-amber-500">
              <span class="sr-only">Rated 4 out of 5 stars</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-4"
                aria-hidden="true"
              >
                <path
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-4"
                aria-hidden="true"
              >
                <path
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-4"
                aria-hidden="true"
              >
                <path
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-4"
                aria-hidden="true"
              >
                <path
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-4 text-gray-200"
                aria-hidden="true"
              >
                <path
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                />
              </svg>
            </div>

            <span class="inline-flex items-center gap-1 text-xs font-medium text-emerald-700">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="size-3.5"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                  clip-rule="evenodd"
                />
              </svg>
              Verified purchase
            </span>
          </div>

          <p class="mt-3 text-sm font-medium text-gray-900">
            Kept us dry through a week of rain
          </p>
          <p class="mt-1 text-sm text-gray-600">
            Pitched this in a downpour at 6,000ft and stayed dry all night. Poles are
            colour-coded so it went up in under four minutes even in the wind.
          </p>
          <p class="mt-3 text-xs text-gray-500">Freya Lindqvist &middot; 3 weeks ago</p>
        </li>

        <li class="rounded-lg border border-gray-200 p-6">
          <div class="flex items-center gap-0.5 text-amber-500">
            <span class="sr-only">Rated 3 out of 5 stars</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="size-4"
              aria-hidden="true"
            >
              <path
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="size-4"
              aria-hidden="true"
            >
              <path
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="size-4"
              aria-hidden="true"
            >
              <path
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="size-4 text-gray-200"
              aria-hidden="true"
            >
              <path
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="size-4 text-gray-200"
              aria-hidden="true"
            >
              <path
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
              />
            </svg>
          </div>

          <p class="mt-3 text-sm font-medium text-gray-900">Good pack, straps run narrow</p>
          <p class="mt-1 text-sm text-gray-600">
            Compression straps and the hip belt are excellent, but the shoulder straps dug in on
            longer days. Sizing up helped.
          </p>
          <p class="mt-3 text-xs text-gray-500">Owen Baptiste &middot; 2 months ago</p>
        </li>
      </ul>
    </div>
  </div>

</main>


<script>
  const navToggleCheckbox = document.getElementById('nav-toggle')
  const navToggleLabel = document.getElementById('nav-toggle-label')

  navToggleCheckbox.addEventListener('change', () => {
    navToggleLabel.setAttribute('aria-expanded', String(navToggleCheckbox.checked))
  })

  const tabs = document.querySelectorAll('[role="tab"]')

  const activateTab = (tab) => {
    tabs.forEach((otherTab) => {
      const isSelected = otherTab === tab

      otherTab.setAttribute('aria-selected', String(isSelected))
      otherTab.tabIndex = isSelected ? 0 : -1

      document.getElementById(otherTab.getAttribute('aria-controls')).hidden = !isSelected
    })
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      activateTab(tab)
      tab.focus()
    })

    tab.addEventListener('keydown', (event) => {
      const targetIndex = {
        ArrowLeft: (index - 1 + tabs.length) % tabs.length,
        ArrowRight: (index + 1) % tabs.length,
        Home: 0,
        End: tabs.length - 1,
      }[event.key]

      if (targetIndex === undefined) return

      event.preventDefault()
      activateTab(tabs[targetIndex])
      tabs[targetIndex].focus()
    })
  })

  document.querySelector('a[href="#reviews"]').addEventListener('click', () => {
    activateTab(document.getElementById('tab-reviews'))
  })

  const galleryImage = document.getElementById('ProductGalleryImage')
  const galleryButtons = document.querySelectorAll('[data-gallery-image]')

  galleryButtons.forEach((button) => {
    button.addEventListener('click', () => {
      galleryButtons.forEach((otherButton) => {
        otherButton.setAttribute('aria-pressed', String(otherButton === button))
      })

      galleryImage.src = button.dataset.galleryImage
      galleryImage.alt = button.dataset.galleryAlt
    })
  })
</script>
</body>
</html>