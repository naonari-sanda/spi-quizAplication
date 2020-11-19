<template>
  <div>
    <the-header :auth="auth" />
    <router-view :errors="errors" />
    <the-footer />
  </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";

export default {
  name: "app",
  components: {
    TheHeader,
    TheFooter,
  },
  props: {
    errors: {
      type: Object | Array,
    },
    auth: {
      type: Object | Array,
    },
  },
};
</script>
