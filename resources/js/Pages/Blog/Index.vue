<template>
    <blog-layout>
      <article v-for="post in posts" :key="post.id" class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                    <inertia-link :href="`/blog/${post.slug}`" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ post.title }}</inertia-link>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">{{ post.user.name }}</a>, {{ post.published_at }}
                    </p>
                    <a href="#" class="pb-6">{{ post.body }}</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
    </blog-layout>
</template>

<script>
    import BlogLayout from '@/Layouts/BlogLayout'
    
    export default {
        props:['posts'],
        components: {
            BlogLayout,
        },
    }
</script>
