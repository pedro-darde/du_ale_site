<template>
  <div class="container mt-5 p-2">
    <legend class="text-center"><b>Login</b></legend>
    <form>
      <div class="mb-3">
        <label class="form-label"><b>Email</b></label>
        <input type="email" class="form-control" />
        <div class="form-text text-danger" v-if="errors['email']">
          {{ errors["email"] }}
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label"><b>Senha</b></label>
        <input type="password" class="form-control" />
        <div class="form-text text-danger" v-if="errors['password']">
          {{ errors["password"] }}
        </div>
      </div>
      <button class="btn btn-primary" @click.prevent="login">Entrar</button>
    </form>
  </div>
</template>

<script src="./script.js">
</script>

<style scoped lang="scss" src="./styles.scss">
</style>