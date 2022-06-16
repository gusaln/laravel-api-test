<template>
  <div class="card w-100" style="width: 18rem">
    <div class="card-body text-left">
      <h3 class="card-title">{{ post.title }}</h3>
      <div class="card-subtitle mb-4">by Gustavo Lopez</div>
      <p class="card-text mb-4">{{ post.content }}</p>

      <new-comment-form class="mb-4" :parentId="post.id" parentType="posts" @success="onCommentAdded" />

      <div class="ml-4">
        <comment-card class="mb-4" v-for="comment in comments" :key="comment.id" :comment="comment" />
      </div>
    </div>
  </div>
</template>

<script>
import CommentCard from "./CommentCard.vue";
import NewCommentForm from "./NewCommentForm.vue";

async function getComments(postId) {
  const res = await fetch(`http://localhost:8080/api/posts/${postId}/comments`);

  return await res.json();
}

export default {
  components: { CommentCard, NewCommentForm },

  props: {
    post: Object,
  },

  data() {
    return {
      comments: [],
    };
  },

  mounted() {
    this.getComments();
  },

  methods: {
    async onCommentAdded() {
      await this.getComments();
    },

    async getComments() {
      const comments = await getComments(this.post.id);
      this.comments = comments;
    },
  },
};
</script>
