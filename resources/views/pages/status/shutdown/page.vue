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
          Markets Shut Down Until Further Notice
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
            16-Feb-2026 | This project is shut down due to server owner
            allegations.
          </p>
        </div>

        <article class="prose prose-invert max-w-none prose-p:text-stone-300">
          <p>
            Some information has come out regarding allegations of the Lost City
            owner taking payments in exchange for favors in-game. I refuse to
            join the discussion or delve deeper, but I do want to make it clear
            that I do not support what was allegedly done, and I am heavily
            disappointed to learn about it.
          </p>

          <p>
            I understand that nothing is free and that game server costs add up,
            but if what was leaked is true, it was done in a corrupt way that
            ruins the game's integrity.
          </p>

          <p>
            I have built and hosted Lost City Markets for over a year now and
            have not once accepted a penny. I loved Lost City and what it stood
            for. Developing and hosting the Markets was my way of showing my
            love for the project.
          </p>

          <p>
            I am keeping item searching available for price history purposes,
            but until information comes out that absolves the claims, no new
            listings can be placed.
          </p>

          <p>
            Sorry for the inconvenience,<br />

            <span class="text-[#90c040]">BigShot</span>
          </p>
        </article>
      </section>
    </div>
  </LayoutMain>
</template>
