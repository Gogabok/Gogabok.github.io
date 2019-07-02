<template>
    <div class="success">
    	<h1>Спасибо, ваша заявка успешно отправлена!</h1>
    	<hr>
    	<!-- <router-link to="./"
                     tag="button"
                     class="btn btn-success btn-noactive">
            Вернуться на главную
      </router-link> -->
      <a href="./"><button class="btn btn-success btn-noactive">Вернуться на главную</button></a>
    </div>
</template>






<script>

export default {
  name: 'success',
}

</script>







<style scoped>
  .success {
    border-left: 1px solid #ccc;
    padding: 10px 0px 0px 30px;
    width: 100%;
  }
  .btn-noactive {
    color:#fff;
  }
</style>
