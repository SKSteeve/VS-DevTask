<template>
    <div v-if="errors">
        <div v-for="(v, k) in errors" :key="k" class="bg-danger text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
            <p v-for="error in v" :key="error" class="text-sm">
                {{ error }}
            </p>
        </div>
    </div>
    <form class="" v-on:submit.prevent="saveProduct">
        <div class="rounded-md">
            <div class="form-group">
                <label for="name">Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" class="w-100" v-model="product.name">
                </div>
            </div>

            <div class="form-group">
                <label for="sku">SKU</label>
                <div class="mt-1">
                    <input type="text" name="sku" id="sku" class="w-100" v-model="product.sku">
                </div>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <div class="mt-1">
                    <input type="text" name="quantity" id="quantity" class="w-100" v-model="product.quantity">
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="block text-sm">Price</label>
                <div class="mt-1">
                    <input type="text" name="price" id="price" class="w-100" v-model="product.price">
                </div>
            </div>

            <div  class="form-group">
                <label for="price">Category</label>
                <div class="mt-1">
                    <select name="category_id" id="category_id" v-model="product.category_id">
                        <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="inline-flex items-center px-4 py-2 mt-4 btn-primary">Update</button>
    </form>
</template>

<script>
import useProducts from "../../composables/products";
import useCategories from "../../composables/categories";
import {onMounted} from "vue";
export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { errors, product, getProduct, updateProduct } = useProducts()
        const { getCategories, categories } = useCategories()

        onMounted(getProduct(props.id))
        onMounted(getCategories())

        const saveProduct = async () => {
            await updateProduct(props.id)
        }
        return {
            errors,
            product,
            saveProduct,
            categories,
            getCategories
        }
    }
}
</script>
