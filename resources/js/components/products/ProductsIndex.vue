<template>
    <div class="overflow-hidden align-middle">
        <div class="flex place-content-end mb-4">
            <button class="px-4 py-2 cursor-pointer">
                <router-link :to="{ name: 'products.create' }" class="">Create product</router-link>
            </button>
        </div>

        <table class="border">
            <thead>
            <tr>
                <th class="px-6 py-3">
                    <span class="text-xs font-medium text-left uppercase">Name</span>
                </th>
                <th class="px-6 py-3">
                    <span class="text-xs font-medium text-left  uppercase">SKU</span>
                </th>
                <th class="px-6 py-3">
                    <span class="text-xs font-medium text-left uppercase">Quantity</span>
                </th>
                <th class="px-6 py-3">
                    <span class="text-xs font-medium text-left uppercase">Price</span>
                </th>
                <th class="px-6 py-3">
                    <span class="text-xs font-medium text-left uppercase">Category</span>
                </th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>

            <tbody class="bg-white">
            <template v-for="item in products" :key="item.id">
                <tr class="bg-white">
                    <td class="px-6 py-4">
                        {{ item.name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ item.sku }}
                    </td>
                    <td class="px-6 py-4">
                        {{ item.quantity }}
                    </td>
                    <td class="px-6 py-4">
                        {{ item.price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ item.category }}
                    </td>
                    <td class="px-6 py-4">
                        <router-link :to="{ name: 'products.edit', params: { id: item.id } }"
                                     class="mr-2 inline-flex items-center px-4 py-2 border rounded-md text-white bg-warning">
                            Edit
                        </router-link>
                        <button @click="deleteProduct(item.id)"
                                class="inline-flex items-center px-4 py-2  border rounded-md text-xs text-white bg-danger">
                            Delete</button>
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
  import useProducts from "../../composables/products";
  import {onMounted} from "vue";

  export default  {
      setup() {
          const {products, getProducts, destroyProduct} = useProducts();

          onMounted(getProducts);

          const deleteProduct = async (id) => {
              if (!window.confirm('Are you sure?')) {
                  return
              }
              await destroyProduct(id);
              await getProducts();
          }

          return {
              products,
              deleteProduct
          }
      }
  }
</script>
