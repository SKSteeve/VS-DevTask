<template>
    <div v-if="errors">
        <div v-for="(v, k) in errors" :key="k" class="bg-danger text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
            <p v-for="error in v" :key="error" class="text-sm">
                {{ error }}
            </p>
        </div>
    </div>

    <form class="" @submit.prevent="saveProduct">
        <div class="rounded-md">
            <div class="form-group">
                <label for="name">Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" class="w-100" v-model="form.name">
                </div>
            </div>

            <div class="form-group">
                <label for="sku">SKU</label>
                <div class="mt-1">
                    <input type="text" name="sku" id="sku" class="w-100" v-model="form.sku">
                </div>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <div class="mt-1">
                    <input type="text" name="quantity" id="quantity" class="w-100" v-model="form.quantity">
                </div>
            </div>

            <div  class="form-group">
                <label for="price">Price</label>
                <div class="mt-1">
                    <input type="text" name="price" id="price" class="w-100" v-model="form.price">
                </div>
            </div>

            <div  class="form-group">
                <label for="price">Category</label>
                <div class="mt-1">
                    <select name="category_id" id="category_id" v-model="form.category_id">
                        <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="inline-flex items-center px-4 py-2 mt-4 btn-primary">Create</button>
    </form>
</template>

<script>
import { reactive } from "vue";
import useProducts from "../../composables/products";
import useCategories from "../../composables/categories";
import {onMounted} from "vue";

export default {
    setup() {
        const { getCategories, categories } = useCategories()
        const { errors, storeProduct } = useProducts()

        onMounted(getCategories())

        const form = reactive({
            'name': '',
            'sku': '',
            'quantity': '',
            'price': '',
            'category_id': '',
        })

        const saveProduct = async () => {
            await storeProduct({...form});
        }
        return {
            form,
            errors,
            saveProduct,
            categories,
            getCategories
        }
    }
}
</script>
