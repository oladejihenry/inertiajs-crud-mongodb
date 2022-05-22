<template>
  <h1>All Posts</h1>
  <Link :href="create_url">Create Post</Link>
  <hr>
  <br>
  <div v-for="post in posts" :key="post.id">
    <h3>{{ post.title }}</h3>
    <p>{{ post.body }}</p>
    <Link href="">Edit</Link>
    <hr>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
  components: {
    Link,
  },
  props: {
    posts: Object,
    create_url: String,
    edit_url: String,
  }
}
</script>
