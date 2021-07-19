<template>
  <div class="flex">
    <div class="w-1/5"></div>
    <div class="w-1/5 px-8 py-6">
      <a
        :href="this.field.link"
        type="button"
        class="relative inline-flex items-center btn btn-default btn-primary"
        dusk="update-button"
        target="_blank"
      >
        <span> {{ this.field.text }} </span>
      </a>
    </div>
  </div>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || "";
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || "");
    },
  },
};
</script>
