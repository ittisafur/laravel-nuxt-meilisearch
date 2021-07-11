<template>
  <Container>
    <div class=" my-20 grid grid-cols-1 md:grid-cols-12 gap-10">
      <aside class=" col-span-4">
        <div class=" bg-white rounded-md shadow p-5">
          <h1 class=" uppercase text-xl text-gray-700">Brands</h1>
          <div class=" flex flex-col p-0 m-0 space-y-3 mt-5">
            <a v-for="brand in brands" :key="brand.id" href="#">{{
              brand.name
            }}</a>
          </div>
        </div>

        <div class=" bg-white rounded-md shadow p-5 mt-10">
          <h1 class=" uppercase text-xl text-gray-700">Categories</h1>
          <div class=" flex flex-col p-0 m-0 space-y-3 mt-5">
            <a v-for="category in categories" :key="category.id" href="#">{{
              category.name
            }}</a>
          </div>
        </div>
      </aside>

      <main class=" col-span-8">
        <div class=" grid grid-cols-3 gap-10">
          <Product
            v-for="product in products"
            :key="product.id"
            :product="product"
          />
        </div>
      </main>
    </div>
  </Container>
</template>

<script>
export default {
  data() {
    return {
      products: [],
      categories: [],
      brands: []
    };
  },
  async fetch() {
    const { data: products } = await this.$axios.$get("api/products");
    const { data: brands } = await this.$axios.$get("api/brands");
    const { data: categories } = await this.$axios.$get("api/categories");

    this.products = products;
    this.brands = brands;
    this.categories = categories;
  }
};
</script>
