<script setup lang="ts">
import { ExclamationTriangleIcon } from "@heroicons/vue/24/outline";
</script>

<template>
  <LayoutMain>
    <Head title="Markets Shut Down" />

    <ItemSearch />

    <div class="mx-auto flex max-w-[620px] flex-col gap-4">
      <div class="text-center">
        <h1 class="mt-1 text-3xl font-bold text-stone-200">
          Markets Shut Down
        </h1>
      </div>

      <section class="border-2 border-[#382418] bg-black p-4 sm:p-5">
        <div
          class="mb-4 flex items-center gap-3 border-b border-stone-800 pb-3"
        >
          <ExclamationTriangleIcon
            class="mt-0.5 size-6 shrink-0 text-amber-400"
          />

          <p class="text-sm text-stone-400">
            16-Feb-2026 | This project is shut down.
          </p>
        </div>

        <article class="prose prose-invert max-w-none prose-p:text-stone-300">
          <p>
            After careful consideration, I have decided to shut down Lost City
            Markets.
          </p>

          <p>
            I’m incredibly thankful for the past 13 months and for everyone who
            used and supported the site during that time. It has meant a lot to
            me to be part of this community.
          </p>

          <p>
            I apologize for any inconvenience this may cause, especially to
            those who were actively using the market.
          </p>

          <p>
            Thank you,<br />

            <span class="text-[#90c040]">BigShot</span>
          </p>
        </article>
      </section>
    </div>
  </LayoutMain>
</template>
