<template>
  <div class="container mt-5 p-2">
    <div class="row align-items-center h-100">
      <div class="col-6 border-end">
        <h3><b>Área Administrativa </b></h3>
        <p>Faça login para prosseguir</p>
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
            <a href="/admin/criar-usuario" class="pull-right p-2"> Criar conta </a>
          </div>
          <button class="btn btn-duale" @click.prevent="login">Entrar</button>
        </form>
      </div>
      <div class="col-6">
        <img :src="admIconImage" alt="admLogo" class="img-fluid rounded mx-auto d-block"/>
      </div>
    </div>
  </div>
</template>

<script src="./script.js">
</script>

<style scoped lang="scss" src="./styles.scss">
</style>