<template>
 <form @submit.prevent="submit">
  <input type="text" v-model="form.title">
  <br><br>
  <input type="text" v-model="form.body">
  <br><br>
  <button type="submit">Submit</button>
 </form>
<br><br>
 <Link :href="'/posts'">Go Back</Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default{
  components: {
    Link,
  },
  data(){
    return{
      form: {
        title: '',
        body: '',
      },
    }
  },
  methods: {
    submit(){
      this.$inertia.post('/posts', this.form)
    }
  }
}
</script>