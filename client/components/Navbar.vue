<template>
  <div
    class=" bg-cover bg-center bg-no-repeat navbar  bg-white h-[368px] shadow items-start"
  >
    <div class="flex justify-between">
      <nuxt-link to="/">Lara Commerce</nuxt-link>
      <div class=" flex space-x-4 uppercase">
        <nuxt-link class="  text-base" to="/">Home</nuxt-link>
        <nuxt-link class="  text-base" to="/">About</nuxt-link>
      </div>
    </div>

    <div class=" flex justify-center items-center h-full">
      <input
        type="text"
        name=""
        id=""
        placeholder="Search"
        class=" w-full max-w-2xl p-4 rounded-md focus:outline-none focus:ring-2 ring-yellow-500 shadow"
      />
    </div>
  </div>
</template>

<style scoped>
.navbar {
  padding: 0.5rem 1rem;
  background-image: url(https://react-instantsearch.netlify.app/examples/e-commerce/assets/cover.png);
}
</style>
