<template>
  <div>
    <post-card v-for="post in posts" :key="post.id" :post="post" />
  </div>
</template>

<script>
import PostCard from "./PostCard.vue";

async function getPosts() {
  const res = await fetch("http://localhost:8080/api/posts");

  return await res.json();
}

export default {
  components: { PostCard },

  data() {
    return {
      posts: [],
    };
  },

  mounted() {
    const vm = this;

    getPosts().then(function (posts) {
      vm.posts = posts;
    });
  },
};
</script>
