<template>
  <div class=" bg-white shadow rounded-md p-2">
    <h1 class=" text-xl">Lorem ipsum dolor sit.</h1>
    <p>{{ product.teaser }}</p>
    <p class=" mt-3">
      <span v-for="cat in product.categories" :key="cat.id">
        #{{ cat.name }}
      </span>
    </p>

    <p class=" mt-5 text-green-400 text-xl">${{ product.price / 100 }}</p>
  </div>
</template>

<script>
export default {
  props: ["product"]
};
</script>
