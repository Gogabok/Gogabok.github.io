<template>
    <div class="e404">
    	<h1>Страница не найдена</h1>
    	<hr>
      <router-link to="./"
                   tag="button"
                   class="btn btn-primary btn-noactive"
                   exact-active-class="btn-noactive"
                   active-class="btn-noactive">
        На главную
      </router-link>
    </div>
</template>






<script>

export default {
  name: 'products',
}

</script>







<style scoped>
  .e404 {
    border-left: 1px solid #ccc;
    padding: 10px 0px 0px 30px;
    width: 100%;
  }
  .btn-noactive:active {
    color: #fff;
  }
  .btn-noactive:active {
    color: #fff;
  }
</style>