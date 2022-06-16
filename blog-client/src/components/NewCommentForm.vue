<template>
  <div>
    <form class="mb-4" @submit.prevent="addComment" @keyup.enter.prevent="addComment">
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          id="content"
          placeholder="Add a new comment"
          v-model.trim="newComment"
          @input="message = null"
        />
      </div>

      <button type="submit" class="btn btn-warning">Submit</button>
    </form>

    <div class="alert alert-info" role="alert" v-if="!!message">
      {{ message }}
    </div>
  </div>
</template>

<script>
async function addComment(parentId, parentType, content) {
  const res = await axios.post(`http://localhost:8080/api/${parentType}/${parentId}/comments`, { content });

  return res.data;
}

export default {
  props: {
    parentId: [String, Number],
    parentType: String,
  },

  data() {
    return {
      newComment: null,
      message: null,
    };
  },

  methods: {
    async addComment() {
      if (this.newComment.length == 0) {
        this.message = "Comment can't be empty";
        return;
      }

      // Todo handle error
      await addComment(this.parentId, this.parentType, this.newComment);

      this.message = "Comment created successfully!";
      this.newComment = "";

      this.$emit("success");
    },
  },
};
</script>
